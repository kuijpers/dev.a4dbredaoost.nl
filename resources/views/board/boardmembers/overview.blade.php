@extends('layouts.board.main')

@section('title')

    Dashboard

@endsection

@section('css')

@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection

@section('content')

    <div class="container-fluid half-padding">
        <div class="template template__blank">
{{-- Start row --}}
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Boardmembers overview</h3>
                        </div>
                        <div class="panel-body">

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <td>
                                        Naam
                                    </td>
                                    <td>
                                        Email
                                    </td>
                                    <td>
                                        Functie
                                    </td>
                                    <td>
                                        Roles
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-default">
                                            {{--<i class="fa fa-plus-square" aria-hidden="true"></i>--}}
                                            <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
                                            <strong>Add</strong>
                                        </button>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($boardmembers as $boardmember)
                                    <tr>
                                        <td><a href="#">{{$boardmember->name}}</a></td>
                                        <td>{{$boardmember->email}}</td>
                                        <td>{{$boardmember->boardmember_title}}</td>
                                        <td>
                                            <ul>
                                            @foreach($boardmember->roles as $role)
                                                <li>
                                                    {{$role->slug}}
                                                </li>
                                            @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                {{-- View the data in Modal--}}
                                                <button type="button" class="btn btn-info"
                                                        data-hoover="tooltip"
                                                        title="show"
                                                        {{--data-toggle="modal"--}}
                                                        {{--data-target="#view_author_approved"--}}
                                                        {{--data-info = "{{$author_approve_modal}}"--}}
                                                >
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                                {{-- Edit the data in Modal --}}
                                                <button type="button" class="btn btn-warning"
                                                        data-hoover="tooltip"
                                                        title="Edit"
                                                        {{--data-toggle="modal"--}}
                                                        {{--data-target="#edit_author_approved"--}}
                                                        {{--data-info = "{{$author_approve_modal}}"--}}
                                                >
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                                {{-- Delete/archive the data thru Modal--}}
                                                <button type="button" class="btn btn-danger"
                                                        data-hoover="tooltip"
                                                        title="Delete"
                                                        {{--data-toggle="modal"--}}
                                                        {{--data-target="#delete_article"--}}
                                                        {{--data-info = "{{$author_approve_modal}}"--}}
                                                >
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                            <div class="users-preview datalist-preview">
                                <div class="users-preview__cont">
                                    <div class="users-preview__name" title="Gary Long">Gary Long</div>
                                    <div class="users-preview__data">
                                        <div class="users-preview__photo">
                                            <div></div>
                                        </div>
                                        <div class="users-preview__info">
                                            <div class="users-preview__position" title="Customer">Customer</div>
                                            <div class="users-preview__stat sparkline"><canvas width="106" height="34" style="display: inline-block; width: 106px; height: 34px; vertical-align: top;"></canvas></div>
                                            <div class="users-preview__edit">
                                                <div class="btn-group btn-group-sm">
                                                    <button class="btn btn-danger" type="button">Edit</button>
                                                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Details</a></li>
                                                        <li><a href="#">Disable</a></li>
                                                        <li><a href="#">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="users-preview__props">
                                        <div class="users-preview__prop" title="Location"><i class="fa fa-map-marker"></i><span class="users-preview__location" title="Qianwei">Qianwei</span></div>
                                        <div class="users-preview__prop" title="Contact"><i class="fa fa-envelope"></i><span class="users-preview__contact" title="glong22@spotify.com">glong22@spotify.com</span></div>
                                        <div class="users-preview__prop"><i class="fa fa-calendar"></i><span class="users-preview__date" title="7/12/2015">7/12/2015</span></div>
                                        <div class="users-preview__prop"><i class="fa fa-heartbeat"></i><span class="users-preview__status" title="Active">Active</span></div>
                                    </div>
                                </div>
                            </div>

                </div>
            </div>
{{--End row--}}

{{--Start row--}}
            @if(!$workgroup->isEmpty())
            <div class="row">
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Workgroup overview</h3>
                        </div>
                        <div class="panel-body">

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <td>
                                        Naam
                                    </td>
                                    <td>
                                        Email
                                    </td>
                                    <td>
                                        Functie
                                    </td>
                                    <td>
                                        Roles
                                    </td>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($workgroup as $workgroupmember)
                                    <tr>
                                        <td>{{$workgroupmember->name}}</td>
                                        <td>{{$workgroupmember->email}}</td>
                                        <td>{{$workgroupmember->boardmember_title}}</td>
                                        <td>
                                            <ul>
                                                @foreach($workgroupmember->roles as $role)
                                                    <li>
                                                        {{$role->slug}}
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="btn-group btn-group-xs" role="group">
                                                {{-- View the data in Modal--}}
                                                <button type="button" class="btn btn-info"
                                                        data-hoover="tooltip"
                                                        title="show"
                                                        {{--data-toggle="modal"--}}
                                                        {{--data-target="#view_author_approved"--}}
                                                        {{--data-info = "{{$author_approve_modal}}"--}}
                                                >
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                                {{-- Edit the data in Modal --}}
                                                <button type="button" class="btn btn-warning"
                                                        data-hoover="tooltip"
                                                        title="Edit"
                                                        {{--data-toggle="modal"--}}
                                                        {{--data-target="#edit_author_approved"--}}
                                                        {{--data-info = "{{$author_approve_modal}}"--}}
                                                >
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </button>
                                                {{-- Delete/archive the data thru Modal--}}
                                                <button type="button" class="btn btn-danger"
                                                        data-hoover="tooltip"
                                                        title="Delete"
                                                        {{--data-toggle="modal"--}}
                                                        {{--data-target="#delete_article"--}}
                                                        {{--data-info = "{{$author_approve_modal}}"--}}
                                                >
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
            @endif
{{--End row--}}

        </div>
    </div>

@endsection
