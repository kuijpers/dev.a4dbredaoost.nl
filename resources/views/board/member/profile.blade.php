@extends('layouts.board.main')

@section('title')
    Bestuurslid -> Profiel
@endsection

@section('css')

@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection

@section('content')

    <div class="container-fluid half-padding">
        <div class="row">

            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Dit is uw profiel</h3>
                    </div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-6">
                                Profiel foto:
                            </div>
                            <div class="col-md-6">
                                <img src="{{asset("/board/css/img/nophoto.png")}}" class="" alt="Profiel foto">
                            </div>

                        </div>

                    </div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-md-6">
                                Gebruikers ID:
                            </div>
                            <div class="col-md-6">
                                {{ Auth::user()->id }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                Uw naam is:
                            </div>
                            <div class="col-md-6">
                                {{ Auth::user()->name }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                Uw primaire email is:
                            </div>
                            <div class="col-md-6">
                                {{ Auth::user()->email }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                Uw adres is:
                            </div>
                            <div class="col-md-6">
                                {{ Auth::user()->address }}
                                <br>
                                {{ Auth::user()->postcode }}
                                <br>
                                {{ Auth::user()->city }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                Uw telefoonnummer is:
                            </div>
                            <div class="col-md-6">
                                {{ Auth::user()->phone }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                Uw geboortedatum is:
                            </div>
                            <div class="col-md-6">
                                {{ Carbon\Carbon::parse(Auth::user()->dob)->format('d-m-Y') }}

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                Uw functie in het bestuur is:
                            </div>
                            <div class="col-md-6">
                                Webmaster (lid)
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                Uw account is gemaakt op:
                            </div>
                            <div class="col-md-6">
                                {{ Auth::user()->created_at->format('d-m-Y H:i') }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <button class="btn btn-default" type="button">Update uw profiel</button>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Werkgroepen waar u in zit</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    Social Media
                                </li>
                                <li>
                                    AVG
                                </li>
                                <li>
                                    Routes
                                </li>
                                <li>
                                    Werkvoorbereiding
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Authorisaties voor de website</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    Auteur
                                </li>
                                <li>
                                    Editor
                                </li>
                                <li>
                                    Redacteur
                                </li>
                                <li>
                                    Controller
                                </li>
                                <li>
                                    Super User
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Authorisaties voor de vrijwilligers pagina</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    Auteur
                                </li>
                                <li>
                                    Editor
                                </li>
                                <li>
                                    Redacteur
                                </li>
                                <li>
                                    Controller
                                </li>
                                <li>
                                    Super User
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Authorisaties voor de bestuurs pagina</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <ul>
                                <li>
                                    Auteur
                                </li>
                                <li>
                                    Editor
                                </li>
                                <li>
                                    Redacteur
                                </li>
                                <li>
                                    Controller
                                </li>
                                <li>
                                    Super User
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>


            </div>

            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Quick links</h3>
                    </div>
                    <div class="panel-body">
                        <p>
                        Hieronder staan uw quick links:
                        </p>

                        <p>
                            <table class="table table-striped table-hover" cellspacing="0" width="100%">
                                <tbody>
                                    <tr>
                                        <td><a href="#">W: Tijdlijn</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">W: Sponsors</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">W: Nieuws</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">V: Vrijwilligers</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">V: Toekenning</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">B: Deelnemers</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">B: Vrijwillligers</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">B: Leden</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">B: Werkgroep Social Media</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">B: Overzicht werkgroepen</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
