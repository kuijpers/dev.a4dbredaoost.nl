@extends('layouts.main.main')

@section('title')
    Zoek het op!
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/search/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection


@section('content')

    {{-- Content here--}}
    <div class="section-a section-a row">

        <div class="col-md-8 offset-md-2 border-bottom">
            <h1>Die zoeken we op !!!!</h1>
        </div>

        <div class="col-md-8 offset-md-2 my-5 text-center">
            Helaas hebben we niks kunnen vinden voor de door u ingevoerde zoekterm.
            <br>
            Probeert u het eens met een andere zoekterm.
            <div class="form-row my-5">
                <div class="col-12">
                    <form class="form-inline" method="POST" action="{{ route('main.search.index') }}">
                        {{ csrf_field() }}
                        <div class="form-group col-md-8">
                            <input name="search" class="form-control  form-control-lg mx-2 my-1 col-12" type="text" placeholder="Zoek op!">
                        </div>
                        <div class="form-group col-md-4">
                            <button type="submit" class="btn btn-light btn-lg btn-block mx-2 my-1 col-12">Zoeken</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center">

                <img src="{{ asset('img/result-not-found.jpg') }}" class="img-fluid" alt="Result not found">

            </div>
        </div>

    </div>
    {{-- End content--}}

@endsection

