@extends('layouts.main.main')

@section('title')
    Credits
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/credits/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection


@section('content')

    {{-- Content here--}}
    <div class="section-a row">
        <div class="col-md-12">
            <h1>En de credits gaan naar:</h1>
            Een website kan nooit gebouwd worden zonder de ondersteuning van verschillende organisaties, bedrijven en andere developers.
            <br>
            Voor deze website is gebruik gemaakt van open source software en vrije scripts.
            <br>
            Deze zijn allen ontwikkeld om gratis aan te bieden en worden vaak ondersteund door vele vrijwilligers.
            <br>
            Ik vind het daarom persoonlijk ook zeer belangrijk dat ze "geëerd" moeten worden voor de hulp en ondersteuning die ze leveren.
            <br>
            Hieronder een klein overzicht met de links naar de websites.
            <br>
        </div>
    </div>
    <div class="section-b row">

        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-success text-white">Software</h5>
                <div class="card-body">
                    <p class="card-text text-a4dbo">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Laravel</th>
                                    <td><a href="https://laravel.com/">Website</a></td>
                                    <td>Dit is de basis van de website</td>
                                </tr>
                                <tr>
                                    <th scope="row">Bootstrap</th>
                                    <td><a href="http://getbootstrap.com/">Website</a></td>
                                    <td>Hierdoor ziet de website er mooi uit.</td>
                                </tr>
                                <tr>
                                    <th scope="row">jquery</th>
                                    <td><a href="https://jquery.com/">Website</a></td>
                                    <td>Dit zorgt er voor dat er leuke animaties e.d. kunnen zijn.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Font awesome</th>
                                    <td><a href="https://fontawesome.com/">Website</a></td>
                                    <td>Hier vandaan halen we de leuke icons.</td>
                                </tr>
                            </tbody>
                        </table>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-success text-white">API</h5>
                <div class="card-body">
                    <p class="card-text text-a4dbo">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Leafletjs</th>
                                    <td><a href="https://leafletjs.com/">Website</a></td>
                                    <td>Voor het leveren van de kaarten.</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mapbox</th>
                                    <td><a href="https://www.mapbox.com/">Website</a></td>
                                    <td>Zorgen er voor dat de kaarten er mooi uit zien.</td>
                                </tr>
                            </tbody>
                        </table>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header bg-success text-white">Packages</h5>
                <div class="card-body">
                    <p class="card-text text-a4dbo">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th scope="row">Laravel Modules van nwidart</th>
                                    <td><a href="https://nwidart.com/">Website</a></td>
                                    <td>
                                        nwidart heeft een package geschreven wat er voor zorgt dat ik makkelijker modules kan schrijven voor de pagina.
                                        <br>
                                        Dit scheelt heel veel tijd in het ontwikkelen van een website en daar ben ik hem dan ook dankbaar voor.
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">jquery-albe-timeline van Albejr</th>
                                    <td><a href="https://github.com/Albejr/jquery-albe-timeline">Website</a></td>
                                    <td>
                                        Package om tijdlijnen mee weer te geven.
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Star rating plugin van Alexander Reece</th>
                                    <td><a href="https://github.com/vulcandigital/jquery-starrating">Website</a></td>
                                    <td>
                                        Package om het rating systeem werkend te krijgen.
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Lightbox BS plugin van Ashley White</th>
                                    <td><a href="http://ashleydw.github.io/lightbox/">Website</a></td>
                                    <td>
                                        Image lightbox.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </p>
                </div>
            </div>
        </div>

    </div>
    {{-- End content--}}

@endsection

