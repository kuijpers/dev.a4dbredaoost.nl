@extends('layouts.main.main')

@section('title')
    Avond vierdaagse Breda Oost
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/main/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection



@section('content')

    {{-- Content here--}}

    <div class="section-a row">
        <div class="jumbotron">
            <div class="col-sm-8 mx-auto jumbofill">
                <p>
                <h1 class="text-success">In het zonnetje. <i class="fas fa-sun fa-spin text-warning"></i></h1>
                <h3 class="text-a4dbo">Willekeurige sponsor, vrijwilliger, deelnemer of bestuurslid</h3>
                <p class="text-a4dbo">
                    Hier kan een random of vooraf bepaalde sponsor, vrijwilliger, deelnemer of bestuurslid in het zonnetje worden gezet.
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Et non ex maxima parte de tota iudicabis? Itaque ab his ordiamur.
                    A mene tu? Duo Reges: constructio interrete.
                    Bonum incolumis acies: misera caecitas. Non igitur bene.
                    Et ais, si una littera commota sit, fore tota ut labet disciplina.
                    Utilitatis causa amicitia est quaesita.
                    Quid ergo hoc loco intellegit honestum?
                    Dic in quovis conventu te omnia facere, ne doleas.
                </p>
                <p>
                    <a class="btn btn-success" href="#" role="button">Meer informatie &raquo;</a>
                </p>
                </p>
            </div>
        </div>
    </div>

    @component('layouts.main.components.social_media_component')
    @endcomponent

    <div class="section-c row info-block bg-success">
        <div class="col-md-4 offset-md-2">
            <h4 class="text-a4dbo">Vrijwilligers</h4>
            <p class="text-white">
                Hier komt een bedankwoordje naar de vrijwilligers.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Et non ex maxima parte de tota iudicabis?
                Itaque ab his ordiamur.
                A mene tu?
                Duo Reges: constructio interrete.
                Bonum incolumis acies: misera caecitas.
                Non igitur bene.

                Et ais, si una littera commota sit, fore tota ut labet disciplina.
                Utilitatis causa amicitia est quaesita.
                Quid ergo hoc loco intellegit honestum?
                Dic in quovis conventu te omnia facere, ne doleas.
            </p>
        </div>

        <div class="col-md-4">
            <h4 class="text-a4dbo">Deelnemers</h4>
            <p class="text-white">
                Hier komt een bedankwoordje naar de deelnemers.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Et non ex maxima parte de tota iudicabis?
                Itaque ab his ordiamur.
                A mene tu?
                Duo Reges: constructio interrete.
                Bonum incolumis acies: misera caecitas.
                Non igitur bene.
            </p>
        </div>
    </div>



    <div class="section-d row">
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header bg-success text-white">Laatste nieuws</h5>
                <div class="card-body">
                    <h5 class="card-title text-a4dbo">Nieuwe mensen in de organisatie.</h5>
                    <p class="card-text text-a4dbo">
                        Wat gaat er nu gebeuren met de vernieuwing.
                    </p>
                    <a href="#" class="btn btn-light">Ga naar dit nieuwsbericht</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header bg-success text-white">Wat gaat er gebeuren.</h5>
                <div class="card-body">
                    <h5 class="card-title text-a4dbo">Bestuursvergadering</h5>
                    <p class="text-muted text-a4dbo"><small>17-10-2018</small></p>
                    <p class="card-text text-a4dbo">
                        Welke speerpunten gaan besproken worden tijdens deze vergadering.
                    </p>
                    <a href="#" class="btn btn-light">Meer datums</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header bg-success text-white">Wist u dat?</h5>
                <div class="card-body">
                    <h5 class="card-title text-a4dbo">Vrijwilligers</h5>
                    <p class="card-text text-a4dbo">De organisatie draait eigenlijk alleen maar op vrijwilligers.</p>
                    <a href="#" class="btn btn-light">Meer wist u datjes.</a>
                </div>
            </div>
        </div>
    </div>
    {{-- End content--}}

@endsection

