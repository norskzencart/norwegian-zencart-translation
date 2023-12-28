<?php
$define = [
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE' => 'PayPal Payments Standard',
    'MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE_NONUSA' => 'PayPal Website Payments Standard',
    'MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE' => 'PayPal',
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG' => 'https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif',
    'MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT' => 'Betal med PayPal',
    'MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT' => 'Spar tid. Betal sikkert. <br />Betal uten å dele dine finasielle detaljer.',
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE' => 'Alle produkter i din handlekurv (Se detaljer i butikken, og din kvittering fra denne.)',
    'MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM' => STORE_NAME.' Kjøp',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX' => 'Engangsbetalinger relatert til ',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_SHORT' => 'Tilleggsavgifter',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_SURCHARGES_LONG' => 'Behandlingsgebyr og andre aktuelle gebyrer',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_SHORT' => 'Rabatter',
    'MODULES_PAYMENT_PAYPALSTD_LINEITEM_TEXT_DISCOUNTS_LONG' => 'Tillagt kreditt, inkludert rabatter, gavekort osv.',
    'MODULES_PAYMENT_PAYPALSTD_NOT_RECOMMENDED' => 'Please note this module is no longer recommended.  See <a href="https://docs.zen-cart.com/user/payment/paypal_standard/" target="_blank" rel="noreferrer noopener">this page</a> for an explanation.',    
    'MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME' => 'Fornavn:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME' => 'Etternavn:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME' => 'Firmanavn:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME' => 'Addressenavn:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET' => 'Gateadresse:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY' => 'By:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE' => 'Fylke:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP' => 'Postnr.:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY' => 'Land:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS' => 'Betalers e-post:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID' => 'Ebay-nr.:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID' => 'Betalernr.:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS' => 'Betalerstatus:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS' => 'Addressestatus:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE' => 'Betalingstype:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS' => 'Betalingsstatus:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON' => 'Venter p.g.a.:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE' => 'Faktura:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE' => 'Betalingsdato:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY' => 'Valuta:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT' => 'Bruttobeløp:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE' => 'Betalingsavgift:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE' => 'Vekslingskurs:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS' => 'Varer:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE' => 'Transaksjonstype:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID' => 'Transaksjonsnummer:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID' => 'Overordnet trans.nr.:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS' => 'Systemkommentarer: ',
];

if (IS_ADMIN_FLAG === true) {
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal Payments Standard</strong> (Older PayPal service, less reliable than Express Checkout)<br><a href="https://www.paypal.com" rel="noreferrer noopener" target="_blank">Manage your PayPal account.</a><br><br><b>Configuration Instructions:</b><br>1. <a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">Sign up for your PayPal account - click here.</a><br>2. In your PayPal account, under "Profile",<ul><li>set your <strong>Instant Payment Notification Preferences</strong> URL to:<br><pre>' . str_replace('index.php?main_page=index', 'ipn_main_handler.php', zen_catalog_href_link(FILENAME_DEFAULT)) . '</pre><br>(If another valid URL is already entered, you may leave it alone.)<br><span class="alert">Be sure that the Checkbox to enable IPN is checked!</span><br><br></li><li>in <strong>Website Payments Preferences</strong> set your <strong>Automatic Return URL</strong> to:<br><pre>' . zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL', false) . '</pre></li>' . (defined('MODULE_PAYMENT_PAYPALSTD_STATUS') ? '' : '<li>... and click "install" above to enable PayPal Standard support... and "edit" to tell Zen Cart your PayPal settings.</li>') . '</ul><hr><strong>Requirements:</strong><br><br>*<strong>PayPal Account</strong> (<a href="https://www.zen-cart.com/partners/paypal-std" rel="noopener" target="_blank">click to setup/configure</a>)<br>*<strong>CURL with SSL</strong> is strongly recommended<br>*<strong>Port 80 (and port 443 if SSL is enabled)</strong> is used for <strong>*bidirectional*</strong> communication with the gateway, so must be open on your host\'s router/firewall.<br>*<strong>Settings</strong> within your PayPal account must be configured as described above.';
} else {
    $define['MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION'] = '<strong>PayPal</strong>';
}
$define['MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO'] = '<img src="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_IMG'] . '" alt="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '" title="' . $define['MODULE_PAYMENT_PAYPAL_MARK_BUTTON_ALT'] . '"> &nbsp;' .
        '<span class="smallText">' . $define['MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT'] . '</span>';

return $define;
