@extends('layouts.board.main')

@section('title')
    {{ __('board_member_settings.page_title') }}
@endsection

@section('css')

    <link href="{{asset("/board/libs/selectize/css/selectize.default.css")}}" rel="stylesheet">
    <link href="{{asset("/board/libs/selectize/css/selectize.bootstrap3.css")}}" rel="stylesheet">

    <link href="{{asset("/board/libs/bootstrap-select/css/bootstrap-select.min.css")}}" rel="stylesheet">

@endsection

@section('jstop')

@endsection

@section('jsbottom')

    <script src="{{asset("/board/libs/selectize/js/standalone/selectize.min.js")}}"></script>

    <script src="{{asset("/board/libs/bootstrap-select/js/bootstrap-select.min.js")}}"></script>

@endsection

@section('content')
    <div class="container-fluid half-padding">
        <div class="template template__blank">
            <div class="row">

                <div class="col-md-8">
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
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                {{ __('board_member_settings.your_dashboard_settings') }}
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">
                                    {{ __('board_member_settings.your_dashboard_settings_theme') }} :
                                </label>
                                <div class="col-sm-8">
                                    <select class="selectpicker form-control" placeholder="Select">
                                        <option value="light" @if($settings->boardmembers_theme == 'light') selected @endif >Light</option>
                                        {{--<option value="light" @if($settings->boardmembers_theme == 'gray') selected @endif >Gray</option>--}}
                                        <option value="dark" @if($settings->boardmembers_theme == 'dark') selected @endif >Dark</option>
                                        <option value="lilac" @if($settings->boardmembers_theme == 'lilac') selected @endif >Lilac</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">
                                    {{ __('board_member_settings.your_dashboard_settings_language') }} :
                                </label>
                                <div class="col-sm-8">
                                    <select class="selectpicker form-control" placeholder="Select">
                                        <option value="nl">Nederlands</option>
                                        <option value="en" selected>English</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                               Vestibulum tincidunt est vitae ultrices accumsan.
                               Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
