@extends('layouts.board.main')

@section('title')

    @lang('sponsors::board/general.page_title')

@endsection

@section('css')

    <!-- Custom styles for this template -->
    <link href="{{ Module::asset("sponsors:libs/dkw-inputfile/css/main.css") }}" rel="stylesheet">

    <link href="{{ Module::asset("sponsors:libs/bootstrap-select/css/bootstrap-select.min.css") }}" rel="stylesheet">

@endsection

@section('jstop')

@endsection

@section('jsbottom')

    <script src="{{ Module::asset("sponsors:js/helpers.js") }}"></script>

    <script src="{{ Module::asset("sponsors:libs/dkw-inputfile/js/filehandle.js") }}"></script>
    <script src="{{ Module::asset("sponsors:js/filehandle.js") }}"></script>

    <script src="{{ Module::asset("sponsors:libs/dkw-activetab/js/activetab.js") }}"></script>

    <script src="{{ Module::asset("sponsors:libs/bootstrap-select/js/bootstrap-select.min.js") }}"></script>



    {{-- Include all JS files related to this page --}}
    @include('sponsors::Board.includes.sponsors_modals_js')

    @include('sponsors::Board.includes.sponsor_ajaxCalls')



@endsection

@section('content')

    {{--{{$drafts}}--}}


    {{-- Required for use with dkw-activetab libarary --}}
    <div id="dkw-activetab" class="@lang('sponsors::board/general.page_id')main" style="display: none;"></div>

    {{--Including all modals--}}
    @include('sponsors::Board.includes.sponsor_modals')

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

    @if(!$rpc->CanAccessAs([
                                'webmaster' ,
                                'admin' ,
                                'author' ,
                                'editor' ,
                                'publisher',
                                'treasurer'
                                ]))
        <div class="alert alert-danger alert-dismissible text-center" role="alert">
            @lang('sponsors::board/notifications.no_permission_to_access')
        </div>
    @endif




    @if($rpc->CanAccessAs([
                        'webmaster' ,
                        'admin' ,
                        'author' ,
                        'editor' ,
                        'publisher',
                        'treasurer'
                        ]))
        <div class="row">

            <div class="col-md-12">

                @if($rpc->CanAccessAs(['webmaster' , 'admin']))
                    {{--@include('sponsors::Board.includes.information_settings')--}}
                @endif

                <div class="panel panel-info">

                    <div class="panel-heading">
                        <h3 class="panel-title">
                            @lang('sponsors::board/general.tab_title_sponsors')
                        </h3>
                    </div>

                    <div class="panel-body">

                        <ul class="nav nav-tabs" role="tablist">

                            {{-- Call for personal drafts --}}
                            @if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author']))
                                <li role="presentation">
                                    <a href="#draft" aria-controls="draft" role="tab" data-toggle="tab">
                                        @lang('sponsors::board/tabs.tab_nav_concept')
                                        @if($personal_drafts->count()==0)
                                            <span class="label label-default">
                                                {{$personal_drafts->count()}}
                                            </span>
                                        @else
                                            <span class="label label-primary">
                                                {{$personal_drafts->count()}}
                                            </span>
                                        @endif
                                    </a>
                                </li>
                            @endif

                            {{-- Call for writings that are still in the hands of the authors --}}
                            @if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
                                <li role="presentation">
                                    <a href="#author" aria-controls="author" role="tab" data-toggle="tab">
                                        @lang('sponsors::board/tabs.tab_nav_author')&nbsp;
                                        @if($author_drafts->count()==0)
                                            <span class="label label-default">
                                                {{$author_drafts->count()}}
                                            </span>
                                        @else
                                            <span class="label label-primary">
                                                {{$author_drafts->count()}}
                                            </span>
                                        @endif
                                    </a>
                                </li>
                            @endif

                            {{-- Hier moet de editor komen --}}
                            {{-- Call for writings that are ready to be editted --}}
                            @if($rpc->CanAccessAs(['webmaster' , 'admin' , 'editor']))
                                <li role="presentation">
                                    <a href="#editor" aria-controls="editor" role="tab" data-toggle="tab">
                                        @lang('sponsors::board/tabs.tab_nav_editor') &nbsp;
                                        @if($author_approved->count()==0)
                                            <span class="label label-default">
                                                {{$author_approved->count()}}
                                            </span>
                                        @else
                                            <span class="label label-primary">
                                                {{$author_approved->count()}}
                                            </span>
                                        @endif
                                    </a>
                                </li>
                            @endif

                            {{-- Call for writings that need payment before publishing --}}
                            @if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher' , 'treasurer']))
                                <li role="presentation">
                                    <a href="#treasurer" aria-controls="penningmeester" role="tab" data-toggle="tab">
                                        @lang('sponsors::board/tabs.tab_nav_treasurer')  &nbsp; &nbsp;
                                        @if($unpaid_invoices->count()==0)
                                            <span class="label label-default">
                                                {{$unpaid_invoices->count()}}
                                            </span>
                                        @else
                                            <span class="label label-primary">
                                                {{$unpaid_invoices->count()}}
                                            </span>
                                        @endif
                                    </a>
                                </li>
                            @endif

                            {{-- Call for writings that will need approval for publishing --}}
                            @if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
                                <li role="presentation">
                                    <a href="#publisher" aria-controls="redacteur" role="tab" data-toggle="tab">
                                        @lang('sponsors::board/tabs.tab_nav_publisher')  &nbsp; &nbsp;
                                        @if($editor_approved->count()==0)
                                            <span class="label label-default">
                                                {{$editor_approved->count()}}
                                            </span>
                                        @else
                                            <span class="label label-primary">
                                                {{$editor_approved->count()}}
                                            </span>
                                        @endif
                                    </a>
                                </li>
                            @endif

                            {{-- These writings are now published on the website --}}
                            @if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher']))
                                <li role="presentation">
                                    <a href="#published" aria-controls="gepubliceerd" role="tab" data-toggle="tab">
                                        @lang('sponsors::board/tabs.tab_nav_published')  &nbsp; &nbsp;
                                        @if($publisher_approved->count()==0)
                                            <span class="label label-default">
                                                {{$publisher_approved->count()}}
                                            </span>
                                        @else
                                            <span class="label label-primary">
                                                {{$publisher_approved->count()}}
                                            </span>
                                        @endif
                                    </a>
                                </li>
                            @endif

                            {{-- These are the writings that are archived. --}}
                            @if($rpc->CanAccessAs(['webmaster' , 'admin']))
                                <li role="presentation">
                                    <a href="#archive" aria-controls="archief" role="tab" data-toggle="tab">
                                        @lang('sponsors::board/tabs.tab_nav_archive') &nbsp;
                                        @if($archived->count()==0)
                                            <span class="label label-default">
                                                {{$archived->count()}}
                                            </span>
                                        @else
                                            <span class="label label-primary">
                                                {{$archived->count()}}
                                            </span>
                                        @endif
                                    </a>
                                </li>
                            @endif

                            {{-- These are the writings that are garbage. A webmaster is able to remove them completely from DB --}}
                            @if($rpc->CanAccessAs(['webmaster' , 'admin']))
                                <li role="presentation">
                                    <a href="#garbage" aria-controls="garbage" role="tab" data-toggle="tab">
                                        @lang('sponsors::board/tabs.tab_nav_garbage') &nbsp;
                                        @if($trashed->count()==0)
                                            <span class="label label-default">
                                                {{$trashed->count()}}
                                            </span>
                                        @else
                                            <span class="label label-danger">
                                                {{$trashed->count()}}
                                            </span>
                                        @endif
                                    </a>
                                </li>
                            @endif

                            {{-- Add new writings for the website. After save they will automatically be put in draft --}}
                            @if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author']))
                                <li role="presentation">
                                    <a href="#new" aria-controls="new" role="tab" data-toggle="tab">
                                        @lang('sponsors::board/tabs.tab_nav_new')  &nbsp; <i class="fa fa-plus"></i>
                                    </a>
                                </li>
                            @endif



                        </ul>

                        <div class="tab-content">

                            @include('sponsors::Board.includes.sponsors_tabs')


                        </div>

                    </div>

                </div>

            </div>


        </div>


    @endif

@endsection
