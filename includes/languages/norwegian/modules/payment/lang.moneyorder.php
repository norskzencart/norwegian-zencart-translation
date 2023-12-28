<?php
$define = [
    'MODULE_PAYMENT_MONEYORDER_TEXT_TITLE' => 'Forhåndsbetaling bank',
    'MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION' => 'Vennligst overfør betalingen til kontonr.:<br />' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '<br /><br />Merk betalingen med ordrenummeret. Betalingsfrist er 10 dager.<br /><br />Vår adresse:<br />' . nl2br(STORE_NAME_ADDRESS,
];
if (defined('MODULE_PAYMENT_MONEYORDER_STATUS')) {
    $define['MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER'] = "Vennligst overfør betalingen til kontonr.:"."\n\n".MODULE_PAYMENT_MONEYORDER_PAYTO."\n\nMerk betalingen med ordrenummeret. Betalingsfrist er 10 dager.\n\nVår adresse:\n".STORE_NAME_ADDRESS."\n\n".'Din ordre blir sendt så fort betalingen er registrert.';
}

return $define;
