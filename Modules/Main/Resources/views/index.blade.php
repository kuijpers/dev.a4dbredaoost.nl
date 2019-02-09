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

    {{--{{$main_latestnews}}--}}

    {{-- Content here--}}
    @include('main::includes.jumbotron')

    @include('main::includes.announcements')


    @include('layouts.main.components.social_media_component')

    @include('main::includes.thankyou')

    {{-- End content--}}

@endsection

