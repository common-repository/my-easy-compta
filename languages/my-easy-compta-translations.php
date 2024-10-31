<?php

if (!defined('ABSPATH')) {
    exit;
}
// Exit if accessed directly

$translations = array(
    'invoices' => __('Invoices', 'my-easy-compta'),
    'clients' => __('Clients', 'my-easy-compta'),
    'quotes' => __('Quotes', 'my-easy-compta'),
    'payments' => __('Payments', 'my-easy-compta'),
    'expenses' => __('Expenses', 'my-easy-compta'),
    'statistics' => __('Statistics', 'my-easy-compta'),
    'settings' => __('Settings', 'my-easy-compta'),
    'add' => __('Add', 'my-easy-compta'),
    'view' => __('View', 'my-easy-compta'),
    'delete' => __('Delete', 'my-easy-compta'),
    'edit' => __('Edit', 'my-easy-compta'),
    'duplicate' => __('Duplicate', 'my-easy-compta'),
    'company_code' => __('Company Code', 'my-easy-compta'),
    'tax_number' => __('Tax number', 'my-easy-compta'),
    'siret' => __('SIRET n°', 'my-easy-compta'),
    'siren' => __('SIREN n°', 'my-easy-compta'),
    'search' => __('Search', 'my-easy-compta'),
    'company_name' => __('Company name', 'my-easy-compta'),
    'manager_name' => __('Manager name', 'my-easy-compta'),
    'address' => __('Address', 'my-easy-compta'),
    'city' => __('City', 'my-easy-compta'),
    'postal_code' => __('Postal code', 'my-easy-compta'),
    'country' => __('Country', 'my-easy-compta'),
    'email' => __('Email', 'my-easy-compta'),
    'phone' => __('Phone', 'my-easy-compta'),
    'mobile' => __('Mobile', 'my-easy-compta'),
    'fax' => __('Fax', 'my-easy-compta'),
    'website' => __('Website', 'my-easy-compta'),
    'actions' => __('Actions', 'my-easy-compta'),
    'quote_number' => __('Quote number', 'my-easy-compta'),
    'invoice_number' => __('Invoice number', 'my-easy-compta'),
    'credit_number' => __('Credit number', 'my-easy-compta'),
    'client_id' => __('ID Client', 'my-easy-compta'),
    'new_client' => __('New client', 'my-easy-compta'),
    'total' => __('Total', 'my-easy-compta'),
    'subtotal' => __('Sub total', 'my-easy-compta'),
    'tax' => __('Tax', 'my-easy-compta'),
    'status' => __('Status', 'my-easy-compta'),
    'created_at' => __('Created at', 'my-easy-compta'),
    'bill_to' => __('Bill to', 'my-easy-compta'),
    'received_from' => __('Received from', 'my-easy-compta'),
    'due_date' => __('Due date', 'my-easy-compta'),
    'provisional_date' => __('Provisional start date', 'my-easy-compta'),
    'draft' => __('Draft', 'my-easy-compta'),
    'pending' => __('Pending', 'my-easy-compta'),
    'approved' => __('Approved', 'my-easy-compta'),
    'rejected' => __('Rejected', 'my-easy-compta'),
    'submit' => __('Submit', 'my-easy-compta'),
    'save' => __('Save', 'my-easy-compta'),
    'update' => __('Update', 'my-easy-compta'),
    'back' => __('Back', 'my-easy-compta'),
    'cancel' => __('Cancel', 'my-easy-compta'),
    'january' => __('January', 'my-easy-compta'),
    'february' => __('February', 'my-easy-compta'),
    'march' => __('March', 'my-easy-compta'),
    'april' => __('April', 'my-easy-compta'),
    'may' => __('May', 'my-easy-compta'),
    'june' => __('June', 'my-easy-compta'),
    'july' => __('July', 'my-easy-compta'),
    'august' => __('August', 'my-easy-compta'),
    'september' => __('September', 'my-easy-compta'),
    'october' => __('October', 'my-easy-compta'),
    'november' => __('November', 'my-easy-compta'),
    'december' => __('December', 'my-easy-compta'),
    'unpaid' => __('Unpaid', 'my-easy-compta'),
    'paid' => __('Paid', 'my-easy-compta'),
    'credit' => __('Credit', 'my-easy-compta'),
    'credits' => __('Credits', 'my-easy-compta'),
    'credit_invoice' => __('Generate credit invoice', 'my-easy-compta'),
    'mark_as_paid' => __('Mark as paid', 'my-easy-compta'),
    'mark_as_canceled' => __('Mark as canceled', 'my-easy-compta'),
    'mark_as_accepted' => __('Mark as accepted', 'my-easy-compta'),
    'mark_as_rejected' => __('Mark as rejected', 'my-easy-compta'),
    'convertToInvoice' => __('Convert to invoice', 'my-easy-compta'),
    'validateInvoice' => __('Validate invoice', 'my-easy-compta'),
    'validate_quote' => __('Validate quote', 'my-easy-compta'),
    'exportToPDF' => __('Export to PDF', 'my-easy-compta'),
    'previewPDF' => __('Preview PDF', 'my-easy-compta'),
    'export' => __('Export', 'my-easy-compta'),
    'display_per_page' => __('Display per page', 'my-easy-compta'),
    'canceled' => __('Canceled', 'my-easy-compta'),
    'new_quote' => __('New quote', 'my-easy-compta'),
    'edit_quote' => __('Edit quote', 'my-easy-compta'),
    'send_quote' => __('Send quote', 'my-easy-compta'),
    'sign_quote' => __('Sign quote', 'my-easy-compta'),
    'sign' => __('Sign', 'my-easy-compta'),
    'signed' => __('Signed', 'my-easy-compta'),
    'pay_invoice' => __('Pay invoice', 'my-easy-compta'),
    'pay' => __('Pay', 'my-easy-compta'),
    'payed' => __('Payed', 'my-easy-compta'),
    'agreement' => __('Agreement & signature', 'my-easy-compta'),
    'clear' => __('Clear', 'my-easy-compta'),
    'new_invoice' => __('New invoice', 'my-easy-compta'),
    'edit_invoice' => __('Edit invoice', 'my-easy-compta'),
    'remind_invoice' => __('Remind client', 'my-easy-compta'),
    'send_invoice' => __('Send invoice', 'my-easy-compta'),
    'resend_invoice' => __('Resend invoice', 'my-easy-compta'),
    'email_subject' => __('Subject', 'my-easy-compta'),
    'email_content' => __('Content', 'my-easy-compta'),
    'send' => __('Send', 'my-easy-compta'),
    'client' => __('Client', 'my-easy-compta'),
    'client_details' => __('Client details', 'my-easy-compta'),
    'edit_client' => __('Edit client', 'my-easy-compta'),
    'payment_date' => __('Payment date', 'my-easy-compta'),
    'amount' => __('Amount', 'my-easy-compta'),
    'total_amount' => __('Total amount', 'my-easy-compta'),
    'after_amount' => __('After amount', 'my-easy-compta'),
    'before_amount' => __('Before amount', 'my-easy-compta'),
    'payment_method' => __('Payment method', 'my-easy-compta'),
    'expense_date' => __('Expense date', 'my-easy-compta'),
    'edit_expense' => __('Edit expense', 'my-easy-compta'),
    'edit_payment' => __('Edit payment', 'my-easy-compta'),
    'edit_item' => __('Edit item', 'my-easy-compta'),
    'category' => __('Category', 'my-easy-compta'),
    'select_category' => __('Select category', 'my-easy-compta'),
    'attachment' => __('Attachment', 'my-easy-compta'),
    'earnings' => __('Earnings', 'my-easy-compta'),
    'annual_payments_overview' => __('Annual Payments Overview', 'my-easy-compta'),
    'monthly_payments' => __('Monthly Payments', 'my-easy-compta'),
    'recently_paid_invoice' => __('Recently Paid Invoices', 'my-easy-compta'),
    'current_month' => __('Current month', 'my-easy-compta'),
    'all_Earnings' => __('All Earnings', 'my-easy-compta'),
    'default_currency' => __('Default currency', 'my-easy-compta'),
    'currency_position' => __('Currency position', 'my-easy-compta'),
    'currency' => __('Currency', 'my-easy-compta'),
    'exchange_rate' => __('Exchange rate', 'my-easy-compta'),
    'invoice_in' => __('Invoice in', 'my-easy-compta'),
    'note' => __('Note', 'my-easy-compta'),
    'item_ref' => __('Ref', 'my-easy-compta'),
    'item_name' => __('Item name', 'my-easy-compta'),
    'item_type' => __('Type', 'my-easy-compta'),
    'description' => __('Description', 'my-easy-compta'),
    'quantity' => __('Quantity', 'my-easy-compta'),
    'qty' => __('Qty', 'my-easy-compta'),
    'unit_price' => __('Unit price', 'my-easy-compta'),
    'discount' => __('Discount', 'my-easy-compta'),
    'select_client' => __('Select client', 'my-easy-compta'),
    'attached_file' => __('Attached file', 'my-easy-compta'),
    'no_data_for_moment' => __('No data for the moment', 'my-easy-compta'),
    'expenses_settings' => __('Expenses settings', 'my-easy-compta'),
    'payments_settings' => __('Payments settings', 'my-easy-compta'),
    'stripe_settings' => __('Stripe settings', 'my-easy-compta'),
    'currency_vat_settings' => __('Currencies & VAT settings', 'my-easy-compta'),
    'quotes_settings' => __('Quotes settings', 'my-easy-compta'),
    'articles_settings' => __('Articles settings', 'my-easy-compta'),
    'categories' => __('Categories', 'my-easy-compta'),
    'invoices_settings' => __('Invoices settings', 'my-easy-compta'),
    'credits_settings' => __('Credits settings', 'my-easy-compta'),
    'system_settings' => __('System settings', 'my-easy-compta'),
    'general_settings' => __('General settings', 'my-easy-compta'),
    'users_settings' => __('Users settings', 'my-easy-compta'),
    'validation_license' => __('License Addons', 'my-easy-compta'),
    'company_logo' => __('Company logo', 'my-easy-compta'),
    'logo_mentions' => __('Logo mentions', 'my-easy-compta'),
    'limit_declaration' => __('Declaration limit', 'my-easy-compta'),
    'limit_tva' => __('TVA limit', 'my-easy-compta'),
    'select' => __('Select', 'my-easy-compta'),
    'activate_logo_mentions' => __('Activate Logo mentions', 'my-easy-compta'),
    'activate_vat' => __('Activate Vat', 'my-easy-compta'),
    'default_vat' => __('Default Vat', 'my-easy-compta'),
    'format_date' => __('Format date', 'my-easy-compta'),
    'invoice_color' => __('Invoice color', 'my-easy-compta'),
    'invoice_prefix' => __('Invoice prefix', 'my-easy-compta'),
    'show_phone' => __('Show Phone', 'my-easy-compta'),
    'show_email' => __('Show Email', 'my-easy-compta'),
    'show_siren' => __('Show SIREN n°', 'my-easy-compta'),
    'show_tax_number' => __('Show TAX n°', 'my-easy-compta'),
    'show_watermark' => __('Show Watermark', 'my-easy-compta'),
    'show_watermark_only_paid' => __('Show Watermark only for Paid status', 'my-easy-compta'),
    'payment_conditions' => __('Payment conditions', 'my-easy-compta'),
    'payment_mode' => __('Payment mode', 'my-easy-compta'),
    'invoice_iban' => __('IBAN', 'my-easy-compta'),
    'invoice_bic' => __('BIC', 'my-easy-compta'),
    'invoice_footer' => __('Invoice footer', 'my-easy-compta'),
    'invoice_terms' => __('Invoice terms', 'my-easy-compta'),
    'credit_color' => __('Credit color', 'my-easy-compta'),
    'credit_prefix' => __('Credit prefix', 'my-easy-compta'),
    'credit_footer' => __('Credit footer', 'my-easy-compta'),
    'credit_terms' => __('Credit terms', 'my-easy-compta'),
    'quote_color' => __('Quote color', 'my-easy-compta'),
    'quote_prefix' => __('Quote prefix', 'my-easy-compta'),
    'quote_footer' => __('Quote footer', 'my-easy-compta'),
    'quote_terms' => __('Quote terms', 'my-easy-compta'),
    'name' => __('Name', 'my-easy-compta'),
    'symbol' => __('Symbol', 'my-easy-compta'),
    'code' => __('Code', 'my-easy-compta'),
    'color' => __('Color', 'my-easy-compta'),
    'background' => __('Background', 'my-easy-compta'),
    'text_color' => __('Text Color', 'my-easy-compta'),
    'currencies' => __('Currencies', 'my-easy-compta'),
    'add_currency' => __('Add currency', 'my-easy-compta'),
    'rate' => __('Rate', 'my-easy-compta'),
    'vat' => __('VAT', 'my-easy-compta'),
    'vat_rates' => __('VAT Rates', 'my-easy-compta'),
    'add_vat' => __('Add VAT', 'my-easy-compta'),
    'payments_methods' => __('Payments methods', 'my-easy-compta'),
    'add_method' => __('Add method', 'my-easy-compta'),
    'id' => __('ID', 'my-easy-compta'),
    'expenses_categories' => __('Expenses categories', 'my-easy-compta'),
    'add_category' => __('Add category', 'my-easy-compta'),
    'are_you_sure' => __('Are you sure?', 'my-easy-compta'),
    'yes_delete_it' => __('Yes, delete it!', 'my-easy-compta'),
    'yes_confirm_it' => __('Yes, confirm it!', 'my-easy-compta'),
    'no_turning_back' => __('There\'s no turning back!', 'my-easy-compta'),
    'create_user' => __('Create user', 'my-easy-compta'),
    'last_invoices' => __('Last invoices', 'my-easy-compta'),
    'new_password' => __('New password', 'my-easy-compta'),
    'confirm_new_password' => __('Confirm new password', 'my-easy-compta'),
    'account_settings' => __('Account settings', 'my-easy-compta'),
    'planning_settings' => __('Planning settings', 'my-easy-compta'),
    'email_settings' => __('Emails settings', 'my-easy-compta'),
    'email_invoice' => __('Emails Invoices', 'my-easy-compta'),
    'email_quote' => __('Emails Quotes', 'my-easy-compta'),
    'invoice_reminder' => __('Invoice reminder', 'my-easy-compta'),
    'payment_received' => __('Payment received', 'my-easy-compta'),
    'coming_soon' => __('Coming soon', 'my-easy-compta'),
    'email_log_active' => __('Activate email logs', 'my-easy-compta'),
    'emails_logs' => __('Emails logs', 'my-easy-compta'),
    'recipient_email' => __('Recipient email', 'my-easy-compta'),
    'sent_at' => __('Date sent', 'my-easy-compta'),
    'event_title' => __('Event title', 'my-easy-compta'),
    'event_category' => __('Event category', 'my-easy-compta'),
    'event_start_date' => __('Event start date', 'my-easy-compta'),
    'event_start_time' => __('Event start date', 'my-easy-compta'),
    'event_end_date' => __('Event end time', 'my-easy-compta'),
    'event_end_time' => __('Event end time', 'my-easy-compta'),
    'select_unselect' => __('Select / Unselect All', 'my-easy-compta'),
    'done' => __('Done', 'my-easy-compta'),
    'error' => __('Error', 'my-easy-compta'),
    'backup' => __('Backup', 'my-easy-compta'),
    'create_backup' => __('Create backup', 'my-easy-compta'),
    'file_name' => __('File name', 'my-easy-compta'),
    'backup_list' => __('Backup list', 'my-easy-compta'),
    'backup_date' => __('Backup date', 'my-easy-compta'),
    'download' => __('Download', 'my-easy-compta'),
    'restore' => __('Restore', 'my-easy-compta'),
    'restore_backup_text' => __('This will automatically create a backup and delete all data to restore the backup.', 'my-easy-compta'),
    'siret_api_token' => __('Token api SIREN v 3.11', 'my-easy-compta'),
    'deleted_successfully' => __('Deleted successfully', 'my-easy-compta'),
    'license_key' => __('License key', 'my-easy-compta'),
    'validate' => __('Validate', 'my-easy-compta'),
    'not_installed' => __('Not installed', 'my-easy-compta'),
    'installed' => __('Installed', 'my-easy-compta'),
    'no_update_available' => __('No update available.', 'my-easy-compta'),
    'update_available' => __('Update available! New version', 'my-easy-compta'),
    'failed_update_available' => __('Failed to check for updates.', 'my-easy-compta'),
    'check_update' => __('Check update', 'my-easy-compta'),
    'addon_name' => __('Addon name', 'my-easy-compta'),
    'slug' => __('Slug', 'my-easy-compta'),
    'expiry_date' => __('Expiry date', 'my-easy-compta'),
    'activation_date' => __('Activation date', 'my-easy-compta'),
    'domain' => __('Domain', 'my-easy-compta'),
    'version' => __('Version', 'my-easy-compta'),
    'success' => __('Success', 'my-easy-compta'),
    'dashboard' => __('Dashboard', 'my-easy-compta'),
    'account' => __('Account', 'my-easy-compta'),
    'logout' => __('Logout', 'my-easy-compta'),
    'total_quotes' => __('Total quotes', 'my-easy-compta'),
    'total_invoices' => __('Total invoices', 'my-easy-compta'),
    'total_paid_invoices' => __('Total paid invoices', 'my-easy-compta'),
    'unpaid_invoices' => __('Unpaid invoices', 'my-easy-compta'),
    'quote_expired' => __('Quote expired', 'my-easy-compta'),
    'invoice_overdue' => __('Invoice Overdue', 'my-easy-compta'),
    'active_email_addon' => __('You need to activate the Email addon to benefit from this feature.', 'my-easy-compta'),
    'active_export_addon' => __('You need to activate the Export addon to benefit from this feature.', 'my-easy-compta'),
    'draft_cannot_send' => __('Invoices in draft status cannot be sent.', 'my-easy-compta'),
    'stripe_settings' => __('Stripe settings', 'my-easy-compta'),
    'stats_settings' => __('Stats settings', 'my-easy-compta'),
    'stripe_mode' => __('Mode', 'my-easy-compta'),
    'test_mode' => __('Test mode', 'my-easy-compta'),
    'live_mode' => __('Live mode', 'my-easy-compta'),
    'stripe_secret_key_live' => __('Secret key (Live mode)', 'my-easy-compta'),
    'stripe_public_key_live' => __('Public key (Live mode)', 'my-easy-compta'),
    'stripe_secret_key_test' => __('Secret key (Test mode)', 'my-easy-compta'),
    'stripe_public_key_test' => __('Public key (Test mode)', 'my-easy-compta'),
    'card_number' => __('Card number', 'my-easy-compta'),
    'expiry_date' => __('Expiration date', 'my-easy-compta'),
    'security_code' => __('Security code', 'my-easy-compta'),
    'payment_success' => __('Payment successful', 'my-easy-compta'),
    'payment_secure' => __('Your payment is secure, and no card details are stored by our platform. The transaction is protected by Stripe\'s service.', 'my-easy-compta'),
    'advance' => __('Advance', 'my-easy-compta'),
    'advance_invoice' => __('Advance invoice', 'my-easy-compta'),
    'min_article' => __('You must have at least one article', 'my-easy-compta'),
    'shipping_fees' => __('Shipping fees', 'my-easy-compta'),
    'qrcode_settings' => __('QRCode Settings', 'my-easy-compta'),
    'stripe_api' => __('Stripe secret key', 'my-easy-compta'),
    'generate_qrcode' => __('QRCode Stripe', 'my-easy-compta'),
    'download_qr_code' => __('Download QRCode Stripe payment link', 'my-easy-compta'),
    'active_qrcode_addon' => __('You need to activate the QRCode Stripe addon to benefit from this feature.', 'my-easy-compta'),
    'all' => __('All', 'my-easy-compta'),
);
