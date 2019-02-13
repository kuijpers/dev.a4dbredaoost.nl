@extends('layouts.main.main')

@section('title')
    @lang('board::main/lang.index_web_title')
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/board/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection


@section('content')

    {{--{{$board_members}}--}}

    {{--{{dd($board_information)}}--}}

    {{-- Content here--}}
    <div class="section-a row">

        <div class="col-md-8 offset-md-2 border-bottom">
            <h1>@lang('board::main/lang.index_page_title')</h1>
        </div>

        @include('board::includes.Main.information')
        @include('board::includes.Main.president')
        @include('board::includes.Main.vice_president')
        @include('board::includes.Main.secretary')
        @include('board::includes.Main.treasurer')
        @include('board::includes.Main.members')

        @if(\Modules\Board\Http\Controllers\Main\TheBoardController::show_on_page('show-workgroups'))
            @include('board::includes.Main.workgroups')
        @endif




    </div>


    {{-- End content--}}

@endsection

