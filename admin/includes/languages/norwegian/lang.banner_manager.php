<?php
$define = [
    'HEADING_TITLE' => 'Bannerbehandling',
    'TABLE_HEADING_BANNERS' => 'Bannere',
    'TABLE_HEADING_GROUPS' => 'Grupper',
    'TABLE_HEADING_STATISTICS' => 'Visninger / Klikk',
    'TABLE_HEADING_STATUS' => 'Status',
    'TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS' => 'Nytt vindu',
    'TABLE_HEADING_BANNER_ON_SSL' => 'Vis SSL',
    'TABLE_HEADING_ACTION' => 'Valg',
    'TABLE_HEADING_BANNER_SORT_ORDER' => 'Sortering',
    'TEXT_BANNERS_TITLE' => 'Bannertittel:',
    'TEXT_BANNERS_URL' => 'Bannerlenke:',
    'TEXT_BANNERS_GROUP' => 'Bannergruppe:',
    'TEXT_BANNERS_NEW_GROUP' => ', eller fyll inn en ny bannergruppe nedenfor',
    'TEXT_BANNERS_IMAGE' => 'Bilde:',
    'TEXT_BANNERS_IMAGE_LOCAL' => ', eller fyll inn lokal fil nedenfor',
    'TEXT_BANNERS_IMAGE_TARGET' => 'Bildeplassering (lagre til):',
    'TEXT_BANNER_IMAGE_TARGET_INFO' => '<strong>Annbefalt lagringsplass for bilde på server er:</strong> '.DIR_FS_CATALOG_IMAGES.'banners/',
    'TEXT_BANNERS_HTML_TEXT_INFO' => '<strong>Merk: HTML-bannere lagrer ikke antall klikk</strong>',
    'TEXT_BANNERS_HTML_TEXT' => 'HTML Text:',
    'TEXT_BANNERS_ALL_SORT_ORDER' => 'Sortering - banner_box_all',
    'TEXT_BANNERS_ALL_SORT_ORDER_INFO' => '<strong>Merk: banners_box_all sideboksen vil vise bannere etter deres definerte sortering</strong>',
    'TEXT_BANNERS_EXPIRES_ON' => 'Utløper:',
    'TEXT_BANNERS_OR_AT' => ', eller på',
    'TEXT_BANNERS_IMPRESSIONS' => 'inntrykk/visninger.',
    'TEXT_BANNERS_SCHEDULED_AT' => 'Planlagt aktivering:',
    'TEXT_BANNERS_BANNER_NOTE' => '<b>Bannermerknader:</b><ul><li>Bruk enten et bilde eller en HTML-tekst for banneret - ikke begge.</li><li>HTML-tekst blir prioritert foran bilde.</li><li>HTML-tekst vil ikke registrere klikk, men vil registrere visninger</li><li>Bannere med absolutt bildeadresse bør ikke vises på sikre sider</li></ul>',
    'TEXT_BANNERS_INSERT_NOTE' => '<b>Bildemerknader:</b><ul><li>Opplastingsmapper må ha skriverettigheter!</li><li>Fyll ikke ut \'Lagre til\'-feltet om du ikke skal laste opp et bilde til serveren (f.eks. om du bruker et lokalt bilde.</li><li>\'Lagre til\'-feltet må være en eksisterende mappe med ende-\'slash\' (eks. banners/)</li></ul>',
    'TEXT_BANNERS_EXPIRCY_NOTE' => '<b>Utløpsmerknader:</b><ul><li>Bare et av to felter skal bli sendt</li><li>Hvis banner ikke utgår automatisk, la feltene være blanke</li></ul>',
    'TEXT_BANNERS_SCHEDULE_NOTE' => '<b>Planlagt aktivering-merknader:</b><ul><li>Hvis planlagt aktivering er angitt, vil banneret bli aktivert på denne datoen.</li><li>Alle planlagte bannere er merket som inaktive inntil angitt dato, de vil så bli angitt som aktive.</li></ul>',
    'TEXT_BANNERS_STATUS' => 'Bannerstatus:',
    'TEXT_BANNERS_ACTIVE' => 'Aktiv',
    'TEXT_BANNERS_NOT_ACTIVE' => 'Ikke aktiv',
    'TEXT_INFO_BANNER_STATUS' => '<strong>Merk:</strong> Bannerstatus vil bli oppdatert basert på planlagt aktiveringsdato og inntrykk',
    'TEXT_BANNERS_OPEN_NEW_WINDOWS' => 'Banner ny vindu',
    'TEXT_INFO_BANNER_OPEN_NEW_WINDOWS' => '<strong>Merk:</strong> Banner vil åpne i et nytt vindu',
    'TEXT_BANNERS_ON_SSL' => 'Banner i SSL',
    'TEXT_INFO_BANNER_ON_SSL' => '<strong>Merk<strong> Banner kan bli vist på sikre sider uten feil',
    'TEXT_BANNERS_DATE_ADDED' => 'Llagt til:',
    'TEXT_BANNERS_SCHEDULED_AT_DATE' => 'Planlagt aktivert: <b>%s</b>',
    'TEXT_BANNERS_EXPIRES_AT_DATE' => 'Utløper: <b>%s</b>',
    'TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS' => 'Utløper etter: <b>%s</b>treff',
    'TEXT_BANNERS_STATUS_CHANGE' => 'Statusendring: %s',
    'TEXT_BANNERS_DATA' => 'D<br>A<br>T<br>A',
    'TEXT_BANNERS_LAST_3_DAYS' => 'Siste 3 dager',
    'TEXT_BANNERS_BANNER_VIEWS' => 'Bannervisninger',
    'TEXT_BANNERS_BANNER_CLICKS' => 'Bannerklikk',
    'TEXT_INFO_DELETE_INTRO' => 'Er du sikker at du ønsker å slette dette banneret ?',
    'TEXT_INFO_DELETE_IMAGE' => 'Slett bannerbilde',
    'SUCCESS_BANNER_INSERTED' => 'Vellykket: Banner har blitt satt inn.',
    'SUCCESS_BANNER_UPDATED' => 'Vellykket: Banner har blitt oppdatert.',
    'SUCCESS_BANNER_REMOVED' => 'Vellykket: Banner har blitt fjernet.',
    'SUCCESS_BANNER_STATUS_UPDATED' => 'Vellykket: Status på banner har blitt oppdatert.',
    'ERROR_BANNER_TITLE_REQUIRED' => 'Feil: Bannertittel påkrevd.',
    'ERROR_BANNER_GROUP_REQUIRED' => 'Feil: Bannergruppe påkrevd.',
    'ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST' => 'Feil: Målmappe eksisterer ikke: %s',
    'ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE' => 'Error: Målmappe er ikke skrivbar: %s',
    'ERROR_IMAGE_DOES_NOT_EXIST' => 'Feil: Bilde eksisterer ikke.',
    'ERROR_IMAGE_IS_NOT_WRITEABLE' => 'Feil: Bilde kan ikke fjernes.',
    'ERROR_UNKNOWN_STATUS_FLAG' => 'Feil: Ukjent status.',
    'ERROR_BANNER_IMAGE_REQUIRED' => 'Feil: Bannerbilde påkrevd.',
    'ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST' => 'Feil: Grafmappe eksisterer ikke. Opprett en grafmappe: <strong>'.DIR_WS_ADMIN.'images/graphs</strong>',
    'ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE' => 'Feil: Grafmappe er ikke skrivbar. Denne er plassert i: <strong>'.DIR_WS_ADMIN.'images/graphs</strong>',
    'TEXT_LEGEND_BANNER_ON_SSL' => 'Vis SSL',
    'TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS' => 'Nytt vindu',
    'IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON' => 'Åpne nytt vindu - Aktivert',
    'IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF' => 'Åpne nytt vindu - Deaktivert',
    'IMAGE_ICON_BANNER_ON_SSL_ON' => 'Visning på sikre sider - Aktivert',
    'IMAGE_ICON_BANNER_ON_SSL_OFF' => 'Visning på sikre sider - Deaktivert',
    'SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED' => 'Vellykket: Status for åpning av banner i nytt vindu har blitt oppdatert.',
    'SUCCESS_BANNER_ON_SSL_UPDATED' => 'Status for visning av banner på sikre sider er oppdatert.',
];

return $define;