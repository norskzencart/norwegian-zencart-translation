<?php
$define = [
    'HEADING_TITLE' => 'Innlogging',
    'HEADING_TITLE_EXPIRED' => 'Innlogging - Passord har utløpt',
    'TEXT_LOGIN' => 'Logg inn',
    'TEXT_SUBMIT' => 'Send inn',
    'TEXT_ADMIN_NAME' => 'Brukernavn',
    'TEXT_ADMIN_PASS' => 'Passord',
    'TEXT_ADMIN_OLD_PASSWORD' => 'Gammelt passord',
    'TEXT_ADMIN_NEW_PASSWORD' => 'Nytt passord',
    'TEXT_ADMIN_CONFIRM_PASSWORD' => 'Bekreft nytt passord',
    'ERROR_WRONG_LOGIN' => '<p>Du skrev feil brukernavn og/eller passord.</p>',
    'ERROR_SECURITY_ERROR' => 'Det oppstod en sikkerhetsfeil under forsøk på pålogging.',
    'TEXT_PASSWORD_FORGOTTEN' => 'Glemt passord?',
    'LOGIN_EXPIRY_NOTICE' => '',
    'ERROR_PASSWORD_EXPIRED' => 'MERK: Ditt passord har utløpt, du må nå opprette et nytt. Ditt passord <strong>må inneholde både nummer, bokstaver og minimum 7 tegn.</strong>',
    'TEXT_TEMPORARY_PASSWORD_MUST_BE_CHANGED' => 'Av sikkerhetshensyn på ditt midlertidige passord endres. Vennligst velg et nytt passord.<br />Ditt passord <strong>må inneholde både nummer, bokstaver og minimum 7 tegn.</strong>',
    'TEXT_EMAIL_SUBJECT_LOGIN_FAILURES' => 'Feil ved innlogging til administrasjon',
    'TEXT_EMAIL_MULTIPLE_LOGIN_FAILURES' => 'Viktig informasjon: Det har vært flere feilede forsøk på innlogging til din adminsitratorkonto. Av sikkerhetshensyn vil kontoen bli låst etter 6 feilede forsøk på innlogging, for minimum 30 minutter, og man vil da ikke kunne logge inn selv om man husker passordet. Fortsatte feilede forsøk vil låse kontoen for nye 30 minutter. Man vil heller ikke kunne bruke funksjon for glemt passord i denne perioden. Beklager eventuelle ulemper som følge av dette.'."\n\nSiste forsøk på pålogging var fra følgende IP-adresse: %s.\n\n\n",
    'EXPIRED_DUE_TO_SSL' => 'Merk: Ditt passord har utløpt ettersom din side er endret fra å ikke bruke SSL (mindre sikkert), til å være SSL-sikret (mer sikkert). Endring av passord under SSL er et viktig steg for økt sikkerhet. Beklager eventuelle ulemper som følge av dette. Standard regler for utløp av passord gjelder.',
];

return $define;