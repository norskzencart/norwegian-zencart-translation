Norsk Zen Cart
==============

Norske oversettelser, tilpasninger og moduler for det populære netthandelsystemet Zen Cart.

### Installasjon og klargjøring

Her er en kort innføring i hvordan du installerer norsk språk, samt de viktigste tilpasningene som må gjøres i forhold til å bruke Zen Cart i Norge.

Dette er bare en liten del av alt som må gjøres i forhold til å drive netthandel med Zen Cart i Norge, og vi anbefaler også at du som minimum setter deg inn og følger Forbrukerombudets retningslinjer for e-handel og fjernsalg.

##### Språkfiler

* Pakk ut zip-fila direkte til din Zen Cart-installasjon, eller til en midlertidig mappe lokalt - og last så opp alle filene til din nettjener (webserver). Fil-/mappestruktur i pakken skal være lik den som finnes i Zen Cart, med unntak av admin-mappe som må endres navn på tilsvarende din installasjon.
* Gå så til Admin -> Localization -> Languages
* Klikk på New language-knappen, og fyll inn nødvendig informasjon:

```
    Name: Norsk
    Code: no
    Image: icon.gif
    Directory: norwegian
    Sort Order: 0
    Kryss av for Set as default
```

* Klikk på Insert-knappen.
* Du kan nå velge Norsk fra nedtrekklisten oppe til venstre under logo.

##### Fødselsdato

Dersom fødselsdato skal være påkrevd, og sjekkes:

* Gå til Admin -> Configuration -> Minimum Values
* Klikk Date of Birth og endre verdien til 5, og klikk så Update-knappen.

##### Norske kroner (NOK)

* Gå til Admin -> Lokalisering -> Valuta for å legge til Norske kroner (NOK)
* Klikk Ny valuta-knappen og fyll inn nødvendig informasjon:

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

* Kryss av for Sett som standard (om dette er hovedvaluta)
* Klikk på Legg til-knappen
* Klikk på Oppdater valuta-knappen for å oppdatere kursen på andre valutaer du bruker (slett de du ikke behøver).

##### Norsk dato

Dersom måneder vises på engelsk må du oppdatere koden med riktig "country locale"-verdi som du burde kunne få ved å henvende deg til din webleverandør:

```php
    @setlocale(LC_TIME, 'riktig verdi fylles inn her');
```

i språkfilene:
* ../includes/languages/norwegian.php
* ../admin/includes/languages/norwegian.php

