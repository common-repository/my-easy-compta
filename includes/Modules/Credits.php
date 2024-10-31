<?php
namespace ECWP\Admin;

use ECWP\Admin\PDF\PDFGenerator;
use ECWP\API\Routes;

class ECWP_Credits
{
    protected $routes;
    public function __construct()
    {
        add_action('admin_menu', array($this, 'add_submenu_page'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));

        $this->routes = new Routes();
        $this->register_api_routes();
    }

    public function add_submenu_page()
    {
        add_submenu_page(
            'my-easy-compta',
            __('Credits', 'my-easy-compta'),
            __('Credits', 'my-easy-compta'),
            'manage_options',
            'my-easy-compta-credits',
            array($this, 'render_page'),
            6
        );
    }
    public function enqueue_scripts($hook_suffix)
    {
        if ('myeasycompta_page_my-easy-compta-credits' === $hook_suffix) {
            wp_enqueue_script('my-easy-compta-credits', ECWP_URL . '/assets/dist/credits.min.js', array(), ECWP_VERSION, true);
        }
    }

    public function render_page()
    {
        echo '<div id="my-easy-compta-credits-app" class="ecwp-content"></div>';
    }

    private function register_api_routes()
    {
        $this->routes->add_route('/credits', 'GET', $this, 'get_credits', function () {
            return current_user_can('manage_options');
        });

        $this->routes->add_route('/invoices/credit', 'POST', $this, 'create_credit_invoice', function () {
            return current_user_can('manage_options');
        });
        $this->routes->add_route('/credits/(?P<id>\d+)', 'DELETE', $this, 'delete_credit', function () {
            return current_user_can('manage_options');
        });

        $this->routes->add_route('/credits/pdf/(?P<id>\d+)', 'GET', $this, 'generate_credit_pdf', function () {
            return current_user_can('manage_options');
        });

        $this->routes->register_routes();
    }

    public function get_credits($request)
    {
        global $wpdb;

        $per_page = isset($request['per_page']) ? intval($request['per_page']) : 10;
        $page = isset($request['page']) ? intval($request['page']) : 1;
        $offset = ($page - 1) * $per_page;

        $results = $wpdb->get_results(
            $wpdb->prepare("SELECT invoices.id,
                        clients.company_name,
                        currencies.symbol AS currency_symbole,
                        invoices.invoice_number,
                        invoices.total_amount,
                        invoices.due_date,
                        credits.id AS credit_id,
                        credits.credit_number,
                        credits.created_at
                FROM %i AS invoices
                LEFT JOIN %i AS credits ON invoices.id = credits.invoice_id
                LEFT JOIN %i AS clients ON invoices.client_id = clients.id
                LEFT JOIN %i AS currencies ON clients.currency_id = currencies.id
                WHERE invoices.credit = %d
                ORDER BY invoices.id DESC
                LIMIT %d, %d",
                ECWP_TABLE_INVOICES, ECWP_TABLE_CREDITS, ECWP_TABLE_CLIENTS, ECWP_TABLE_CURRENCY,
                1,
                $offset, $per_page),
            OBJECT
        );
        $settings = new \ECWP\Admin\Settings\ECWP_Settings();
        $format_date_response = $settings->get_format_date();
        $format_date = isset($format_date_response->data) ? $format_date_response->data : 'Y-m-d';

        $encrypt = new \ECWP\Admin\Encrypt\ECWP_Encrypt();
        $data = array();
        foreach ($results as $r) {
            $data[] = array(
                'id' => $r->id,
                'client_name' => $r->company_name,
                'client_currency' => $r->currency_symbole,
                'credit_id' => $r->credit_id,
                'credit_number' => $r->credit_number,
                'invoice_number' => $encrypt->decrypt($r->invoice_number),
                'total_amount' => number_format(floatval($encrypt->decrypt($r->total_amount)), 2, '.', ''),
                'due_date' => date_i18n($format_date, strtotime($r->due_date)),
                'created_at' => date_i18n($format_date, strtotime($r->created_at)),
            );
        }
        $total_count = $wpdb->get_var("SELECT COUNT(*) FROM %i WHERE credit = 1", ECWP_TABLE_INVOICES);
        $total_pages = ceil($total_count / $per_page);

        $response = array(
            'credits' => $data,
            'total_count' => $total_count,
            'total_pages' => $total_pages,
            'page' => $page,
            'per_page' => $per_page,
        );

        return rest_ensure_response($response);
    }

