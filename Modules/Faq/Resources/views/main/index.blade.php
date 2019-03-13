@extends('layouts.main.main')

@section('title')
     Veelgestelde vragen
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/faq/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection


@section('content')

    {{--{{$faq_categories}}--}}

    {{-- Content here--}}
    <div class="section-a row">

        <div class="col-md-10 offset-md-1 border-bottom">
            <h1>Veel gestelde vragen</h1>
        </div>

        <div class="col-md-10 offset-md-1 my-5">

            <div class="row">
                @include('faq::includes.main.faq_information')
            </div>

            <div class="row">

                {{-- START Q&A's --}}
                <div class="col-12 card-columns">
                     @include('faq::includes.main.faq')
                </div> {{-- END Q&A's --}}

            </div>

        </div>


    </div>
    {{-- End content--}}

@endsection

