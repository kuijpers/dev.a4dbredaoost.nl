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
        @if(!empty($didyouknow_information))

            @foreach($didyouknow_information as $information)
            <div class="col-md-8 offset-md-2 mt-5 mb-2">
                <h4>{{$information->title}}</h4>
                {!!$information->body!!}
            </div>
            @endforeach
        @else

            No data available !!!!

        @endif

        <div class="col-md-8 offset-md-2 my-5">

            @if(!empty($didyouknows))
                <div class="accordion" id="Didyouknow">


                    @foreach($didyouknows as $didyouknow)

                    <div class="card">
                        <div class="card-header bg-success" id="heading{{$didyouknow->id}}">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-white collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$didyouknow->id}}" aria-expanded="true" aria-controls="collapse{{$didyouknow->id}}">
                                    {{$didyouknow->question}}
                                </button>
                            </h5>
                        </div>

                        <div id="collapse{{$didyouknow->id}}" class="collapse" aria-labelledby="heading{{$didyouknow->id}}" data-parent="#Didyouknow">
                            <div class="card-body">
                                {{$didyouknow->answer}}
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>
                @else

                    No data available !!!!!

                @endif

        </div>


    </div>
    {{-- End content--}}

@endsection

