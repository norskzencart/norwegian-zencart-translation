<?php
$define = [
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC' => 'PayPal Express Checkout',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20' => 'PayPal Express Checkout (Pro 2.0 Payflow Edition) (UK)',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC' => 'PayPal Payflow Pro - Gateway',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY' => 'PayPal Express Checkout via Payflow Pro',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION' => '<strong>PayPal Express Checkout</strong>%s<br />'.(substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7,
    'MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION' => '<strong>PayPal</strong>',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE' => 'Credit Card',
    'MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE' => 'PayPal',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER' => 'Fast, Secure Checkout with PayPal:',
    'MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE' => 'PayPal Express Checkout',
    'MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE' => 'PayPal Direct Payment',
    'MODULE_PAYMENT_PAYPALWPP_PF_TEXT_TYPE' => 'Credit Card',
    'MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING' => 'We\'re sorry, but we were unable to process your credit card.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR' => 'The credit card information you entered contains an error.  Please check it and try again.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME' => 'Credit Card First Name:',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME' => 'Credit Card Last Name:',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER' => 'Cardholder Name:',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE' => 'Credit Card Type:',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER' => 'Credit Card Number:',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES' => 'Credit Card Expiry Date:',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE' => 'Credit Card Issue Date:',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER' => 'CVV Number:',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION' => '(on back of the credit card)',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED' => 'Your credit card was declined. Please try another card or contact your bank for more information.',
    'MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE' => 'We were not able to process your order. Please try again, select an alternate payment method, or contact the store owner for assistance.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR' => 'An error occurred when we tried to contact the payment processor. Please try again, select an alternate payment method, or contact the store owner for assistance.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_MESSAGE' => 'Dear store owner,'."\n".'An error occurred when attempting to initiate a PayPal Express Checkout transaction. As a courtesy, only the error "number" was shown to your customer.  The details of the error are shown below.'."\n\n",
    'MODULE_PAYMENT_PAYPALWPP_TEXT_EMAIL_ERROR_SUBJECT' => 'ALERT: PayPal Express Checkout Error',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR' => 'The address information you entered does not appear to be valid or cannot be matched. Please select or add a different address and try again.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR' => 'The address you selected at PayPal is not a Confirmed address. Please return to PayPal and select or add a confirmed address and try again.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_INSUFFICIENT_FUNDS_ERROR' => 'PayPal was unable to successfully fund this transaction. Please choose another payment option or review funding options in your PayPal account before proceeding.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_PAYPAL_DECLINED' => 'Sorry. PayPal has declined the transaction and advised us to tell you to contact PayPal Customer Service for more information. To complete your purchase, please select an alternate payment method.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR' => 'An error occurred when we tried to process your credit card. Please try again, select an alternate payment method, or contact the store owner for assistance.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD' => 'We apologize for the inconvenience, but the credit card you entered is not one that we accept. Please use a different credit card.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN' => 'There was a problem validating your account. Please try again.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER' => '* The cardholder\'s name must be at least '.CC_OWNER_MIN_LENGTH.' characters.\n',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER' => '* The credit card number must be at least '.CC_NUMBER_MIN_LENGTH.' characters.\n',
    'MODULE_PAYMENT_PAYPALWPP_ERROR_AVS_FAILURE_TEXT' => 'ALERT: Address Verification Failure. ',
    'MODULE_PAYMENT_PAYPALWPP_ERROR_CVV_FAILURE_TEXT' => 'ALERT: Card CVV Code Verification Failure. ',
    'MODULE_PAYMENT_PAYPALWPP_ERROR_AVSCVV_PROBLEM_TEXT' => ' Order is on hold pending review by Store Owner.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_UNILATERAL' => ' - You need to register your PayPal API Credentials before you can do advanced transaction processing.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR' => 'The state assigned to your account is not valid.  Please go into your account settings and change it.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR' => 'We are sorry for the inconvenience. The payment could not be initiated because the PayPal account configured by the store owner is not a PayPal Website Payments Pro account or PayPal gateway services have not been purchased.  Please select an alternate method of payment for your order.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR' => 'We are sorry for the inconvenience. The PayPal account authentication settings are not yet set up, or the API security information is incorrect. We are unable to complete your transaction. Please notify the store owner so they can correct this problem.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR' => 'We are sorry -- the PayPal account configured by the store administrator is based in a country that is not supported for Website Payments Pro at the present time. Please choose another payment method to complete your order.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED' => '<span class="alert">&nbsp;(NOTE: Module is not configured yet)</span>',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR' => 'There was a problem retrieving transaction details. ',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_TRANSSEARCH_ERROR' => 'There was a problem locating transactions matching the criteria you specified. ',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR' => 'There was a problem voiding the transaction. ',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR' => 'There was a problem refunding the transaction amount specified. ',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR' => 'There was a problem authorizing the transaction. ',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR' => 'There was a problem capturing the transaction. ',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR' => 'Your Refund Request was rejected by PayPal.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT' => 'You requested a partial refund but did not specify an amount.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR' => 'You requested a full refund but did not check the Confirm box to verify your intent.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT' => 'You requested an authorization but did not specify an amount.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT' => 'You requested a capture but did not specify an amount.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK' => 'Confirm',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR' => 'You requested to void a transaction but did not check the Confirm box to verify your intent.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK' => 'Confirm',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR' => 'You requested an authorization but did not check the Confirm box to verify your intent.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR' => 'You requested funds-Capture but did not check the Confirm box to verify your intent.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED' => 'PayPal refund for %s initiated. Transaction ID: %s. Refresh the screen to see confirmation details updated in the Order Status History/Comments section.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED' => 'PayPal Authorization for %s initiated. Refresh the screen to see confirmation details updated in the Order Status History/Comments section.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED' => 'PayPal Capture for %s initiated. Receipt ID: %s. Refresh the screen to see confirmation details updated in the Order Status History/Comments section.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED' => 'PayPal Void request initiated. Transaction ID: %s. Refresh the screen to see confirmation details updated in the Order Status History/Comments section.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR' => 'There was an error in the attempted transaction. Please see the API Reference guide or transaction logs for detailed information.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR' => 'We are sorry for the inconvenience; however, at the present time we are unable to use PayPal to process orders from the geographic region you selected as your PayPal address.  Please continue using normal checkout and select from the available payment methods to complete your order.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR' => 'It appears that your order was submitted twice. Please check the My Account area to see the actual order details.  Please use the Contact Us form if your order does not appear here but is already paid from your PayPal account so that we may check our records and reconcile this with you.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT' => 'Click here to pay via PayPal Express Checkout',
    'MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG' => 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png',
    'MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG' => 'https://www.paypalobjects.com/en_US/i/btn/btn_xpressCheckoutsm.gif',
    'MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT' => '',
    'MODULE_PAYMENT_PAYPALEC_MARK_BUTTON_IMG' => 'https://www.paypalobjects.com/en_US/i/btn/btn1_for_hub.gif',
    'MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME' => 'First Name:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME' => 'Last Name:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME' => 'Business Name:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME' => 'Address Name:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET' => 'Address Street:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY' => 'Address City:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE' => 'Address State:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP' => 'Address Zip:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY' => 'Address Country:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS' => 'Payer Email:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID' => 'Ebay ID:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID' => 'Payer ID:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS' => 'Payer Status:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS' => 'Address Status:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE' => 'Payment Type:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS' => 'Payment Status:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON' => 'Pending Reason:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE' => 'Invoice:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE' => 'Payment Date:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY' => 'Currency:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT' => 'Gross Amount:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE' => 'Payment Fee:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE' => 'Exchange Rate:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS' => 'Cart items:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE' => 'Trans. Type:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID' => 'Trans. ID:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID' => 'Parent Trans. ID:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE' => '<strong>Order Refunds</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL' => 'If you wish to refund this order in its entirety, click here:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL' => 'Do Full Refund',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL' => 'Do Partial Refund',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR' => '<br />... or enter the partial ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT' => 'Enter the ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT' => 'refund amount here and click on Partial Refund',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX' => '*A Full refund may not be issued after a Partial refund has been applied.<br />*Multiple Partial refunds are permitted up to the remaining unrefunded balance.',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS' => '<strong>Note to display to customer:</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE' => 'Refunded by store administrator.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK' => 'Confirm: ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_COMMENTS' => 'System Comments: ',
    'MODULE_PAYMENT_PAYPALWPP_ENTRY_PROTECTIONELIG' => 'Protection Eligibility:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE' => '<strong>Order Authorizations</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT' => 'If you wish to authorize part of this order, enter the amount  here:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL' => 'Do Authorization',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX' => '',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE' => '<strong>Capturing Authorizations</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL' => 'If you wish to capture all or part of the outstanding authorized amounts for this order, enter the Capture Amount and select whether this is the final capture for this order.  Check the confirm box before submitting your Capture request.<br />',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL' => 'Do Capture',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT' => 'Amount to Capture:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT' => 'Is this the final capture?',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX' => '',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS' => '<strong>Note to display to customer:</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE' => 'Thank you for your order.',
    'MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK' => 'Confirm: ',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE' => '<strong>Voiding Order Authorizations</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID' => 'If you wish to void an authorization, enter the authorization ID here, and confirm:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS' => '<strong>Note to display to customer:</strong>',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE' => 'Thank you for your patronage. Please come again.',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL' => 'Do Void',
    'MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX' => '',
    'MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE' => 'Trans. State:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE' => 'Auth. Code:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR' => 'AVS Address match:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP' => 'AVS ZIP match:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH' => 'CVV2 match:',
    'MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE' => 'Days to Settle:',
    'EMAIL_EC_ACCOUNT_INFORMATION' => 'Your account login details, which you can use to review your purchase, are as follows:',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_ONETIME_CHARGES_PREFIX' => 'One-Time Charges related to ',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_SHORT' => 'Surcharges',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_SURCHARGES_LONG' => 'Handling charges and other applicable fees',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_SHORT' => 'Discounts',
    'MODULES_PAYMENT_PAYPALWPP_LINEITEM_TEXT_DISCOUNTS_LONG' => 'Credits applied, including discount coupons, gift certificates, etc',
    'MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_SUBJECT' => 'Payment in Fraud Review Status: ',
    'MODULES_PAYMENT_PAYPALDP_TEXT_EMAIL_FMF_INTRO' => 'This is an automated notification to advise you that PayPal flagged the payment for a new order as Requiring Payment Review by their Fraud team. Normally the review is completed within 36 hours. It is STRONGLY ADVISED that you DO NOT SHIP the order until payment review is completed. You can see the latest review status of the order by logging into your PayPal account and reviewing recent transactions.',
    'MODULES_PAYMENT_PAYPALWPP_TEXT_BLANK_ADDRESS' => 'PROBLEM: We&#39;re sorry. PayPal has unexpectedly returned a blank address. <br />In order to complete your purchase, please provide your address by clicking the &quot;Sign Up&quot; button below to create an account in our store. Then you may select PayPal again when you continue with checkout. We apologize for the inconvenience. If you have any trouble with checkout, please click the Contact Us link to explain the details to us so we can help you with your purchase and prevent the problem in the future. Thanks.',
    'MODULES_PAYMENT_PAYPALWPP_AGGREGATE_CART_CONTENTS' => 'All the items in your shopping basket (see details in the store and on your store receipt).',
];

return $define;