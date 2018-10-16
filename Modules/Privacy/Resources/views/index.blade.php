@extends('layouts.main.main')

@section('title')
    Privacy verklaring
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/privacy/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection


@section('content')

    @include('privacy::layouts.modals.cookiestatement')

    {{-- Content here--}}
    <div class="section-a row">

        <div class="col-md-8 offset-md-2 border-bottom">
            <h1>Privacy verklaring</h1>
        </div>

        <div class="col-md-8 offset-md-2 my-5">

            <p>
                Iedereen die om wat voor reden dan ook persoonsgegevens verwerkt of verzamelt is vanaf 25 mei 2018
                wettelijk verplicht een privacyverklaring op te stellen.
                Of u nou een groot bedrijf bent of een blogger,
                als er persoonsgegevens verzameld worden is een privacyverklaring verplicht.
                En dat geldt dus ook voor onze website.
            </p>


            <h5>Contactgegevens</h5>
            <p>

                Avondvierdaagse Breda oost
                <br>
                www.a4dbredaoost.nl
                <br>
                contact@a4dbredaoost.nl
                <br>
                <br>
                Kvk ————
                <br>
                BTW ————
                <br>

            </p>

            <h5>Persoonsgegevens die Avondvierdaagse Breda Oost verwerkt</h5>
            <p>

                Avondvierdaagse Breda Oost verwerkt uw persoonsgegevens doordat u gebruik maakt van de diensten;
                u bezoekt onze blog en leest onze artikelen.
                Of, omdat u deze gegevens zelf aan ons verstrekt door een reactie te plaatsen onder
                een artikel of door ons een mail te sturen.
                Hieronder vind u een overzicht van de persoonsgegevens die verwerkt worden.
                Misschien schrikt u er wel van en vraag u zich af hoe wij uw naam weten als u alleen af en
                toe onze artikelen leest.
                Daarom maken wij ter verduidelijking onderscheid in gegevens die wij kunnen zien als u alleen op
                onze blog leest en gegevens die wij kunnen zien als u een reactie achterlaat of ons een e-mail stuurt.

            </p>


            <div class="card my-5">
                <div class="card-header">
                    <h6>
                        Als u alleen onze artikelen leest betreft het de volgende gegevens:
                    </h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        IP-adres
                    </li>
                </ul>
            </div>


            <div class="card my-5">
                <div class="card-header">
                    <h6>
                        Als u een reactie achterlaat of ons een e-mail stuurt gaat het om de volgende gegevens
                        (afhankelijk van wat u wel of niet invult):
                    </h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Voor- en achternaam
                    </li>
                    <li class="list-group-item">
                        E-mailadres
                    </li>
                    <li class="list-group-item">
                        Websiteadres
                    </li>
                    <li class="list-group-item">
                        Overige persoonsgegevens die je zelf actief verstrekt
                    </li>
                    <li class="list-group-item">
                        IP-adres
                    </li>
                    <li class="list-group-item">
                        Apparaat type en internetbrowser
                    </li>
                    <li class="list-group-item">
                        Overige persoonsgegevens die je actief verstrekt,
                        bijvoorbeeld in een reactie die je plaatst of in correspondentie
                    </li>
                    <li class="list-group-item">
                        Gegevens over jouw activiteiten op de website
                    </li>
                </ul>
            </div>

            <p>

                U bent niet verplicht om uw echte naam, e-mailadres en/of website te vermelden.
                Dit is immers niet noodzakelijk voor het kunnen reageren op een blogbericht.
                Wij vinden het wel leuk te weten wie onze lezers zijn en als u meedoet aan een
                winactie is het natuurlijk wel handig als wij u kunnen bereiken voor het cadeau.
                Wees u ervan bewust dat de gegevens die u invoert openbaar zijn.
                En als u via een inlog reageert, de foto die u daarbij gebruikt wordt ook zichtbaar.

            </p>

            <h5>Bijzondere en / of gevoelige persoonsgegevens die verwerkt worden</h5>

            <p>

                Avondvierdaagse Breda Oost heeft niet de intentie gegevens te verzamelen over websitebezoekers
                die jonger zijn dan 16 jaar.
                Tenzij zij natuurlijk toestemming hebben van hun ouders of voogd.
                Het is echter niet mogelijk te controleren of een bezoeker ouder dan 16 jaar is.
                Aan ouders wordt dan ook aangeraden betrokken te zijn bij de online activiteiten van hun kinderen,
                om zo te voorkomen dat er gegevens over kinderen verzameld worden zonder ouderlijke toestemming.
                Als u er van overtuigd bent dat er zonder die toestemming toch persoonlijke gegevens zijn verzameld
                over iemand jonger dan 16 jaar, neem dan contact met ons op via contact@a4dbredaoost.nl
                of via het contactformulier, dan verwijderen wij deze informatie.

            </p>


            <h5>Doel en grondslag van het verwerken van persoonsgegevens</h5>

            <p>

                Avondvierdaagse Breda Oost verwerkt persoonsgegevens voor de volgende doelen:
            <ul class="list-group">
                <li class="list-group-item">
                    Het kunnen verzenden van een bericht wanneer er een nieuw artikel wordt gepubliceerd op a4dbredaoost.nl
                </li>
                <li class="list-group-item">
                    Het kunnen verzenden van een bericht wanneer wij heb gereageerd op uw reactie op één van onze artikelen.
                </li>
                <li class="list-group-item">
                    Het analyseren van uw gedrag op onze website om daarmee a4dbredaoost.nl te verbeteren en het aanbod af te stemmen op uw voorkeuren.
                </li>
            </ul>

            </p>

            <h5>Geautomatiseerde besluitvorming</h5>

            <p>

                Avondvierdaagse Breda Oost neemt op basis van geautomatiseerde verwerkingen geen besluiten
                over zaken die gevolgen kunnen hebben voor u als persoon.
                Het gaat hierbij om besluiten die worden genomen door computerprogramma’s of -systemen,
                zonder dat daar een mens tussen zit.

            </p>

            <h5>De termijn van het bewaren van persoonsgegevens</h5>

            <p>

                Avondvierdaagse Breda Oost bewaart uw persoonsgegevens niet langer dan strikt noodzakelijk
                is voor het realiseren van reeds eerder beschreven doelen waarvoor uw gegevens worden verzameld.
                Avondvierdaagse Breda Ooost hanteert de volgende bewaartermijnen:

            <ul class="list-group">
                <li class="list-group-item">
                    De gegevens die u achterlaat bij het reageren op een artikel van onze website blijven bewaard.
                </li>
                <li class="list-group-item">
                    E-mails die u ons heeft gestuurd worden na een jaar verwijderd.
                </li>
                <li class="list-group-item">
                    Trackinggegevens via onze analyse software, deze blijven 14 maanden bewaard.
                </li>
            </ul>

            </p>

            <h5>Delen van persoonsgegevens met derden</h5>

            <p>

                Uw gegevens worden niet aan derden verstrekt, tenzij dit nodig is om te voldoen aan een wettelijke verplichting.
                Met bedrijven die uw gegevens verwerken in onze opdracht,
                sluiten wij een bewerkersovereenkomst om te zorgen voor eenzelfde niveau van beveiliging en
                vertrouwelijkheid van uw gegevens.
                Avondvierdaagse Breda Oost blijft verantwoordelijk voor deze verwerkingen.

            </p>

            <h5>Cookies</h5>

            <p>

                Avondvierdaagse Breda Oost maakt gebruik van ‘analytische en functionele cookies’ en ‘tracking cookies’.
                Een cookie is een klein tekstbestand dat bij het eerste bezoek aan een website wordt opgeslagen op uw computer,
                tablet of smartphone.
                Ze zorgen ervoor dat de website naar behoren werkt en onthouden bijvoorbeeld uw voorkeursinstellingen.
                Toen u op mijn website kwam, werd u door middel van een cookiemelding geïnformeerd over de cookies en
                is uw toestemming gevraagd voor het plaatsen ervan.
                U kunt zich afmelden voor cookies door uw internetbrowser zo in te stellen dat deze geen cookies meer opslaat.
                Daarnaast kunt u ook alle informatie die eerder is opgeslagen via de instellingen van uw browser verwijderen.
                <br>
                <br>
                Voor uitgebreide informatie over cookies op a4dbredaoost.nl verwijs ik u door naar onze
                <a data-toggle="modal" href="#cookieverklaring">cookie verklaring</a>.

            </p>

            <h5>Social media knoppen</h5>

            <p>

                Om het zo makkelijk mogelijk te maken om onze blogs te delen op social media heeft Avondvierdaagse Breda Oost een aantal social media buttons verwerkt.
                De meeste social media kanalen werken met cookies. Daar hebben wij geen invloed op.
                Lees de privacy verklaringen van de social media kanalen om te weten hoe zij met verzamelde informatie omgaan.

            </p>

            <h5>Gegevens inzien, aanpassen of verwijderen</h5>

            <p>

                Als u gegevens op onze website achterlaat, geeft u daarmee toestemming gegevens te verwerken.
                U heeft echter het recht om uw persoonsgegevens in te zien, te corrigeren of te verwijderen.
                Daarnaast heeft u het recht om uw eventuele toestemming voor de gegevensverwerking in te trekken of
                bezwaar te maken tegen de verwerking van uw persoonsgegevens door Avondvierdaagse Breda Oost.
                <br>
                <br>
                U kunt een verzoek tot inzage, correctie, verwijdering of overdraging van uw persoonsgegevens of verzoek tot intrekking
                van uw toestemming of bezwaar op de verwerking van uw persoonsgegevens sturen naar contact@a4dbredaoost.nl.
                <br>
                <br>
                Wij reageren zo snel mogelijk, maar binnen vier weken.
                Avondvierdaagse Breda Oost wilt u er tevens op wijzen dat u de mogelijkheid heeft om een klacht in te dienen bij de nationale toezichthouder,
                <a href="https://autoriteitpersoonsgegevens.nl/nl/contact-met-de-autoriteit-persoonsgegevens/tip-ons" target="_blank">de Autoriteit Persoonsgegevens</a>.

            </p>

            <h5>De beveiliging van persoonsgegevens</h5>

            <p>

                Avondvierdaagse Breda Oost neemt de bescherming van uw gegevens serieus en neemt passende maatregelen om misbruik, verlies,
                onbevoegde toegang, ongewenste openbaarmaking en ongeoorloofde wijziging tegen te gaan.
                Als u het idee heeft dat uw gegevens toch niet goed beveiligd zijn of er aanwijzingen zijn van misbruik,
                neem dan contact met ons op via contact@a4dbredaoost.nl.
                <br>
                <br>
                Avondvierdaagse Breda Oost heeft de volgende maatregelen getroffen ter beveiliging van uw persoonsgegevens:

            <ul class="list-group">
                <li class="list-group-item">
                    Beveiligingssoftware: virusscanner en firewall.
                </li>
                <li class="list-group-item">
                    TLS: er wordt gebruik gemaakt van een beveiligde internetverbinding. Deze kunt u herkennen aan ‘https’ en het hangslotje in de adresbalk.
                </li>
                <li class="list-group-item">
                    DNSSEC is een extra beveiliging (aanvullend op DNS) voor het omzetten van een domeinnaam naar het hieraan gekoppelde IP-adres;
                    het wordt voorzien van een digitale handtekening.
                    U kunt die handtekening automatisch laten controleren.
                    p die manier voorkomen wij dat u omgeleid wordt naar een vals IP-adres.
                </li>
            </ul>

            </p>

            <p>

                Wij hopen dat we hiermee uw privacy voldoende hebben gewaarborgd.
                <br>
                Mocht u toch nog ergens bezorgd over zijn of vragen hebben neemt u dan a.u.b. contact op.

            </p>

        </div>
    </div>
    {{-- End content--}}

@endsection

