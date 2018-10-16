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

        <div class="col-md-8 offset-md-2 border-bottom">
            <h1>Veel gestelde vragen</h1>
        </div>

        <div class="col-md-8 offset-md-2 my-5">

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
                                We houden als organisatie 2 inschrijf momenten
                                en deze vinden plaats op een woensdag en zaterdag in de aanloop naar de avondvierdaagse.
                                De exacte datum kunnen we hier niet zo direct plaatsen omdat dit afhangt van wanneer het evenement plaats vindt.
                                <br>
                                <br>
                                Op woensdag kunt u zich inschrijven op de volgende 2 lokaties:
                                <ul>
                                    <li>
                                        OBS De Tweesprong
                                    </li>
                                    <li>
                                        KBS De Weilust
                                    </li>
                                </ul>
                                Op zaterdag kunt u zich inschrijven op de volgende 2 lokaties:
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
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Is legitimatie verplicht bij de inschrijving?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Nee, dit is niet nodig. We gaan er vanuit dat alles op een eerlijke manier zal gebeuren.
                                Hier mogen we toch wel vertrouwen in hebben.
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
                                U bent niet verplicht tot inschrijving wanneer u mee loopt.
                                Als u toch alle avonden mee loopt is het natuurlijk wel leuk om aan het eind ook een medaille in ontvangst te nemen.
                                Hiervoor is het wel verstandig om uzelf in te schrijven.
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
                        </ul>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Deelname</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                Het lukt me niet om alle dagen mee te doen. Krijg ik nu wel een medaille ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Er zijn altijd momenten dat het niet lukt om alle dagen aanwezig te zijn.
                                Wij houden hier altijd rekening mee en u kunt op de laatste dag gewoon een medaille in ontvangst nemen.
                            </li>
                            <li class="list-group-item text-center">
                                <img src="{{ asset('modules/faq/img/deelnemers.jpg') }}" class="img-thumbnail">
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
                                <br>
                                U kunt zich ook inschrijven voor alert emails tijdens deze dagen.
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-secondary">
                                <strong>V:</strong>
                                De afstand die we gekozen hebben blijkt te lang voor mijn zoon / dochter. Kunnen wij van afstand wisselen ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                Wanneer u zich voor de start meldt bij het secretariaat kunnen we uw inschrijving zo omzetten.
                                <br>
                                Het zou jammer zijn wanneer uw zoon / dochter het plezier verliest in de avondvierdaagse doordat een afstand niet te halen is.
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
                                Zoeken jullie nog mensen ?
                            </li>
                            <li class="list-group-item list-group-item-action list-group-item-light">
                                <strong>A:</strong>
                                We zijn altijd op zoek naar vrijwilligers.
                                Hoe meer hoe liever want het is niet zo dat alle vrijwilligers ook elke dag kunnen.
                                <br>
                                Ook voor het bestuur en de werkgroepen zijn we op zoek naar ondersteuning.
                                <br>
                                Stuur ons een berichtje en we laten u de mogelijkheden weten.
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

                </div>

            </div>

        </div>


    </div>
    {{-- End content--}}

@endsection

