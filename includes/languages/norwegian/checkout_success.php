<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_success.php 93 2012-02-16 23:01:05Z syntaxerror.no $
 */

define('NAVBAR_TITLE_1', 'Kasse');
define('NAVBAR_TITLE_2', 'Vellykket - Takk for din ordre');

define('HEADING_TITLE', 'Takk for at du valgte å handle hos oss. Vi setter stor pris på å ha deg som kunde!');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', 'Varsle meg om oppdateringer på disse produktene');
define('TEXT_SEE_ORDERS', 'Du kan se din ordrehistorikk ved å gå til <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '" name="linkMyAccount">Min konto</a> og trykke på vis alle ordrer.');
define('TEXT_CONTACT_STORE_OWNER', 'Dersom du har spørsmål, kan du henvende deg til <a href="' . zen_href_link(FILENAME_CONTACT_US, '', 'SSL') . '" name="linkContactUs">kundeservice</a>.');
define('TEXT_THANKS_FOR_SHOPPING', 'Takk for at du handlet hos oss!');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', 'Du kan også laste ned ditt produkt ved et senere tidspunkt på \'%s\'');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>Ditt ordrenummer:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', 'MERK: For å fullføre din ordre ble en midlertidig konto opprettet. Du kan stenge denne ved å klikke "Logg av", det vil også sikre at din kvittering og kjøpsinformasjon ikke er synlig for den neste som bruker denne datamaskinen. Om du ønsker å fortsette å handle er du selvfølgelig velkommen til det, og du kan da når som helst logge av ved hjelp av lenken på toppen av siden.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', 'Takk for handelen, klikk på "Logg av"-lenken for å forsikre deg om at din kvittering og kjøpsinformasjon ikke er synlig for den neste som bruker denne datamaskinen.');


define('HEADING_ORDER_NUMBER', 'Ordrenr. %s');
define('HEADING_ORDER_DATE', 'Bestilt:');
define('HEADING_ORDER_TOTAL', 'Totalt:');

define('HEADING_DELIVERY_ADDRESS', 'Leveringsadresse');
define('HEADING_SHIPPING_METHOD', 'Leveringsmåte');

define('HEADING_PRODUCTS', 'Produkter');
define('HEADING_TAX', 'Mva');
define('HEADING_TOTAL', 'Totalt');
define('HEADING_QUANTITY', 'Ant.');

define('HEADING_BILLING_ADDRESS', 'Betalers adresse');
define('HEADING_PAYMENT_METHOD', 'Betalingsmåte');

define('HEADING_ORDER_HISTORY', 'Ordrehistorikk og kommentarer');
define('TEXT_NO_COMMENTS_AVAILABLE', 'Det finnes ingen kommentarer.');
define('TABLE_HEADING_STATUS_DATE', 'Dato');
define('TABLE_HEADING_STATUS_ORDER_STATUS', 'Ordrestatus');
define('TABLE_HEADING_STATUS_COMMENTS', 'Kommentarer');
define('QUANTITY_SUFFIX', '&nbsp;stk.  ');
define('ORDER_HEADING_DIVIDER', '&nbsp;-&nbsp;');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
