@extends('layouts.board.main')

@section('title')

    Sponsor

@endsection

@section('css')

@endsection

@section('jstop')

@endsection

@section('jsbottom')


@endsection

@section('content')

    {{--{{$user}}--}}

    <div class="container-fluid half-padding">
        <div class="template template__blank">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Blank Page</h3>
                        </div>
                        <div class="panel-body">
                            <p>This is a blank page.</p>
                            @component('components.whoslogged')
                            @endcomponent

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
