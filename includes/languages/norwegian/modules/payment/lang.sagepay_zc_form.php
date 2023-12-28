<?php
$define = [
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_ADMIN_TEXT_TITLE' => 'Sagepay Form',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_ADMIN_TEXT_DESCRIPTION' => '<fieldset style="background: #eee; margin-bottom: 1.5em"><legend style="font-size: 1.2em; font-weight: bold">Test Cards Infomation</legend><br />Note : Use these card details on the simulator or test site only!!<br /><br />VISA 4929000000006<br />MASTERCARD 5404000000000001<br />DELTA 4462000000000003<br />SOLO 6334900000000005 Issue 01<br />DOMESTIC MAESTRO 5641820000000005 Issue 01<br />AMEX 374200000000004<br />ELECTRON 4917300000000008<br />JCB 3569990000000009<br />DINERS 36000000000008<br /><br />You will need to supply the following values for<br />CV2, Billing Address and Billing Post Code Numbers.<br /><br />CV2 123<br />Billing Address Numbers 88<br />Billing Post Code Numbers 412<br />These are the only values which will return as Matched.<br /><br />You will also need to enter the<br />3D Secure password as " password " (it is case sensitive)<br />so as the 3D Secure authentication returns<br />Fully Authenticated.',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_CATALOG_TEXT_TITLE' => 'Credit/Debit Card (Secured by Sage Pay)',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_TEXT_ERROR' => 'Debit/Credit Card Error!',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_TEXT_NOTAUTHED_MESSAGE' => 'Your card could not be authorised! Please try again, try another card or <a href="index.php?main_page=contact_us">contact the administrator</a> for further assistance.<p class="ExtraErrorInfo">(%s)</p>',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_TEXT_MALFORMED_MESSAGE' => 'Your card could not be reconised! Please try again, try another card or <a href="index.php?main_page=contact_us">contact the administrator</a> for further assistance.<p class="ExtraErrorInfo">(%s)</p>',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_TEXT_INVALID_MESSAGE' => 'Your card details could not be reconised! Please try again, try another card or <a href="index.php?main_page=contact_us">contact the administrator</a> for further assistance.<p class="ExtraErrorInfo">(%s)</p>',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_TEXT_ABORT_MESSAGE' => 'The Transaction could not be completed because the user clicked the CANCEL button on the payment pages, went inactive for 15 minutes or longer or there was a problem with the users internet connection to our servers.Please try again or <a href="index.php?main_page=contact_us">contact the administrator</a> for further assistance.<p class="ExtraErrorInfo">(%s)</p>',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_TEXT_REJECTED_MESSAGE' => 'Unable to continue! A problem has occurred with our systems. Please <strong><a href="index.php?main_page=contact_us">contact the administrator</a> for further assistance.<p class="ExtraErrorInfo">(%s)</p>',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_TEXT_ERROR_MESSAGE' => 'Unable to continue! A problem has occurred with our systems. Please <strong><a href="index.php?main_page=contact_us">contact the administrator</a></strong> for assistance.<p class="ExtraErrorInfo">(%s)</p>',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_TEXT_DECLINED_MESSAGE' => 'Your card could not be authorised! Please try again or <a href="index.php?main_page=contact_us">contact the administrator</a> for further assistance.<p class="ExtraErrorInfo">(%s)</p>',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_TEXT_ADMIN_TITLE' => 'SagePay Form v%s',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_TEXT_DESCRIPTION_BASE' => '<fieldset style="background: #F7F6F0; margin-bottom: 1.5em"><legend style="font-size: 1.2em; font-weight: bold">Test Card Details</legend>Visa#: 4929000000006<br />MasterCard#: 5404000000000001<br />Visa Debit#: 4462000000000003<br />Solo#: 6334900000000005 - Issue #: 1<br />UK Maestro#: 5641820000000005 - Issue #: 01<br />International Maestro#: 3000000000000004<br />Visa Electron (UKE)#: 4917300000000008<br />AMEX#: 374200000000004<br />JCB#: 3569990000000009<br />Diners Club#: 36000000000008<br />Laser#: 6304990000000000044<p>Any future date can be used for the expiration date.</p><p>The only CVV Code which will return a match is 123.</p><p>The AVS Verification will only return a match if the following Billing Address details are used: <br /><br />Billing Address: 88<br />Billing Postcode: 412</p><p>These are the default billing address details which will be submitted by the module in test mode if the &ldquo;Use Test Billing Address&rdquo; checkbox is ticked.</fieldset><fieldset style="background: #F7F6F0; margin-bottom: 1.5em"><legend style="font-size: 1.2em; font-weight: bold">Admin Links</legend><a target="_blank" href="https://live.sagepay.com/mysagepay">My Sage Pay Live Account Admin</a><br /><br /><a target="_blank" href="https://test.sagepay.com/mysagepay">My Sage Pay Test Account Admin</a><br /><br /><a target="_blank" href="https://test.sagepay.com/simulator">Simulator Admin</a></fieldset>',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_SAGEPAY_TRANSACTION_ID' => 'SagePay Transaction ID:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_VENDOR_TRANSACTION_CODE' => 'Vendor Transaction Code (Unique ID):',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_TEXT_STATUS' => 'Status:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_STATUS_DETAIL' => 'Status Message:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_TX_AUTH_NO' => 'SagePay Authorisation Code:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_AVSCV2' => 'AVS and CV2 Response:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_ADDRESS_RESULT' => 'Specific Address Results:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_POSTCODE_RESULT' => 'Specific Postcode Results:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_CV2_RESULT' => 'Specific CV2 Results:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_3D_SECURE_STATUS' => '3D Secure Status:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_CAVV_RESULT' => 'Specific CAVV Result:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_CARD_TYPE' => 'Card Type:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_LAST_4_CARD_DIGITS' => 'Last 4 Digits of Card:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_PAYPAL_ADDRESS_STATUS' => 'PayPal Address Status:',
    'MODULE_PAYMENT_SAGEPAY_ZC_FORM_PAYPAL_PAYER_STATUS' => 'PayPal Payer Status:',
    'TEXT_TITLE_MCRYPT_ERROR' => ' (mcrypt problem)',
    'TEXT_DESCRIPTION_MCRYPT_ERROR' => ' The PHP mcrypt extension is not available. Sagepay Form will be disabled at checkout.',
    'TEXT_TITLE_SUHOSIN_ERROR' => ' (suhosin problem)',
    'TEXT_DESCRIPTION_SUHOSIN_GET_LENGTH_ERROR' => ' The Suhosin setting for the length of GET parameters is set too low. Please see <a target="_blank" href="https://www.zen-cart.com/content.php?342-The-Sagepay-Form-module-has-an-error-regarding-Suhosin for more details">this faq entry</a>.',
];

return $define;