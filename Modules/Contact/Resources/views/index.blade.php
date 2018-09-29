@extends('layouts.main.main')

@section('title')
    Contact
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/contact/css/main.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
@endsection

@section('jstop')



@endsection

@section('jsbottom')

    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin=""></script>


    <script>
        var mymap = L.map('contact_map', {
            center: [51.58659, 4.81051],
            zoom: 15.25
        });
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1IjoiZGFya25pZ2h0d29ya3MiLCJhIjoiY2psenA5dm0zMXlzbjNwcDEzazRkMTh5cyJ9.RU7Ogp4f0Dtm89gtL5W2XA'
        }).addTo(mymap);
        var marker = L.marker([51.58659, 4.81051]).addTo(mymap);
    </script>

@endsection


@section('content')

    {{-- Content here--}}
    <div class="section-a row">

        <div class="col-12" id="contact_map"></div>

    </div>

    @component('layouts.main.components.social_media_component')
    @endcomponent

    <div class="section-c row p-5">

        <div class="col-md-6">
            <address>
                <strong>
                    <div class="text-a4dbo">
                        Voorzitter
                    </div>
                </strong>
                <br>
                <strong>Full Name</strong><br>
                1234 Example Street
                <br>
                Antartica, Example 0987
                <br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
                <br>
                <a href="mailto:#">exam.ple@example.com</a>
            </address>

            <address>
                <strong>
                    <div class="text-a4dbo">
                        Secretaris
                    </div>
                </strong>
                <br>
                <strong>Full Name</strong><br>
                1234 Example Street
                <br>
                Antartica, Example 0987
                <br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
                <br>
                <a href="mailto:#">exam.ple@example.com</a>
            </address>


            <address>
                <strong>
                    <div class="text-a4dbo">
                        Penningmeester
                    </div>
                </strong>
                <br>
                <strong>Full Name</strong><br>
                1234 Example Street
                <br>
                Antartica, Example 0987
                <br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
                <br>
                <a href="mailto:#">exam.ple@example.com</a>
            </address>



        </div>
        <div class="col-md-6">
            <h2 class="text-success">Neemt u contact op</h2>
            <form class="form-horizontal" method="POST" action="#">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">
                    <label for="contact_name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-12">
                        <input id="contact_name" type="text" class="form-control" name="contact_name" value="{{ old('contact_name') }}" required autofocus>

                        @if ($errors->has('contact_name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('contact_name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">
                    <label for="contact_email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-12">
                        <input type="contact_email" class="form-control" name="contact_email" value="{{ old('contact_email') }}" required>

                        @if ($errors->has('contact_email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('contact_email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('contact_question') ? ' has-error' : '' }}">
                    <label for="contact_question" class="col-md-4 control-label">Vraag</label>

                    <div class="col-md-12">
                        <textarea id="contact_question" type="textarea" class="form-control" name="contact_question" required>
                            {{ old('contact_question') }}
                        </textarea>

                        @if ($errors->has('contact_question'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('contact_question') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="agreement">
                    <label class="form-check-label" for="agreement">Ik ga akkoord met de voorwaarden</label>
                </div>

                <div class="form-group">
                 <button type="submit" class="btn btn-success">Versturen</button>
                </div>
            </form>
        </div>

    </div>

    {{-- End content--}}

@endsection

