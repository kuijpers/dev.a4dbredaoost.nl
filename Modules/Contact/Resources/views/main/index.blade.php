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


    <script  src="{{ asset('js/StyleSelectHover.js') }}"></script>

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

<script>
	$('#contact_agreement').change(function(){
		if($(this).is(":checked")) {
			$('#submit_button').removeClass("disabled");
		} else {
			$('#submit_button').addClass("disabled");
		}
	});
</script>

    <script  src="{{ Module::asset('contact:js/ajaxCalls/SendEmail.js') }}"></script>

@endsection


@section('content')

    {{--{{$text}}--}}

    @if (session('success'))
        <div class="alert alert-success tosti">
            <strong>
                @lang('contact::main/lang.'.session('success'))
            </strong>
        </div>
    @endif

    @if (session('danger'))
        <div class="alert alert-danger tosti">
            <strong>
                @lang('contact::main/lang.'.session('danger'))
            </strong>
        </div>
    @endif




    @include('contact::includes.modals.general_conditions')

    {{-- Content here--}}
    <div class="section-a row">

        <div class="col-12" id="contact_map"></div>

    </div>

    @component('layouts.main.components.social_media_component')
    @endcomponent

    <div class="section-c row p-5">

        <div class="col-md-6">
            @include('contact::includes.main.contact_board')
        </div>


        <div class="col-md-6">
            @include('contact::includes.main.contact_form')
        </div>

    </div>

    {{-- End content--}}

@endsection

