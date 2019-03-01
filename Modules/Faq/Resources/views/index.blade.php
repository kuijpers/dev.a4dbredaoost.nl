@extends('layouts.main.main')

@section('title')
     Veelgestelde vragen
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/faq/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection


@section('content')

    {{-- Content here--}}
    <div class="section-a row">

        <div class="col-md-10 offset-md-1 border-bottom">
            <h1>Veel gestelde vragen</h1>
        </div>

        <div class="col-md-10 offset-md-1 my-5">

            <div class="row">
                <div class="col-12 mb-5">
                    Als organisatie ontvangen wij vaak vragen.
                    Het komt dan ook regelmatig voor dat dezelfde vragen gesteld worden.
                    Deze pagina is hier speciaal voor aangemaakt.
                    <br>
                    Hieronder hebben we de meest voorkomende vragen op een rijtje proberen te zetten.
                    Om het makkelijker te maken hebben we de vragen in categoriën gezet in de hoop dat dit voor u beter helpt.
                    Mochten er nu toch vragen zijn die hieronder niet vermeld staan dan kunt u ons altijd een berichtje sturen via de contact pagina.
                </div>
            </div>

            <div class="row">

                <div class="col-12 card-columns">

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Inschrijven</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Wanneer en waar kan er ingeschreven worden?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                We houden als organisatie 3 inschrijf momenten
                                en deze vinden plaats op een woensdag en zaterdag in de aanloop naar de avondvierdaagse.
                                Daarnaast kunt u ook nog uw inschrijving regelen op de startdag van de avondvierdaagse en dit is op dinsdag.
                                <br>
                                <br>
                                Op woensdag 12-06-2019 tussen 12.00 en 13.00 kunt u zich inschrijven op de volgende 2 lokaties:
                                <ul>
                                    <li>
                                        OBS De Tweesprong
                                    </li>
                                    <li>
                                        KBS De Weilust
                                    </li>
                                </ul>
                                Op zaterdag 15-06-2019 tussen 10.00 en 13.00 kunt u zich inschrijven op de volgende 2 lokaties:
                                <ul>
                                    <li>
                                        Albert Heijn Bischopshoeve
                                    </li>
                                    <li>
                                        Albert Heijn Brabantplein
                                    </li>
                                </ul>
                                <br>
                                Op deze lokaties vindt u vrijwilligers van de a4d Breda Oost.
                                <br>
                                <br>
                                Op dinsdag 18-06-2019 is er nog een mogelijkheid om in te schrijven op de start locatie.
                                De tijden hiervoor zijn van 17.30 tot 18.30.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Is legitimatie verplicht bij de inschrijving?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Nee, dit is niet nodig. We gaan er vanuit dat alles op een eerlijke manier zal gebeuren.
                                Hier mogen we toch wel vertrouwen in hebben.
                                Mocht er toch nog twijfel bestaan over de leeftijden van de jongere deelnemers dan wordt er alsnog om legitimatie verzocht.
                                Dit is puur om veiligheids redenen.
                            </li>
                            <li class="list-group-item text-center">
                                <img src="{{ asset('modules/faq/img/leuk.jpg') }}" class="img-thumbnail">
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Ik wil met mijn zoon / dochter meelopen. Moet ik me nu verplicht inschrijven ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                U bent niet verplicht tot inschrijving wanneer u mee loopt maar met uw inschrijving steunt u ook de avondvierdaagse voor uw zoon / dochter.
                                Uiteraard kunt u dan ook gebruik maken van de versnaperingen onderweg en aan het eind een medaille in ontvangst nemen.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Mag ik ook mijn kleinkinderen inschrijven ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Zeer zeker dat dit mag.
                                De avondvierdaagse is altijd al een soort van familiefeest geweest en dit willen we graag zo houden.
                                Het zou helemaal geweldig zijn wanneer u zelf ook meeloopt.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Wat zijn de inschrijvingskosten ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Tijdens de voorinschrijving op de scholen en bij de supermarkten zijn de kosten € 3,50.
                                <br>
                                Inschrijven op de startdag bij PCP kost € 4,50
                                <br>
                                De kosten dienen contant voldaan te worden.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Welke afstanden kunnen er worden gelopen?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Wij hebben 4 afstanden:
                                <ul style="list-style: none">
                                    <li>
                                        - 2,5 km
                                    </li>
                                    <li>
                                        - 5 km
                                    </li>
                                    <li>
                                        - 7,5 km
                                    </li>
                                    <li>
                                        - 10 km
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Hoe oud moet je zijn?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Voor onze afstanden hebben we wel regels voor wat betreft de afstanden.
                                Hieronder de regels per afstand.
                                <ul style="list-style: none">
                                    <li>
                                        <strong>
                                            2,5 km :
                                        </strong>
                                        Voor deze afstand geldt geen leeftijd. Van jong tot oud mag je jezelf op deze afstand inschrijven.
                                    </li>
                                    <li>
                                        <strong>
                                            5 km :
                                        </strong>
                                        Voor deze afstand geldt geen leeftijd. Van jong tot oud mag je jezelf op deze afstand inschrijven.
                                    </li>
                                    <li>
                                        <strong>
                                            7,5 km :
                                        </strong>
                                        De minimum leeftijd voor deze afstand is 12 jaar. Echter zit hier dan wel de voorwaarde aan dat dit onder begeleiding van een volwassene is.
                                        <br>
                                        Vanaf de leeftijd van 16 jaar mag deze afstand zelfstandig gelopen worden.
                                    </li>
                                    <li>
                                        <strong>
                                            10 km :
                                        </strong>
                                        De minimum leeftijd voor deze afstand is 12 jaar. Echter zit hier dan wel de voorwaarde aan dat dit onder begeleiding van een volwassene is.
                                        <br>
                                        Vanaf de leeftijd van 16 jaar mag deze afstand zelfstandig gelopen worden.
                                    </li>
                                </ul>
                                I.v.m. de minimum leeftijd en de begeleiding op de "lange" afstanden kan er bij twijfel gevraagd worden om te legitimeren op leeftijd.
                            </li>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Organisatie</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Zoeken jullie nog extra mensen voor ondersteuning ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                We zijn altijd op zoek naar vrijwilligers.
                                Hoe meer hoe liever want het is niet zo dat alle vrijwilligers ook elke dag kunnen.
                                <br>
                                Ook voor het bestuur en de werkgroepen zijn we op zoek naar ondersteuning.
                                <br>
                                Stuur ons een berichtje via de <a href="/contact" class="text-success">contactpagina</a> en we laten u de mogelijkheden weten.
                            </li>
                            <li class="list-group-item text-center">
                                <img src="{{ asset('modules/faq/img/crossing.jpg') }}" class="img-thumbnail">
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Hoeveel uur steken jullie in de organisatie ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Dit is een vraag die bijna niet te beantwoorden is.
                                <br>
                                Gedurende het jaar zitten er al redelijk wat uren in
                                maar in de week van de avondvierdaagse zijn we bijna fulltime bezig.
                            </li>
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Deelname</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Wat is de start lokatie ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Al heel wat jaren is de start van het evenement op het PCP terrein Sportpark De lage Kant Noord.
                                <br>
                                Wij starten dagelijks van deze lokatie.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Wat zijn de starttijden ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                In de starttijden zitten een aantal wisselingen, vandaar dat we hieronder even een opsomming maken:
                                <ul>
                                    <li>
                                        <strong>
                                            Dinsdag :
                                        </strong>
                                        Deze dag is de openingsdag en dan zouden wij het waarderen dat iedereen om 18.30 aanwezig is.
                                        <br>
                                        Wij starten dan nadat het welkomstwoord is gesproken.
                                    </li>
                                    <li>
                                        <strong>
                                            Woensdag :
                                        </strong>
                                        Starten tussen 18.30 en 19.00
                                    </li>
                                    <li>
                                        <strong>
                                            Donderdag :
                                        </strong>
                                        Starten tussen 18.30 en 19.00
                                    </li>
                                    <li>
                                        <strong>
                                            Vrijdag :
                                        </strong>
                                        Op deze dag is de huldiging van de gelopen avondvierdaagse.
                                        Om ervoor te zorgen dat alle afstanden op een gelijk moment bij de finish aankomen hebben we op deze dag verschillende starttijden.
                                        <ul style="list-style: none">
                                            <li>
                                                <strong>
                                                    2,5 km :
                                                </strong>
                                                Deze afstand start om 19.30
                                            </li>
                                            <li>
                                                <strong>
                                                    5 km :
                                                </strong>
                                                Deze afstand start om 18.30
                                            </li>
                                            <li>
                                                <strong>
                                                    7,5 km :
                                                </strong>
                                                Deze afstand start om 18.15
                                            </li>
                                            <li>
                                                <strong>
                                                    10 km :
                                                </strong>
                                                Deze afstand start om 18.00
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Wanneer en waar is de huldiging ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                De huldiging vindt jaarlijks plaats bij PCP. De lokatie van waar we ook de start hebben.
                                <br>
                                We plannen dat de officiële binnenkomst`op vrijdag om 20.00 uur is.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Waar is het verzamelpunt ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Het verzamelpunt, op de slotavond, wisselt jaarlijks.
                                Als organisatie kunnen we wel met zekerheid zeggen dat de huldiging plaats vindt bij het PCP terrein.
                                Voor onze deelnemers zou het geweldig zijn wanneer hier een grote haag van mensen gevormd wordt voor de ontvangst en huldiging van onze deelnemers.
                                Vanuit het verzamelpunt lopen wij hier altijd naar toe.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Moet ik me melden voor de start ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                U moet zich te allen tijde melden voor de start. Bij het melden ontvangt u een knipkaart.
                                Op deze manier is het voor ons zichtbaar of alle deelnemers vertrokken zijn.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Moet ik me dan ook afmelden en waarom dan ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Bij het afmelden levert u, uw knipkaart in.
                                Op het moment dat einde binnenkomst is kunnen we zien wie de knipkaart niet ingeleverd hebben.
                                Deze deelnemers kunnen we in eerste instantie telefonisch benaderen om te kijken of ze al binnen zijn geweest.
                                Het kan natuurlijk altijd zo zijn dat ze vergeten zijn hun knipkaart in te leveren.
                                Mocht het zo zijn dat de deelnemer door omstandigheden niet binnen is gekomen dan kunnen we altijd kijken hoe we tot een oplossing kunnen komen.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Bij wie ligt de verantwoordelijkheid tijdens het evenement ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Deelname aan het evenement is altij op eigen risico.
                                <br>
                                Als organisatie proberen wij de situaties zo veilig mogelijk te maken.
                                Het is ook van groot belang om de aanwijzingen van de organisatie op te lopen.
                                Onze verkeersregelaars zijn er om te zorgen voor een veilige oversteek.
                            </li>
                            <li class="list-group-item text-center">
                                <img src="{{ asset('modules/faq/img/deelnemers.jpg') }}" class="img-thumbnail">
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Is het toegestaan om een baby mee te nemen in een kinderwagen ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Er zijn voor de korte afstanden geen restricties op de leeftijden.
                                <br>
                                Het is dus toegestaan om kleine en zeer kleine kinderen mee te nemen met ondersteuning van een kinderwagen of buggy.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Hoe kom ik aan mijn route ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Wanneer de starttijd is aangebroken staan er vrijwilligers klaar met de routes.
                                Idere vrijwilliger zal een eigen afstand hebben.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Kan ik de route ook digitaal lopen ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Ja dit is mogelijk. De routes worden beschikbaar gesteld via de website <a href="https://www.afstandmeten.nl" class="text-success">afstandmeten.nl</a>.
                                De inlog gegevens worden per dag bij de start verstrekt.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Wie moet er in noodgevallen benaderd worden ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Op het routeformulier staat altijd het nummer vermeld van de calamiteiten persoon.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Het lukt me niet om alle dagen mee te doen. Krijg ik nu wel een medaille ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Er zijn altijd momenten dat het niet lukt om alle dagen aanwezig te zijn.
                                Wij houden hier altijd rekening mee en u kunt op de laatste dag gewoon een medaille in ontvangst nemen.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Wat gebeurt er bij slecht weer ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Als organisatie houden wij alle kanalen in de gaten.
                                Weer radar, nieuwsberichten maar de belangrijkste is nog wel de informatie vanuit de politie en gemeente.
                                Wij proberen zo lang mogelijk te wachten met een beslissing te nemen bij slecht weer om er maar voor te
                                zorgen dat we met plezier dit gezellige evenement af kunnen maken.
                                Houdt tijdens de avondvierdaagse week onze website en onze social media kanalen in de gaten.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                De afstand die we gekozen hebben blijkt te lang voor mijn zoon / dochter. Kunnen wij van afstand wisselen ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Wanneer u zich voor de start meldt bij het secretariaat kunnen we uw inschrijving zo omzetten.
                                <br>
                                Het zou jammer zijn wanneer uw zoon / dochter het plezier verliest in de avondvierdaagse doordat bij de inschrijving voor een verkeerde afstand gekozen is.
                            </li>
                        </ul>
                    </div>


                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">AVG (privacy)</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Wat gebeurd er met de persoonlijke gegevens, van de deelnemers, die bij de inschrijving worden gebruikt ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                De informatie wordt tijdens het evenment gebruikt om te achterhalen wie de betreffende deelnemer is mochten er problemen zijn.
                                Het zou zomaar kunnen gebeuren dat er iemand verdwaald of te laat binnen is.
                                Aan de hand van de informatie welke is gegeven bij de inschrijving kunnen wij direct contact zoeken.
                                <br>
                                <br>
                                De gegevens worden zo spoedig mogelijk, tot uiterlijk 1 week, na het evenement vernietigd.
                            </li>
                            <li class="list-group-item text-center">
                                <img src="{{ asset('modules/faq/img/crossing.jpg') }}" class="img-thumbnail">
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Wat gebeurd er met de foto's gemaakt tijdens het evenement ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Bij de inschrijving heef u een akkoord gegeven voor gebruik op social media en website.
                                Mocht er echter onverhoopt een foto geplaatst zijn waarvoor geen toestemming is gegeven,
                                laat ons dit dan weten via het <a href="/contact" class="text-success">contactformulier</a> .
                                Wij zullen er dan voor zorgen dat de betreffende foto zo spoedig mogelijk wordt verwijderd.
                            </li>
                        </ul>
                    </div>


                </div>

            </div>

        </div>


    </div>
    {{-- End content--}}

@endsection

