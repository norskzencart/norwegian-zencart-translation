<?php
$define = [
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE' => 'Authorize.net (AIM)',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION' => '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Click Here to Sign Up for an Account</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Area</a><br /><br /><strong>Requirements:</strong><br /><hr />*<strong>Authorize.net Account</strong> (see link above to signup)<br />*<strong>CURL is required </strong>and MUST be compiled with SSL support into PHP by your hosting company<br />*<strong>Authorize.net username and transaction key</strong> available from your Merchant Area<br><br>See <a href="http://www.zen-cart.com/content.php?291-how-to-set-up-the-authorizenet-aim-payment-module" target="_blank">the AIM Setup FAQ article</a> for detailed setup instructions.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND' => 'CURL functions not found - required for Authorize.net AIM payment module',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE' => 'Kredittkort',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE' => 'Korttype:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER' => 'Korteier:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER' => 'Kortnummer:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES' => 'Kortets utløpsdato:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV' => 'CVV-nummer:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK' => 'Hva er dette?',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER' => '* Korteiers navn må være minimum '.CC_OWNER_MIN_LENGTH.' tegn.\n',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER' => '* Kortnummer må være minimum '.CC_NUMBER_MIN_LENGTH.' tegn.\n',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV' => '* Det 3 eller 4 siffrede CVV-nummeret fra baksiden av kortet må fylles inn.\n',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE' => 'Ditt kort kunne ikke autoriseres av denne grunn. Vennligst korriger informasjon og prøv deretter på nytt, eller kontakt oss for veiledning.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR' => 'Kredittkortfeil!',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_AUTHENTICITY_WARNING' => 'WARNING: Security hash problem. Please contact store-owner immediately. Your order has *not* been fully authorized.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT' => 'Do Refund',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR' => 'Error: You requested to do a refund but did not check the Confirmation box.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT' => 'Error: You requested a refund but entered an invalid amount.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR' => 'Error: You requested a refund but didn\'t enter the last 4 digits of the Credit Card number.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED' => 'Refund Initiated. Transaction ID: %s - Auth Code: %s',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR' => 'Error: You requested to do a capture but did not check the Confirmation box.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT' => 'Do Capture',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT' => 'Error: You requested a capture but need to enter an amount.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR' => 'Error: You need to specify a Transaction ID.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED' => 'Funds Capture initiated. Amount: %s.  Transaction ID: %s - Auth Code: %s',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT' => 'Do Void',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR' => 'Error: You requested a Void but did not check the Confirmation box.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED' => 'Void Initiated. Transaction ID: %s - Auth Code: %s ',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE' => '<strong>Refund Transactions</strong>',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND' => 'You may refund money to the customer\'s credit card here:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK' => 'Check this box to confirm your intent: ',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT' => 'Enter the amount you wish to refund',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT' => 'Enter the last 4 digits of the Credit Card you are refunding.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID' => 'Enter the original Transaction ID:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS' => 'Notes (will show on Order History):',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE' => 'Refund Issued',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX' => 'You may refund an order up to the amount already captured. You must supply the last 4 digits of the credit card number used on the initial order.<br />Refunds must be issued within 120 days of the original transaction date.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE' => '<strong>Capture Transactions</strong>',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE' => 'You may capture previously-authorized funds here:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT' => 'Enter the amount to Capture: ',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK' => 'Check this box to confirm your intent: ',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID' => 'Enter the original Transaction ID: ',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS' => 'Notes (will show on Order History):',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE' => 'Settled previously-authorized funds.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX' => 'Captures must be performed within 30 days of the original authorization. You may only capture an order ONCE. <br />Please be sure the amount specified is correct.<br />If you leave the amount blank, the original amount will be used instead.',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE' => '<strong>Voiding Transactions</strong>',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID' => 'You may void a transaction which has not yet been settled:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK' => 'Check this box to confirm your intent:',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS' => 'Notes (will show on Order History):',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE' => 'Transaction Cancelled',
    'MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX' => 'Voids must be completed before the original transaction is settled in the daily batch.',
];

return $define;