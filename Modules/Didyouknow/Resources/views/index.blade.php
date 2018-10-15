@extends('layouts.main.main')

@section('title')
    Wist u dat?
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/didyouknow/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection


@section('content')

    {{-- Content here--}}
    <div class="section-a row">

        <div class="col-md-8 offset-md-2 border-bottom">
            <h1>Wist u dat?</h1>
        </div>

        <div class="col-md-8 offset-md-2 my-5">

            Met het organiseren van een evenement als de avondvierdaagse zijn er veel dingen waar mensen niet bij stil staan.
            <br>
            Op deze pagina willen we jullie bekend maken met leuke, grappige, rare maar misschien ook minder leuke weetjes.
            <br>
            Mocht je nog bekend zijn met een wist u datje dan horen wij dit graag.

        </div>

        <div class="col-md-8 offset-md-2 my-5">

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header bg-success" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Wanneer begint de organisatie met de opzet van de nieuwe avondvierdaagse?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            Het bestuur start met de eerste vergadering over de nieuwe avondvierdaagse in oktober van het jaar ervoor.
                            <br>
                            Hierna worden alle stappen 1 voor 1 opgezet.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-success" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Met hoeveel vrijwilligers werkt de organisatie?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            De organisatie heeft een "pool" van 150 vrijwilligers.
                            <br>
                            Zij zijn er niet ieder dag mee bezig maar geven ook voor en na de avonden ondersteuning.
                            <br>
                            Daarnaast is het voor de vrijwiliggers ook niet altijd mogelijk om alle dagen ondersteuning te geven.
                            <br>
                            We zijn daarom ook blij met iedere avond die ze ondersteuning kunnen geven.
                            <br>
                            Mocht je interesse hebben om vrijwiligger te worden neem dan even contact op.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-success" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Hoeveel deelnemers zijn er bij de avondvierdaagse van Breda oost?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            Uiteraard is niet ieder jaar hetzelfde met het aantal deelnemers,
                            maar gemiddeld genomen doen er zo'n 150-200 deelnemers mee.
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    {{-- End content--}}

@endsection

