@extends('layouts.board.main')

@section('title')
    Bestuurslid -> Instellingen
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
                            @component('components.whoslogged')
                            @endcomponent

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dashboard instellingen</h3>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Theme :</label>
                                <div class="col-sm-8">
                                    <select class="selectpicker form-control" placeholder="Select">
                                        <option>Light</option>
                                        <option>Dark</option>
                                        <option>Lilac</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Taal :</label>
                                <div class="col-sm-8">
                                    <select class="selectpicker form-control" placeholder="Select">
                                        <option>Nederlands</option>
                                        <option>Engels</option>
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
