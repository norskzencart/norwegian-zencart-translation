<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Copyright Translation 2006-2016 Rune Rasmussen - http://www.syntaxerror.no
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: customers.php 84 2012-02-16 17:42:27Z syntaxerror.no $
 */

define('HEADING_TITLE', 'Kunder');

define('TABLE_HEADING_ID', 'Kundenr. ');
define('TABLE_HEADING_FIRSTNAME', 'Fornavn');
define('TABLE_HEADING_LASTNAME', 'Etternavn');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Konto opprettet');
define('TABLE_HEADING_LOGIN', 'Siste påloging');
define('TABLE_HEADING_ACTION', 'Valg');
define('TABLE_HEADING_PRICING_GROUP', 'Prisgruppe');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Godkjent');
define('TABLE_HEADING_GV_AMOUNT', 'Gavekort-balanse');

define('TEXT_DATE_ACCOUNT_CREATED', 'Konto opprettet:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Sist endret:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Siste pålogging:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Antall pålogginger:');
define('TEXT_INFO_COUNTRY', 'Land:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Antall omtaler:');
define('TEXT_DELETE_INTRO', 'Er du sikker på at du ønsker å slette denne kunden?');
define('TEXT_DELETE_REVIEWS', 'Slett %s omtaler(r)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Slett kunde');
define('TYPE_BELOW', 'Fyll inn nedenfor');
define('PLEASE_SELECT', 'Velg en');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Antall ordrer:');
define('TEXT_INFO_LAST_ORDER','Siste ordre:');
define('TEXT_INFO_ORDERS_TOTAL', 'Totalt:');
define('CUSTOMERS_REFERRAL', 'Kundehenvisning <br />Første rabattkode');
define('TEXT_INFO_GV_AMOUNT', 'Gavekort-balanse');

define('ENTRY_NONE', 'Ingen');

define('TABLE_HEADING_COMPANY','Firma');

define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', 'Endre kundens passord');
define('TEXT_PWDRESET_INTRO', 'Fyll inn og bekreft et nytt passord, for å endre passord for denne kunden. Det nye passordet må tilfredstille normale passordregler for kundekontoer.');
define('TEXT_CUST_NEW_PASSWORD', 'Nytt passord:');
define('TEXT_CUST_CONFIRM_PASSWORD', 'Bekreft passord:');
define('ERROR_PWD_TOO_SHORT', 'Feil: Passord er kortere enn minimumskrav som er satt for denne butikken.');
define('SUCCESS_PASSWORD_UPDATED', 'Passord ble oppdatert.');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'Deres passord har blitt oppdatert av butikkens administrator. Nytt passord er: ');
define('EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT', 'Passord endret');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'Du har endret passord for en kunde: ' . "\n" . '%s' . "\n\n" . 'Administrator-id: %s');

define('CUSTOMERS_AUTHORIZATION', 'Kundestatus');
define('CUSTOMERS_AUTHORIZATION_0', 'Godkjent');
define('CUSTOMERS_AUTHORIZATION_1', 'Venter godkjenning - må bli godkjent for å navigere');
define('CUSTOMERS_AUTHORIZATION_2', 'Venter godkjenning - kan navigere, men ingen priser');
define('CUSTOMERS_AUTHORIZATION_3', 'Venter godkjenning - kan navigere med priser, men ikke kjøpe');
define('CUSTOMERS_AUTHORIZATION_4', 'Utestengt - Har ikke lov å logge inn i butikken');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Advarsel: Butikken er satt opp for godkjenning med \'Ingen navigering\'. Kunde er satt til \'Venter godkjenning - ingen navigering\'');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Advarsel: Butikken er satt opp for godkjenning med \'Navigering uten priser\'. Kunde er satt til \'Venter godkjenning - Navigering uten priser\'');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Din kundestatus har blitt oppdatert. Takk for at du handler med oss.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Kundestatus oppdatert');

define('ADDRESS_BOOK_TITLE', 'Adressebok-oppføringer');
define('PRIMARY_ADDRESS', '(forvalgt adresse)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>Merk:</strong></span> Maksimum %s adressebok-oppføringer er tillatt.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 av  ');
