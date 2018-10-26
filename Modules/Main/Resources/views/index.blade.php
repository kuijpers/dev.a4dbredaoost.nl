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

    <div class="section-c row info-block bg-success pt-5">

        <div class="col-md-12">
            <div class="card-deck">

                <div class="card">
                    <h4 class="card-header bg-success text-white">Laatste nieuws</h4>
                    <div class="card-body">
                        <h5 class="card-title text-success">Nieuwe mensen in de organisatie.</h5>
                        <p class="card-text text-a4dbo">
                            Wat gaat er nu gebeuren met de vernieuwing.
                            <br>
                            Sinds kort zitten er aan aantal nieuwe mensen in het bestuur van de organisatie.
                            <br>
                            Wat gaat dit betekenen voor de toekomst van de avondvierdaagse in Breda-oost?
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-success">Ga naar dit nieuwsbericht</a>
                    </div>
                </div>

                <div class="card">
                    <h4 class="card-header bg-success text-white">Wat gaat er gebeuren.</h4>
                    <div class="card-body">
                        <h5 class="card-title text-success">Bestuursvergadering</h5>
                        <p class="text-muted text-success"><small>17-10-2018</small></p>
                        <p class="card-text text-a4dbo">
                            Welke speerpunten gaan besproken worden tijdens deze vergadering.
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-success">Meer datums</a>
                    </div>
                </div>

                <div class="card">
                    <h4 class="card-header bg-success text-white">Wist u dat?</h4>
                    <div class="card-body">
                        <h5 class="card-title text-success">Vrijwilligers</h5>
                        <p class="card-text text-a4dbo">De organisatie draait eigenlijk alleen maar op vrijwilligers.</p>
                    </div>
                    <div class="card-footer bg-white border-0">
                        <a href="#" class="btn btn-success">Meer wist u datjes.</a>
                    </div>
                </div>

            </div>
        </div>

    </div>


    @component('layouts.main.components.social_media_component')
    @endcomponent


    <div class="section-d row">

        <div class="col-md-4">
            <h4 class="text-success">Vrijwilligers</h4>
            <p class="text-a4dbo">
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
            <h4 class="text-success">Deelnemers</h4>
            <p class="text-a4dbo">
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

        <div class="col-md-4">
            <h4 class="text-success">Sponsors</h4>
            <p class="text-a4dbo">
                Hier komt een bedankwoordje naar de sponsors.
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
    {{-- End content--}}

@endsection

