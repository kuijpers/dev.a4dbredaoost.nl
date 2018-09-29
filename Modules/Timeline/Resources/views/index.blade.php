@extends('layouts.main.main')

@section('title')
    Tijdlijn
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('modules/timeline/libs/jquery-albe-timeline-master/templates/vertical/style-albe-timeline.css') }}" />

    <link href="{{ asset('modules/timeline/css/timeline.css') }}" rel="stylesheet">

@endsection

@section('jstop')

@endsection

@section('jsbottom')
    <script src="{{ asset('modules/timeline/libs/jquery-albe-timeline-master/jquery-albe-timeline.min.js') }}"></script>
    <script src="{{ asset('modules/timeline/libs/jquery-albe-timeline-master/templates/vertical/data-albe-timeline.js') }}"></script>

@endsection


@section('content')

    {{-- Content here--}}
    <div class="section-a row">
        <div class="col-md-12">
            <div id="myTimeline">
                {{--
                    Alles wordt ingeladen via modules/timeline/libs/jquery-albe-timeline-master/templates/vertical/data-albe-timeline.js
                --}}
            </div>
        </div>
    </div>
    {{-- End content--}}

@endsection

