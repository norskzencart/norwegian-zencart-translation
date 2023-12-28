Norsk Zen Cart
==============

Norske oversettelser, tilpasninger og moduler for det populære netthandelsystemet Zen Cart.

### Installasjon og klargjøring

Her er en kort innføring i hvordan du installerer norsk språk, samt de viktigste tilpasningene som må gjøres i forhold til å bruke Zen Cart i Norge.

Dette er bare en liten del av alt som må gjøres i forhold til å drive netthandel med Zen Cart i Norge, og vi anbefaler også at du som minimum setter deg inn og følger 'Forbrukerombudets retningslinjer for e-handel og fjernsalg': http://www.forbrukerombudet.no/index.gan?id=11037373

##### Språkfiler

* Pakk ut zip-fila direkte til din Zen Cart-installasjon, eller til en midlertidig mappe lokalt - og last så opp alle filene til din nettjener (webserver). Fil-/mappestruktur i pakken skal være lik den som finnes i Zen Cart, med unntak av admin-mappe som må endres navn på tilsvarende din installasjon.
* Gå så til 'Admin -> Localization -> Languages'
* Klikk på 'New language'-knappen, og fyll inn nødvendig informasjon.

```
    Name: Norsk
    Code: no
    Image: icon.gif
    Directory: norwegian
    Sort Order: 0
    Kryss av for 'Set as default'
```
  Merk! Latin1/ISO-8859 støttes ikke lengre, på tide å konvertere til UTF-8 også for gamle butikker.
  
* Klikk på 'Insert'-knappen.
* Du kan nå velge 'Norsk' fra nedtrekklisten oppe til venstre under logo.

##### Fødselsdato

Dersom fødselsdato skal være påkrevd, og sjekkes:

* Gå til 'Admin -> Configuration -> Minimum Values'
* Klikk på 'Date of Birth' og endre verdien til 5, og klikk så 'Update'-knappen.

##### Norske kroner (NOK)

* Gå til 'Admin -> Lokalisering -> Valuta' for å legge til Norske kroner (NOK)
* Klikk 'Ny valuta'-knappen og fyll inn nødvendig informasjon:

```
    Tittel: Norske kroner
    Kode: NOK (må skrives nøyaktig med store bokstaver)
    Symbol venstre: NOK (anbefalt ved kortbetaling, ellers Kr.)
    Symbol høyre: ,- (komma og bindestrek, eller tomt)
    Desimalpunkt: , (komma)
    Tusenpunkt: . (punktum)
    Desimalplasser: 0 (eller 2)
    Verdi: 1 (om dette er hovedvaluta)
```

* Kryss av for 'Sett som standard' (dersom dette er hovedvaluta)
* Klikk på 'Legg til'-knappen
* Klikk på 'Oppdater valuta'-knappen for å oppdatere kursen på andre valuta du bruker (slett de du ikke behøver).

##### Norsk dato

Dersom måneder vises på engelsk må du oppdatere koden med riktig 'country locale'-verdi som du burde kunne få ved å henvende deg til din webleverandør:

```php
    @setlocale(LC_TIME, 'riktig verdi fylles inn her');
```

i språkfilene:
* ../includes/languages/norwegian.php
* ../admin/includes/languages/norwegian.php

### Soner og moms

Det er mange som undrer på hvordan soner og moms skal settes opp i Zen Cart, og det er sikkert like mange som har feil i sitt oppsett. Vi vil her forsøke å klargjøre dette for norske forhold.

Her er en oversikt over et typisk oppsett for en Norsk Zen Cart nettbutikk, som selger til hele Norden.

##### Land

Aaland, Danmark, Finland, Norge, Svalbard og Jan Mayen, Sverige, Island

Merk at Færøyene og Grønnland tilhører også Norden, men regnes i fraktsammenheng inn under 'resten av verden' og koster mer.

TIPS! Hvert av disse landene bør også redigeres for å sette adresseformat til 5. Dette for å få riktig visning på adresser i nettbutikk, e-post og på utskrifter.

##### Soner

De norske fylkene, men de er ikke påkrevd eller nødvendige dersom man ikke setter opp fraktmodul som baserer seg på dette.

##### Sonedefinasjoner

* Norge / Innenlands / Alle soner
* Svalbard og Jan Mayen / Svalbard og Jan Mayen / Alle soner
* Utland - Norden / De nordiske landene / Aaland, Danmark, Finland, Island og Sverige

##### Avgiftsklasser

* Høy sats 25% / 25% Norsk moms (generell)
* Middels sats 15% / 15% Norsk moms
* Lav sats 8% / 8% Norsk moms
* Skattefritt salg / Skattefritt salg til utland, Svalbard og Jan Mayen

##### Avgiftsrater

* Høy sats 25% / Norge / 25% / 25% MVA er inkl. med
* Middels sats 15% / Norge / 15% / 15% MVA er inkl. med
* Lav sats 8% / Norge / 8% / 8% MVA er inkl. med
* Skattefritt salg / Svalbard og Jan Mayen / 0% / Skattefritt salg Svalbard og Jan Mayen
* Skattefritt salg / Utland - Norden / 0% / Skattefritt salg utland

### Den norske oversettelsen

Den norske oversettelsen administreres og vedlikeholdes på <a href="https://github.com/zencartnorge/norwegian-zencart-translation/" target="_blank">GitHub</a>, hvor du alltid vil kunne laste ned siste tilgjengelige versjonen av filer etterhvert som de oppdateres.

##### Informasjon om pakken

Oversettelsen av butikkdelen (catalog) bygger på v1.2.7d av Eivind E. Valderhaug (DataWeb.no), oppdatert og forbedret til v1.3.0 og nyere av Rune Rasmussen (syntaxerror.no). Administrasjonen er en fullstendig nyoversettelse utført av Rune Rasmussen (syntaxerror.no).

Pakken inneholder norske språkfiler for både administrasjon (admin) og butikk (catalog), samt knapper og flaggikon. Konfigurasjonsfelter i databasen er dog per i dag ikke mulig å oversette fullt ut, via språkfiler, det betyr at konfigurasjonen i admin fortsatt vil vises delvis på engelsk.

##### Bidrag - Takke for oversettelsen

Dersom du er fornøyd med oversettelsen, og tiden denne sparer for deg, vil du kanskje takke for jobben og bidra til at vi har mulighet for å holde pakken oppdatert regelmessig?
Dette kan gjøres via <a href="http://oversettelser.syntaxerror.no/bidra.html" target="_blank">prosjektsidene våre</a>.

Så langt, etter mer enn 14 år og mye over 20.000 nedlastinger, er det mottatt ca. <b>2530 NOK</b>. Takk til de som har gitt sin støtte, det settes stor pris på både små og store bidrag.

<a href="http://oversettelser.syntaxerror.no/bidra.html" target="_blank"><img src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" alt="Støtt prosjektet" /></a>

##### Kontakt / Feilrapport

Om du vil kontakte prosjektet eller rapportere om en feil i oversettelsen kan du gjøre det i <a href="https://github.com/zencartnorge/norwegian-zencart-translation/issues" target="_blank">prosjektsidenes rapportsystem</a>, eller ved å kontakte administrator av prosjektet via <a href="http://oversettelser.syntaxerror.no/contact/view.html" target="_blank">kontaktskjema.</a>
