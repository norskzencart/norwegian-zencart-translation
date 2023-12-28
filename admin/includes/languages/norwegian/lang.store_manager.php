<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Scott C Wilson 2022 Jan 11 New in v1.5.8-alpha $
*/

$define = [
    'HEADING_TITLE' => 'Butikkbehandling',
    'SUCCESS_PRODUCT_UPDATE_SORT_ALL' => '<strong>Vellykket</strong> oppdatering av variantsortering.',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER' => '<strong>Vellykket</strong> oppdatering av produktprisers sorteringsverdier.',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED' => '<strong>Vellykket</strong> tilbakestilling av viste produkter til 0.',
    'SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED' => '<strong>Vellykket</strong> tilbakestilling av bestilte produkter til 0.',
    'SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID' => '<strong>Vellykket</strong> tilbakestilling av alle hovedkategorier for lenkede produkter.',
    'SUCCESS_UPDATE_COUNTER' => '<strong>Vellykket</strong> oppdatering av treffteller til: ',
    'ERROR_CONFIGURATION_KEY_NOT_FOUND' => '<strong>Feil:</strong> Ingen passende konfigurasjonsnøkler ble funnet.',
    'ERROR_CONFIGURATION_KEY_NOT_ENTERED' => '<strong>Feil:</strong> Ingen konfigurasjonsnøkkel eller tekst ble fylt inn for søket. Søk ble derfor stoppet',
    'TEXT_INFO_COUNTER_UPDATE' => '<strong>Oppdater treffteller til ny verdi:</strong> ',
    'TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE' => '<strong>Oppdater alle produkters prissortering</strong><br />- for bruk ved sortering etter viste priser: ',
    'TEXT_INFO_PRODUCTS_VIEWED_UPDATE' => '<strong>Tilbakestill mest viste produkter</strong><br />Tilbakestill telling av mest viste produkter til 0: ',
    'TEXT_INFO_PRODUCTS_ORDERED_UPDATE' => '<strong>Tilbakestill mest kjøpte produkter</strong><br />Tilbakestill telling av mest kjøpte produkter til 0: ',
    'TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE' => '<strong>Tilbakestill hovedkategoriens id på alle produkter</strong><br />- for bruk på lenkede produkter og priser: ',
    'TEXT_NEW_ORDERS_ID' => 'Neste ordre skal ha ordrenummer:',
    'TEXT_INFO_SET_NEXT_ORDER_NUMBER' => '<strong>Angi ordrenummer for neste ordre</strong><br />MERK: Du kan ikke angi et ordrenummer som er lavere enn eksisterende.',
    'TEXT_MSG_NEXT_ORDER' => 'Neste ordrenummer har blitt angitt til %s',
    'TEXT_MSG_NEXT_ORDER_MAX' => 'Ut fra ekisterende ordredata vil neste ordrenummer være: %s',
    'TEXT_MSG_NEXT_ORDER_TOO_LARGE' => 'På grunn av begrensninger i database kan du ikke angi et ordrenummer som er høyere enn 2000000000. Du må velge en lavere verdi.',
    'TEXT_INFO_DATABASE_OPTIMIZE' => '<strong>Optimer database</strong> for å fjerne bortkastet plass etter slettede oppføringer.<br />Kan kjøres frivillig hver måned, eller hver uke, på en travel database.<br />(Best å kjøre i stille perioder.)',
    'TEXT_INFO_OPTIMIZING_DATABASE_TABLES' => 'Optimalisering av databasetabeller kjøres. Dette kan ta noen minutter. Vennligst vent. Foregående meny vil dukke opp når kjøringen er fullført ...',
    'SUCCESS_DB_OPTIMIZE' => 'Databaseoptimalisering - Antall tabeller som ble behandlet: ',
    'TEXT_INFO_PURGE_DEBUG_LOG_FILES' => '<strong>Rydd opp i loggfiler for feilsøking</strong><br /><strong>ADVARSEL: </strong>Zen Cart logger PHP-feilmeldinger for feilsøking, mange betalingsmoduler kan også være satt til å logge feilsøkingsdata, for diagnosering av kommunikasjonsproblemer.<br />Ved å bekrefte dette oppryddingsvalget vil <b>ALLE</b> feilogger assosiert med PHP-feil, PayPal, Authorize.net, og Linkpoint/FirstData-moduler bli <b>PERMANENT</b> slettet.',
    'SUCCESS_CLEAN_DEBUG_FILES' => 'Loggfiler for feilsøking ble slettet.',
];

return $define;
