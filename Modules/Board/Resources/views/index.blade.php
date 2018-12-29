@extends('layouts.main.main')

@section('title')
    Het bestuur
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/board/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection


@section('content')

    {{-- Content here--}}
    <div class="section-a row">

        <div class="col-md-8 offset-md-2 border-bottom">
            <h1>Het bestuur</h1>
        </div>

        <div class="col-md-8 offset-md-2 my-5">
            Een evenement als de avondvierdaagse kan natuurlijk nooit van de grond komen zonder dat er een organisatie achter staat.
            Deze organisatie heeft natuurlijk ook aansturing nodig. Ook de stichting avondvierdaagse breda oost heeft een bestuur welke voor de aansturing zorgt.
            Door de jaren heen zijn er wel wat wijzigingen binnen het bestuur geweest maar de laatste 15 jaar is de samenstelling gelijk gebleven.
            <br>
            <br>
            Hieronder ziet u wie de huidige bestuursleden zijn.
        </div>

        <div class="col-md-4">
            <div class="card mt-4">
                <h5 class="card-header text-center text-white bg-success">
                    Voorzitter
                </h5>
                <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('img/no-image.png') }}" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">
                    <div class="col-md-12">
                        <h5>
                            Frans-Willem van Hulst
                        </h5>
                    </div>
                    <div class="col-md-12 mt-3">
                        Contact gegevens van de persoon.
                    </div>
                    </p>

                    <div class="mt-3 pb-3">
                        <h6> Over mijzelf </h6>
                        Ik ben Frans-Willem van Hulst.
                        Sinds 1984 ben ik woonachtig in de wijk Heusdenhout.
                        Ik ben getrouwd en heb twee kinderen die beide ook al jaren
                        betrokken zijn bij dit evenement.
                        Al jarenlang ben ik actief betrokken in de wijk o.a ben
                        ik voorzitter geweest van de wijkraad en oudercommissie
                        van K.B.S de Weilust.
                        Ook heb ik de tieneractiviteit toentertijd opgestart.
                        Ik vind het fijn om actief en sociaal bezig te zijn in de wijk.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-4">
                <h5 class="card-header text-center text-white bg-success">
                    Vice-voorzitter
                </h5>
                <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('modules/board/album/portrait_1.jpg') }}" alt="Card image cap" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="col-md-12">
                        <h5>
                            Roy Mertens
                        </h5>
                    </div>
                    <div class="col-md-12 mt-3">
                        Contact gegevens van de persoon.
                    </div>
                    </p>
                    <div class="card-header">
                        <strong>Portefeuille</strong>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="mt-3 pb-3">
                        <h6> Over mijzelf </h6>
                        Stukje over de persoon zelf.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-4">
                <h5 class="card-header text-center text-white bg-success">
                    Secretaris
                </h5>
                <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('modules/board/album/portrait_4.jpg') }}" alt="Card image cap" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="col-md-12">
                        <h5>
                            Naam van de persoon
                        </h5>
                        <div class="text-muted">
                            Geboortedatum
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        Contact gegevens van de persoon.
                    </div>
                    </p>
                    <div class="card-header">
                        <strong>Portefeuille</strong>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="mt-3 pb-3">
                        <h6> Over mijzelf </h6>
                        Stukje over de persoon zelf.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-4">
                <h5 class="card-header text-center text-white bg-success">
                    Penningmeester
                </h5>
                <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('modules/board/album/portrait_5.jpg') }}" alt="Card image cap" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="col-md-12">
                        <h5>
                            Naam van de persoon
                        </h5>
                        <div class="text-muted">
                            Geboortedatum
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        Contact gegevens van de persoon.
                    </div>
                    </p>
                    <div class="card-header">
                        <strong>Portefeuille</strong>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <div class="mt-3 pb-3">
                        <h6> Over mijzelf </h6>
                        Stukje over de persoon zelf.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-4">
                <h5 class="card-header text-center text-white bg-success">
                    Bestuurslid
                </h5>
                <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('img/no-image.png') }}" alt="Card image cap" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="col-md-12">
                        <h5>
                            Anke Verhagen
                        </h5>
                    </div>
                    <div class="col-md-12 mt-3">
                        Contact gegevens van de Anke.
                    </div>
                    </p>
                    <div class="mt-3 pb-3">
                        <h6> Over mijzelf </h6>
                        Mijn naam is Anke Verhagen en ik woon sinds 1993 samen met mijn partner
                        in de wijk Heusdenhout. Samen hebben wij een zoon en dochter.
                        Vanaf het eerste moment zijn wij allen actief betrokken bij dit wijkevenement.
                        De meeste van jullie zullen mij beter herkennen als mascotte van de avondvierdaagse
                        Breda-Oost. In verschillende creaties ben ik al voorbij komen wandelen.
                        Naast dit evenement ben ik langere tijd actief geweest als voorzitter
                        van de oudercommissie op K.B.S de Weilust en was ik actief lid van
                        verschillende commissies binnen deze school.
                        Ik vind het mooi om iets te kunnen betekenen voor onze wijk.
                        Ik hoop hier nog een tijd een bijdrage aan te mogen leveren.
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mt-4">
                <h5 class="card-header text-center text-white bg-success">
                    Bestuurslid
                </h5>
                <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('modules/board/album/portrait_7.jpg') }}" alt="Card image cap" style="width: 12rem;">
                <div class="card-body">
                    <p class="card-text">
                    <div class="col-md-12">
                        <h5>
                            Dennis Kuijpers
                        </h5>
                        <div class="text-muted">
                            10-02-1976
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        webmaster.a4dbredaoost@gmail.com
                    </div>
                    </p>
                    <div class="card-header">
                        <strong>Waar mee bezig?</strong>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Webmaster</li>
                        <li class="list-group-item">Social Media</li>
                        <li class="list-group-item">AVG</li>
                    </ul>
                    <div class="mt-3 pb-3">
                        <h6> Over mijzelf </h6>
                        Zoals u al heeft gezien is mijn naam Dennis Kuijpers.
                        Ik woon, met heel veel plezier, sinds 2014 in de wijk Heusdenhout.
                        Samen met mijn vriendin Wendy heb ik 4 kinderen die altijd met veel pelzier deelnemen aan de a4d.
                        Toen ik te horen kreeg dat er ondersteuning nodig was voor de organisatie heb ik mijzelf aangemeld.
                        Voor de organisatie zal het meest actieve stuk voor mij zitten in de website.
                        Mochten er vragen zijn over de website dan hoor ik ze graag.
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="col-md-4 offset-md-2">--}}
            {{--<div class="card mt-4">--}}
                {{--<h5 class="card-header text-center text-white bg-success">--}}
                    {{--Bestuurslid--}}
                {{--</h5>--}}
                {{--<img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('img/no-image.png') }}" alt="Card image cap" style="width: 12rem;">--}}
                {{--<div class="card-body">--}}
                    {{--<p class="card-text">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<h5>--}}
                            {{--Naam van de persoon--}}
                        {{--</h5>--}}
                        {{--<div class="text-muted">--}}
                            {{--Geboortedatum--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12 mt-3">--}}
                        {{--Contact gegevens van de persoon.--}}
                    {{--</div>--}}
                    {{--</p>--}}
                    {{--<div class="card-header">--}}
                        {{--<strong>Portefeuille</strong>--}}
                    {{--</div>--}}
                    {{--<ul class="list-group list-group-flush">--}}
                        {{--<li class="list-group-item">Cras justo odio</li>--}}
                        {{--<li class="list-group-item">Dapibus ac facilisis in</li>--}}
                        {{--<li class="list-group-item">Vestibulum at eros</li>--}}
                    {{--</ul>--}}
                    {{--<div class="mt-3 pb-3">--}}
                        {{--<h6> Over mijzelf </h6>--}}
                        {{--Stukje over de persoon zelf.--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    </div>

    <div class="section-a row">

        <div class="col-md-8 offset-md-2 border-bottom">
            <h1>Werkgroepen</h1>
        </div>

        <div class="col-md-8 offset-md-2 my-5">
            Aangezien de organisatie van een evenement als de avondvierdaagse behoorlijk wat tijd kost is er vanaf 2018 besloten om te gaan werken met werkgroepen.
            Deze werkgroepen geven ondersteuning aan het bestuur.
            In grote lijnen komt het erop neer dat deze werkgroepen bestaan uit mensen die graag extra ondersteuning geven om de organisatie soepel te laten verlopen.
            <br>
            Er bestaan 2 soorten werkgroepen:
            <ul>
                <li>Vaste werkgroepen</li>
                <li>Variabele werkgroepen</li>
            </ul>
            Vaste werkgroepen blijven bestaan. Dit zijn de werkgroepen waar constante werkzaamheden in liggen. Vaak werken deze werkgroepen met een vast draaiboek en een vast team aan mensen.
            <br>
            <br>
            Variabele werkgroepen worden opgezet wanneer er noodzaak voor is. Dit kunnen uiteenlopende onderwerpen zijn die op dat moment relevant zijn om op te zetten.
            Denk hierbij bijvoorbeeld aan een jubileum of bijvoorbeeld de implementatie van de nieuwe privacy wetgeving.
            Deze werkgroepen moeten vaak het wiel opnieuw uitvinden aangezien het vaak over nieuwe onderwerpen gaat.
            <br>
            Wanneer er een variabele werkgroep opgezet gaat worden maken wij hierover een aankondiging op onze nieuwspagina en in de nieuwsbrief.
            <br>
            <br>
            Mocht je interesse hebben om deel te nemen aan een werkgroep laat dit dan weten via de <a href="#">contact pagina</a>.
        </div>

        <div class="col-md-8 offset-md-2 mb-5">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="socialmedia-tab" data-toggle="tab" href="#socialmedia" role="tab" aria-controls="socialmedia" aria-selected="true">Social Media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="sponsoring-tab" data-toggle="tab" href="#sponsoring" role="tab" aria-controls="sponsoring" aria-selected="false">Sponsoring</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="werkvoorbereiding-tab" data-toggle="tab" href="#werkvoorbereiding" role="tab" aria-controls="werkvoorbereiding" aria-selected="false">Werkvoorbereiding / Scholen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="routes-tab" data-toggle="tab" href="#routes" role="tab" aria-controls="routes" aria-selected="false">Routes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="avg-tab" data-toggle="tab" href="#avg" role="tab" aria-controls="avg" aria-selected="false">AVG</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade border border-top-0 rounded-bottom p-4 show active" id="socialmedia" role="tabpanel" aria-labelledby="socialmedia-tab">
                    <div class="col-12">

                        <h5>Werkgroep Social Media</h5>

                        Social Media is niet meer weg te denken in de huidige samenleving.
                        Wij willen hier dan, als organisatie, dan ook goed gebruik van maken.
                        <br>
                        Binnen deze werkgroep gaan we kijken wat de mogelijkheden zijn met Social Media.
                        <br>
                        Aangezien de veranderingen binnen Social Media zeer snel gaan is het vermoeden ook dat dit een vaste werkgroep zal gaan worden.
                        Mocht je interesse hebben om deel te nemen in deze werkgroep stuur ons dan even een berichtje.
                        <br>

                    </div>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="card mt-3" style="width: 18rem;">
                                <div class="card-header">
                                    Wie zitten er in deze werkgroep
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Anke Verhagen</li>
                                    <li class="list-group-item">Ewout van Essen</li>
                                    <li class="list-group-item">Dennis Kuijpers</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-7 offset-md-1">

                            <h5>Social media waar op dit moment gebruik van wordt gemaakt.</h5>

                            <ul>
                                <li>
                                    Deze website
                                </li>
                                <li>
                                    Facebook
                                </li>
                                <li>
                                    Twitter
                                </li>
                                <li>
                                    Instagram
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>

                <div class="tab-pane fade border border-top-0 rounded-bottom p-4" id="sponsoring" role="tabpanel" aria-labelledby="sponsoring-tab">
                    Dit is sponsoring
                </div>

                <div class="tab-pane fade border border-top-0 rounded-bottom p-4" id="werkvoorbereiding" role="tabpanel" aria-labelledby="werkvoorbereiding-tab">
                    Dit is werkvoorbereiding
                </div>
                <div class="tab-pane fade border border-top-0 rounded-bottom p-4" id="routes" role="tabpanel" aria-labelledby="routes-tab">
                    Dit is routes
                </div>
                <div class="tab-pane fade border border-top-0 rounded-bottom p-4" id="avg" role="tabpanel" aria-labelledby="avg-tab">
                    Dit is avg
                </div>

            </div>

        </div>
    </div>
    {{-- End content--}}

@endsection

