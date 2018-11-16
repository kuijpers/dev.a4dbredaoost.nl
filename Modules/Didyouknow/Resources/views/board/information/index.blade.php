<?php
	use Carbon\Carbon;
	?>

@extends('layouts.board.main')

@section('title')
    @lang('didyouknow::board/general.page_title')
@endsection

@section('css')

    <link href="{{asset("/board/libs/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css")}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" integrity="sha256-b5ZKCi55IX+24Jqn638cP/q3Nb2nlx+MH/vMMqrId6k=" crossorigin="anonymous" />

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/css/bootstrap3/bootstrap-switch.css" integrity="sha256-M1GR1abSip/Of//bvHItt7pqBl2FlFuMPpZFS8/r7Eo=" crossorigin="anonymous" />--}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.js" integrity="sha256-hi7kF5DOw6iuvRjNmoGLvriiuIPdZskmVZaYLxbh6BA=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.css" integrity="sha256-o/v/5fOniPHMAww4EAIfRBFV0SeoqksPrY0Yq5x+wSM=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/addon/scroll/simplescrollbars.css" integrity="sha256-4mk7VKvNIWjYnA+rExxtLNsjGaPPI5ql2BRAgmFxQ0E=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/hopscotch.css" integrity="sha256-IHTaOxAkWcZLuddgx5DV37xKGAWgJkGf6UlJGK3KXVQ=" crossorigin="anonymous" />

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/summernote.css" rel="stylesheet">

@endsection

@section('jstop')

@endsection

@section('jsbottom')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js" integrity="sha256-59IZ5dbLyByZgSsRE3Z0TjDuX7e1AiqW5bZ8Bg50dsU=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.js" integrity="sha256-uAmtcHxcK7o0T9gFmupKERz4zIJwFBUkWZFtzqUZ5ag=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.js" integrity="sha256-+VCjCLUkzOOnKtJ0s04D3mcyypeENTag5Xivs9hQVKs=" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.js" integrity="sha256-hi7kF5DOw6iuvRjNmoGLvriiuIPdZskmVZaYLxbh6BA=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/addon/scroll/simplescrollbars.js" integrity="sha256-/7o4/NT46vmK0Bq8q0HwLzU8pOxBkx7dv6y5NStFZnI=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/mode/javascript/javascript.js" integrity="sha256-p189tki3Ka++/7JDp6JJjfEJJTruLMi8KGQonBZx89E=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/mode/htmlmixed/htmlmixed.js" integrity="sha256-G/An1s7Ewxo5OjlLFw2aSsvOgstMxdhjxKIVUzsxw10=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/mode/xml/xml.js" integrity="sha256-YaSCLbgcWefc1ZsXbZnIrK0BQ6lIGEPjBKiMyOL0Y7w=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/mode/css/css.js" integrity="sha256-qR3RkXxRzvuf+vgqjsBZkKW/JUwerjZS9r8sJ+Dc8HM=" crossorigin="anonymous"></script>


    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/summernote.js"></script>

{{--Modal JS scripts--}}

    <script src="{{asset("/modules/didyouknow/js/selectall_approved.js")}}"></script>

    <script src="{{asset("/modules/didyouknow/js/modals/delete_article.js")}}"></script>

    <script src="{{asset("/modules/didyouknow/js/modals/author_drafts.js")}}"></script>

    <script src="{{asset("/modules/didyouknow/js/modals/personal_drafts.js")}}"></script>

    <script src="{{asset("/modules/didyouknow/js/modals/author_approved.js")}}"></script>

    <script src="{{asset("/modules/didyouknow/js/modals/editor_approved.js")}}"></script>

    <script src="{{asset("/modules/didyouknow/js/modals/publisher_approved.js")}}"></script>

    <script src="{{asset("/modules/didyouknow/js/modals/archived.js")}}"></script>

    <script src="{{asset("/modules/didyouknow/js/modals/new_article.js")}}"></script>

    <script src="{{asset("/modules/didyouknow/js/modals/didyouknow_information_modals.js")}}"></script>


@endsection

@section('content')


    {{--{{dd( $author_approved )}}--}}
    <div class="row">
        <div class="col-md-12 text-right">
            <div class="pull-right">
                <button id="refresh_page" class="btn btn-default">
                    <i class="fa fa-refresh" aria-hidden="true"></i>
                    &nbsp;@lang('didyouknow::board/general.button_refresh')
                </button>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        @lang('didyouknow::board/general.tab_settings').
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4">
                            @lang('didyouknow::board/general.tab_settings_info_visible') : &nbsp;
                            <input class="bs-switch" type="checkbox" checked="checked"
                                   data-size="mini"
                                   data-on-color="success"
                                   data-off-color="danger"
                                   data-on-text="@lang('didyouknow::board/buttons.modal_switch_on')"
                                   data-off-text="@lang('didyouknow::board/buttons.modal_switch_off')">
                        </div>
                        <div class="col-md-4">
                            @lang('didyouknow::board/general.tab_settings_title_visible') : &nbsp;
                            <input class="bs-switch" type="checkbox" checked="checked"
                                   data-size="mini"
                                   data-on-color="success"
                                   data-off-color="danger"
                                   data-on-text="@lang('didyouknow::board/buttons.modal_switch_on')"
                                   data-off-text="@lang('didyouknow::board/buttons.modal_switch_off')">
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        @lang('didyouknow::board/general.tab_title')
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-tabs" role="tablist">

                        {{-- Call for personal drafts --}}
                        <li class="active" role="presentation">
                            <a href="#draft" aria-controls="draft" role="tab" data-toggle="tab">
                                @lang('didyouknow::board/tabs.tab_nav_concept')
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
                                @lang('didyouknow::board/tabs.tab_nav_author')&nbsp;
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
                                @lang('didyouknow::board/tabs.tab_nav_editor') &nbsp;
                                @if($author_approved->count()==0)
                                    <span class="label label-default">{{$author_approved->count()}}</span>
                                @else
                                    <span class="label label-primary">{{$author_approved->count()}}</span>
                                @endif
                            </a>
                        </li>

                        {{-- Call for writings that will need approval for publishing --}}
                        <li role="presentation">
                            <a href="#publisher" aria-controls="redacteur" role="tab" data-toggle="tab">
                                @lang('didyouknow::board/tabs.tab_nav_publisher')  &nbsp; &nbsp;
                                @if($editor_approved->count()==0)
                                    <span class="label label-default">{{$editor_approved->count()}}</span>
                                @else
                                    <span class="label label-primary">{{$editor_approved->count()}}</span>
                                @endif
                            </a>
                        </li>

                        {{-- These writings are now published on the website --}}
                        <li role="presentation">
                            <a href="#published" aria-controls="gepubliceerd" role="tab" data-toggle="tab">
                                @lang('didyouknow::board/tabs.tab_nav_published')  &nbsp; &nbsp;
                                @if($publisher_approved->count()==0)
                                    <span class="label label-default">{{$publisher_approved->count()}}</span>
                                @else
                                    <span class="label label-primary">{{$publisher_approved->count()}}</span>
                                @endif
                            </a>
                        </li>

                        {{-- These are the writings that are archived. A SuperUser is able to remove them completely from DB --}}
                        <li role="presentation">
                            <a href="#archive" aria-controls="archief" role="tab" data-toggle="tab">
                                @lang('didyouknow::board/tabs.tab_nav_archive') &nbsp;
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
                                @lang('didyouknow::board/tabs.tab_nav_new')  &nbsp; <i class="fa fa-plus"></i>
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
