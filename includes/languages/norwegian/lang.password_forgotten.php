<?php
$define = [
    'NAVBAR_TITLE_1' => 'Logg inn',
    'NAVBAR_TITLE_2' => 'Glemt passord',
    'HEADING_TITLE' => 'Glemt passord',
    'TEXT_MAIN' => 'Skriv inn e-postadressen din under, så vil vi sende deg en e-post som inneholder ditt nye passord.',
    'EMAIL_PASSWORD_REMINDER_SUBJECT' => STORE_NAME.' - Nytt passord',
    'EMAIL_PASSWORD_REMINDER_BODY' => 'Et nytt passord ble bestilt fra '.['REMOTE_ADDR'].'.'."\n\n".'Ditt nye passord til \''.STORE_NAME.'\' er:'."\n\n".'   %s'."\n\n",
    'SUCCESS_PASSWORD_SENT' => 'Takk, dersom din e-postadresse finnes i vårt system vil vi nå sende ut instruksjoner for tilbakestilling av passord til denne.',
];

return $define;