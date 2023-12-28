<?php
$define = [
    'HEADING_TITLE' => 'Aktivitetsloggbehandling',
    'HEADING_SUB1' => 'Se gjennom eller eksporter logger',
    'HEADING_SUB2' => 'Slett logghistorikk',
    'TEXT_ACTIVITY_EXPORT_FORMAT' => 'Filformat:',
    'TEXT_ACTIVITY_EXPORT_FILENAME' => 'Filnavn:',
    'TEXT_ACTIVITY_EXPORT_SAVETOFILE' => 'Lagre til fil på server? (Ellers vil den behandles for nedlasting direkte i dette vinduet.)',
    'TEXT_ACTIVITY_EXPORT_DEST' => 'Mål: ',
    'TEXT_PROCESSED' => ' Behandlet.',
    'SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG' => 'Eksport fullført. ',
    'FAILURE_EXPORT_ADMIN_ACTIVITY_LOG' => 'ADVARSEL: Eksport feilet. Kunne ikke skrive til filen ',
    'TEXT_INSTRUCTIONS' => '<u>INSTRUKSJONER</u><br />Du kan her eksportere Zen Carts aktivitetslogg for administrasjonen til en CSV-fil, for arkivering.<br />Du bør lagre disse dataene for bruk ved eventuell etterforskning av svindel i tilfelle din side blir kompromittert. Dette er et krav for PCI-sertifisering.<br />
<ol><li>Velg om du vil vise eller eksportere til fil.<li>Fyll inn et filnavn.<li>Klikk \'Kjør\' for å fortsette.<li>Velg om du vil lagre eller åpne filen, avhengig av hva din nettleser tilbyr.</ol>',
    'TEXT_INFO_ADMIN_ACTIVITY_LOG' => 'Klikk på knapp til høyre for å tømme administrasjonens aktivitetslogg.<br />Det er anbefalt at du tar sikkerhetskopi av database før du kjører denne operasjonen.<br /><br />Administrasjonens aktivitetslogg overvåker aktivitetene i administrasjonen.<br />Som følge av funksjonens natur kan den raskt fylle opp mye plass i databasen, og bør derfor tømmes av og til.<br />Advarsler gis ved 50.000 oppføringer, eller etter 60 dager, ettersom hva som kommer først.<br /><span class="alert"><br />MERK: For PCI sertifisering er det et krav at du har tilgang til administrasjonens aktivitetslogg for 12 måneder tilbake i tid.<br />Det er anbefalt å arkivere loggene ved å velge \'Export to CSV\' og deretter klikke \'Kjør\' ovenfor, <b>FØR</b> du tømmer aktivitetsloggen.</span>',
    'TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE' => '<span class="alert">Merk: Du er i ferd med å slette viktige sporingsdata fra databasen.</span><br /><br />Du bør derfor påse at du har en pålitelig <strong>sikkerhetskopi</strong> av databasen før du går videre.<br />Ved å gå videre aksepterer du at informasjonen blir slettet, og bekrefter at du kjenner ditt juridiske ansvar for disse data.<br /><br />Jeg forstår mitt ansvar, og ønsker å fortsette slettingen ved å klikke på knappen nedenfor.<br /><br />',
    'SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG' => 'Tømming av aktiviteslogg for administrasjonen er fullført.',
    'TEXT_NO_RECORDS_FOUND' => 'Ingen oppføringer ble funnet med de valgte filtre.',
    'TEXT_EXPORTFORMAT0' => 'Eksporter som HTML (passer bra for skjermvisning)',
    'TEXT_EXPORTFORMAT1' => 'Eksporter til CSV (passer for import til regneark)',
    'TEXT_EXPORTFORMAT2' => 'Eksporter til TXT',
    'TEXT_EXPORTFORMAT3' => 'Eksporter til XML',
    'TEXT_ACTIVITY_EXPORT_FILTER' => 'Hvilke loggdata ønskes vist?',
    'TEXT_EXPORTFILTER0' => 'Alle loggede data, uavhengig av alvorlighetsgrad.',
    'TEXT_EXPORTFILTER1' => 'INFO - Generell logget informasjon',
    'TEXT_EXPORTFILTER2' => 'MERKNAD - Merkbar info, som bør gjennomgås med jevne mellomrom',
    'TEXT_EXPORTFILTER3' => 'ADVARSEL - Aktivitet som bør gjennomgås daglig',
    'TEXT_EXPORTFILTER4' => 'Både MERKNAD og ADVARSEL (vanlig kombinasjon for gjennomgang).',
    'TEXT_INTERPRETING_LOG_DATA' => '<p><strong>Interpretation of the log data</strong><ul>
<li><strong>Severity</strong> - The standards for logging generally describe severities as follows:
  <ul>
  <li><strong>INFO</strong> refers to general activity. This may or may not contain remarkable details.</li>
  <li><strong>NOTICE</strong> refers to activity which indicates higher privilege was used, and may include things like creating new admin users or adding new payment modules. It also highlights when any data submitted on the web page includes potentially risky content such as script tags or embedded iframes, where malicious content is being added to your products/categories/pages by unhappy employees or an intruder on your site. These should be reviewed regularly for any anomalies such as unauthorized activity.</li>
  <li><strong>WARNING</strong> is assigned to CRITICAL things such as removal of payment modules or deletion of admin users. These are activities which might suggest pending trouble if not caught quickly. These should be reviewed very frequently; recommended daily.</li>
  </ul>
</li>
<li><strong>admin_user</strong> - This will show the admin user ID number followed by their admin username. If not logged in, it will show 0.</li>
<li><strong>page_accessed</strong> - This will indicate the name of the page visited, thus giving hints to the kind of activity taking place.</li>
<li><strong>parameters</strong> - This is the rest of the URI of the page visited, and gives further indication of the kind of activity being attempted by the visitor.</li>
<li><strong>flagged</strong> - If this is set to 1, that indicates that you should inspect the content recorded in the "postdata" field for unauthorized entry of script or iframe or other potentially dangerous content. An explanation of suspicious content will be listed in the "attention" field.</li>
<li><strong>attention</strong> - This will contain suggestions related to the kind of suspicious activity which should be reviewed in the "postdata" field if flagged. </li>
<li><strong>logmessage</strong> - This contains any messages recorded by the system about the activity taking place, such as installation of a certain module.</li>
<li><strong>postdata</strong> - This contains the raw POST data (with some sensitive information scrubbed) for easy review in case malicious activity is suspected.</li>
</ul></p>',
];

return $define;