    public function create_credit_invoice($request)
    {
        global $wpdb;
        $invoice_id = absint($request['id']);
        $nonce = sanitize_text_field(wp_unslash($request->get_header('X-WP-Nonce')));
        if (!wp_verify_nonce($nonce, 'wp_rest')) {
            return new \WP_Error('rest_nonce_invalid', __('Invalid nonce', 'my-easy-compta'), array('status' => 403));
        }
        $invoice = $wpdb->get_row(
            $wpdb->prepare("SELECT * FROM %i WHERE id = %d", ECWP_TABLE_INVOICES, $invoice_id), ARRAY_A);

        if (!$invoice) {
            return new \WP_Error('invoice_not_found', __('Invoice not found', 'my-easy-compta'), array('status' => 404));
        }

        $wpdb->update(
            ECWP_TABLE_INVOICES,
            array('credit' => 1),
            array('id' => $invoice_id),
            array('%d'),
            array('%d')
        );
        $last_credit_id = $wpdb->get_var($wpdb->prepare("SELECT MAX(id) FROM %i", ECWP_TABLE_CREDITS));
        $credit_prefix = $wpdb->get_var($wpdb->prepare("SELECT meta_value FROM %i WHERE meta_key = 'credit_prefix'", ECWP_TABLE_SETTINGS));
        $credit_prefix = $credit_prefix ? sanitize_text_field($credit_prefix) : 'AVR';
        $credit_number = $credit_prefix . '_' . str_pad($last_credit_id + 1, 4, '0', STR_PAD_LEFT);
        $wpdb->insert(
            ECWP_TABLE_CREDITS,
            array(
                'credit_number' => $credit_number,
                'invoice_id' => $invoice_id,
                'created_at' => gmdate('Y-m-d'),
            ),
            array('%s', '%d', '%s')
        );

        return new \WP_REST_Response(array(
            'success' => true,
            'message' => __('Credit invoice created successfully', 'my-easy-compta'),
            'id' => $invoice_id,
            'credit_number' => $credit_number,
        ), 200);
    }

    public function delete_credit($request)
    {
        global $wpdb;

        $invoice_id = absint($request['id']);
        $nonce = sanitize_text_field(wp_unslash($request->get_header('X-WP-Nonce')));

        if (!wp_verify_nonce($nonce, 'wp_rest')) {
            return new \WP_Error('rest_nonce_invalid', __('Invalid nonce', 'my-easy-compta'), array('status' => 403));
        }

        $invoice = $wpdb->get_row(
            $wpdb->prepare("SELECT * FROM %i WHERE id = %d", ECWP_TABLE_INVOICES, $invoice_id), ARRAY_A
        );

        if (!$invoice) {
            return new \WP_Error('invoice_not_found', __('Invoice not found', 'my-easy-compta'), array('status' => 404));
        }

        $result = $wpdb->update(
            ECWP_TABLE_INVOICES,
            array(
                'credit' => 0,
            ),
            array('id' => $invoice_id),
            array(
                '%d',
            ),
            array('%d')
        );

        if ($result === false) {
            return new \WP_Error('update_failed', __('Failed to update invoice', 'my-easy-compta'), array('status' => 500));
        }

        return new \WP_REST_Response(array('success' => true, 'message' => __('Credit invoice removed successfully', 'my-easy-compta'), 'id' => $invoice_id), 200);
    }

    public function generate_credit_pdf(\WP_REST_Request $request)
    {
        global $wpdb;
        $credit_id = sanitize_text_field($request->get_param('id'));
        $currency_id = sanitize_text_field($request->get_param('currency_id'));

        $pdfGenerator = new PDFGenerator($wpdb);
        $pdfGenerator->generateCreditPDF($credit_id, $currency_id);
    }

}
