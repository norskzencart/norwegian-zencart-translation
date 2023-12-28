<?php
$define = [
    'HEADING_TITLE' => 'Salgskampanje',
    'SUBHEADING_TITLE' => 'Brukertips for salgskampanje:',
    'INFO_TEXT' => '<ul>
                      <li>
                        Bruk alltid en \'.\' som desimalpunkt i avsalg og prisområde.
                      </li>
                      <li>
                        Fyll inn beløp i samme valutta som du ellers gjør når du legger til eller redigerer et produkt.
                      </li>
                      <li>
                        I avslagsfelt kan du fylle inn et beløp eller en prossent for avslag,
                        eller en erstatningspris. (f.eks. 5.00 kr avslag fra alle priser, 10% fra
                        alle priser eller endre alle priser til 25.00 kr)
                      </li>
                      <li>
                        Innfylling av prisfelt begrenser produktfeltet som vil bli påvirket. (f.eks.
                        produkter fra 50.00 kr til 150.00 kr)
                      </li>
                      <li>
                        Du må velge handling som skal utføres om et produkt er på tilbud <i>og</i> er utsatt for salg:
						<ul>
                          <li>
                            <strong>Ignorer tilbudspris - Legg til produktpris og erstatt tilbud</strong><br>
							Salgsavslag vil bli brukt på produktets normale pris.
                            (f.eks. Normal pris 10.00 kr, tilbudspris 9.50 kr - Salgsavslag 10%.
							Produktets endelige pris vil bli 9.00 på salg. Tilbudsprisen blir ignorert.)
                          </li>
                          <li>
                            <strong>Ignorer salgsavslag - Ingen salg brukes når tilbud finnes</strong><br>
                            Salgsavslaget vil ikke bli brukt på tilbud. Tilbudspris vil forbli uendret (f.eks.
                            normal pris 10.00 kr, tilbudspris 9.50 kr - salgsavslag 10%.
                            Produktets endelige pris vil bli 9.50 kr på salg.
                            Salgsavslag blir ignorert.)
                          </li>
                          <li>
                            <strong>Legg salgsavslag til tilbudspris - Ellers legg til pris</strong><br>
                            Salgsavslag vil bli lagt til tilbudspris, en sammensatt pris vil vises.
                            (f.eks. Normal pris 10.00 kr, tilbudspris 9.50 kr - salgsavslag 10%.
                            Produktets endelige pris vil bli 8.55 kr. Et tillegg på 10% avslag på tilbudspris.)
                          </li>
                        </ul>
                      </li>
                      <li>
                        Om startdato ikke fylles ut vil salget starte med det samme.
                      </li>
                      <li>
                        Ikke fyll ut asluttningsdato om salget ikke skal utgå.</li>
                      <li>
                        Valg av en kategori inkluderer automatisk eventuelle underkategorier.
                      </li>
                    </ul>',
    'TEXT_CLOSE_WINDOW' => '[ lukk vindu ]',
];

return $define;