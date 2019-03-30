@extends('layouts.board.main')

@section('title')
    {{ __('board_member_settings.page_title') }}
@endsection

@section('css')

    <link href="{{asset("/board/libs/selectize/css/selectize.default.css")}}" rel="stylesheet">
    <link href="{{asset("/board/libs/selectize/css/selectize.bootstrap3.css")}}" rel="stylesheet">

    <link href="{{asset("/board/libs/bootstrap-select/css/bootstrap-select.min.css")}}" rel="stylesheet">

    <link href="{{asset("/board/libs/flagstrap/dist/css/flags.css")}}" rel="stylesheet">

@endsection

@section('jstop')

@endsection

@section('jsbottom')

    <script src="{{asset("/board/libs/selectize/js/standalone/selectize.min.js")}}"></script>

    <script src="{{asset("/board/libs/bootstrap-select/js/bootstrap-select.min.js")}}"></script>

    <script src="{{asset("/board/libs/flagstrap/dist/js/jquery.flagstrap.js")}}"></script>

    <script src="{{asset("/board/js/settings/select_theme.js")}}"></script>

    <script src="{{asset("/board/js/settings/select_language.js")}}"></script>

    <script src="{{asset("/board/js/settings/show_contact_web.js")}}"></script>

@endsection

@section('content')
    <div class="container-fluid half-padding">
        <div class="template template__blank">
            <div class="row">

                <div class="col-md-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dit zijn uw instellingen</h3>
                        </div>
                        <div class="panel-body">
                            <p>This is a blank page.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    {{-- SHOW WEB SETTINGS --}}
                    @include('board.member.includes.settings_show_web')

                </div>

                <div class="col-md-4">

                    {{-- SHOW DASHBOARD SETTINGS --}}
                    @include('board.member.includes.settings_dashboard')

                </div>

            </div>
        </div>
    </div>

@endsection
