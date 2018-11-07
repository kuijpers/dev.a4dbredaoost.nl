<?php
	use Carbon\Carbon;
	?>

@extends('layouts.board.main')

@section('title')
    index
@endsection

@section('css')
    <link href="{{asset("/board/libs/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css")}}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

    <script src="{{asset("/modules/board/js/selectall_approved.js")}}"></script>

{{--Modal JS scripts--}}
    <script src="{{asset("/modules/board/js/modals/delete_article.js")}}"></script>

    <script src="{{asset("/modules/board/js/modals/author_drafts.js")}}"></script>

    <script src="{{asset("/modules/board/js/modals/personal_drafts.js")}}"></script>

    <script src="{{asset("/modules/board/js/modals/author_approved.js")}}"></script>



@endsection

@section('content')
    {{--{{dd( $author_approved )}}--}}
    <div class="row">
        <div class="col-md-12 text-right">
            <div class="pull-right">
                <button id="refresh_page" class="btn btn-default">
                    <i class="fa fa-refresh" aria-hidden="true"></i>
                    &nbsp;Refresh
                </button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Instellingen</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            Informatie op de pagina : &nbsp;
                            <input class="bs-switch" type="checkbox" checked="checked" data-size="mini" data-on-color="success" data-off-color="danger">
                        </div>
                        <div class="col-md-3">
                            Titel zichtbaar : &nbsp;
                            <input class="bs-switch" type="checkbox" checked="checked" data-size="mini" data-on-color="success" data-off-color="danger">
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Het "Wist u dat ?" Informatie gedeelte</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-tabs" role="tablist">

                        {{-- Call for personal drafts --}}
                        <li class="active" role="presentation">
                            <a href="#draft" aria-controls="draft" role="tab" data-toggle="tab">
                                Concept &nbsp;
                                @if($personal_drafts->count()==0)
                                    <span class="label label-default">{{$personal_drafts->count()}}</span>
                                @else
                                    <span class="label label-primary">{{$personal_drafts->count()}}</span>
                                @endif
                            </a>
                        </li>

                        {{-- Call for writings that are still in the hands of the authors --}}
                        <li role="presentation">
                            <a href="#author" aria-controls="author" role="tab" data-toggle="tab">
                                Auteur &nbsp;
                                @if($author_drafts->count()==0)
                                    <span class="label label-default">{{$author_drafts->count()}}</span>
                                @else
                                    <span class="label label-primary">{{$author_drafts->count()}}</span>
                                @endif
                            </a>
                        </li>

                        {{-- Call for writings that are ready to be editted --}}
                        <li role="presentation">
                            <a href="#editor" aria-controls="editor" role="tab" data-toggle="tab">
                                Editor &nbsp;
                                @if($author_approved->count()==0)
                                    <span class="label label-default">{{$author_approved->count()}}</span>
                                @else
                                    <span class="label label-primary">{{$author_approved->count()}}</span>
                                @endif
                            </a>
                        </li>

                        {{-- Call for writings that will need approval for publishing --}}
                        <li role="presentation">
                            <a href="#redacteur" aria-controls="redacteur" role="tab" data-toggle="tab">
                                Redacteur &nbsp; &nbsp;
                                @if($editor_approved->count()==0)
                                    <span class="label label-default">{{$editor_approved->count()}}</span>
                                @else
                                    <span class="label label-primary">{{$editor_approved->count()}}</span>
                                @endif
                            </a>
                        </li>

                        {{-- These writings are now published on the website --}}
                        <li role="presentation">
                            <a href="#gepubliceerd" aria-controls="gepubliceerd" role="tab" data-toggle="tab">
                                Gepubliceerd  &nbsp; &nbsp;
                                @if($publisher_approved->count()==0)
                                    <span class="label label-default">{{$publisher_approved->count()}}</span>
                                @else
                                    <span class="label label-primary">{{$publisher_approved->count()}}</span>
                                @endif
                            </a>
                        </li>

                        {{-- These are the writings that are archived. A SuperUser is able to remove them completely from DB --}}
                        <li role="presentation">
                            <a href="#archief" aria-controls="archief" role="tab" data-toggle="tab">
                                Archief &nbsp;
                                @if($archived->count()==0)
                                    <span class="label label-default">{{$archived->count()}}</span>
                                @else
                                    <span class="label label-primary">{{$archived->count()}}</span>
                                @endif
                            </a>
                        </li>

                        {{-- Add new writings for the website. After save they will automatically be put in draft --}}
                        <li role="presentation">
                            <a href="#new" aria-controls="new" role="tab" data-toggle="tab">
                                Nieuw &nbsp; <i class="fa fa-plus"></i>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">

                        @include('didyouknow::board.information.tabs.draft')

                        @include('didyouknow::board.information.tabs.author')

                        @include('didyouknow::board.information.tabs.editor')

                        @include('didyouknow::board.information.tabs.publisher')

                        @include('didyouknow::board.information.tabs.published')

                        @include('didyouknow::board.information.tabs.archive')

                        @include('didyouknow::board.information.tabs.new')

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
