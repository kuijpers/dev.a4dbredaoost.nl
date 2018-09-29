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
        <div class="col-md-12 border-bottom">
            <h1>Het bestuur</h1>
        </div>
        <div class="col-md-12 my-5">
            Uitleg over het bestuur.
        </div>
        <div class="col-md-3">
            <div class="card mt-4">
                <h5 class="card-header text-center text-white bg-success">
                    Voorzitter
                </h5>
                <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('modules/board/album/portrait_3.jpg') }}" alt="Card image cap">
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

        <div class="col-md-3">
            <div class="card mt-4">
                <h5 class="card-header text-center text-white bg-success">
                    Secretaris
                </h5>
                <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('modules/board/album/portrait_1.jpg') }}" alt="Card image cap" style="width: 12rem;">
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
        <div class="col-md-3">
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
        <div class="col-md-3">
            <div class="card mt-4">
                <h5 class="card-header text-center text-white bg-success">
                    Bestuurslid
                </h5>
                <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('modules/board/album/portrait_7.jpg') }}" alt="Card image cap" style="width: 12rem;">
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
        <div class="col-md-3">
            <div class="card mt-4">
                <h5 class="card-header text-center text-white bg-success">
                    Bestuurslid
                </h5>
                <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('img/no-image.png') }}" alt="Card image cap" style="width: 12rem;">
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
    </div>

    <div class="section-a row">
        <div class="col-md-12 border-bottom">
            <h1>Werkgroepen</h1>
        </div>
        <div class="col-md-12 my-5">
            Uitleg over werkgroepen.
        </div>
        <div class="col-md-12 mb-5">
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
                    <h5>Werkgroep Social Media</h5>
                    Uitleg over waarvoor deze werkgroep in het leven is geroepen.
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
                <div class="tab-pane fade border border-top-0 rounded-bottom p-4" id="sponsoring" role="tabpanel" aria-labelledby="sponsoring-tab">Dit is sponsoring</div>
                <div class="tab-pane fade border border-top-0 rounded-bottom p-4" id="werkvoorbereiding" role="tabpanel" aria-labelledby="werkvoorbereiding-tab">Dit is werkvoorbereiding</div>
                <div class="tab-pane fade border border-top-0 rounded-bottom p-4" id="routes" role="tabpanel" aria-labelledby="routes-tab">Dit is routes</div>
                <div class="tab-pane fade border border-top-0 rounded-bottom p-4" id="avg" role="tabpanel" aria-labelledby="avg-tab">Dit is avg</div>
            </div>
        </div>
    </div>
    {{-- End content--}}

@endsection

