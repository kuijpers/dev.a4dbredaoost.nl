@extends('layouts.board.main')

@section('title')

    Sponsor Settings

@endsection

@section('css')

@endsection

@section('jstop')

@endsection

@section('jsbottom')


@endsection

@section('content')

    {{--{{$user}}--}}

    {{--{{dd($packages)}}--}}

        <div class="row">

            @include('sponsors::Board.includes.settings_packages')

        </div>

@endsection
