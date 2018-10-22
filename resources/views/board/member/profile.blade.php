@extends('layouts.board.main')

@section('title')
    {{ __('board_member_profile.page_title') }}
@endsection

@section('css')

@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection

@section('content')

    <div class="container-fluid half-padding">
        <div class="row">

            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ __('board_member_profile.your_profile') }}</h3>
                    </div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-sm-6">
                                {{ __('board_member_profile.your_profile_picture') }}
                            </div>
                            <div class="col-sm-6">
                                @if(empty( Auth::user()->profile_img ))
                                <img src="{{asset("/board/css/img/nophoto.png")}}" class="img-fluid" alt="Profiel foto">
                                @else
                                    <img src="{{asset("/board/css/img/Auth::user()->profile_img")}}" class="img-fluid" alt="Profiel foto">
                                @endif
                            </div>

                        </div>

                    </div>
                    <div class="panel-body">

                        <div class="row">

                            <div class="col-sm-6">
                                {{ __('board_member_profile.your_user_id') }}
                            </div>
                            <div class="col-sm-6">
                                {{ Auth::user()->id }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                {{ __('board_member_profile.your_name') }}
                            </div>
                            <div class="col-sm-6">
                                {{ Auth::user()->name }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                {{ __('board_member_profile.your_primary_email') }}
                            </div>
                            <div class="col-sm-6">
                                {{ Auth::user()->email }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                {{ __('board_member_profile.your_secondary_email') }}
                            </div>
                            <div class="col-sm-6">
                                @if(empty(Auth::user()->secondary_email))
                                    {{ __('board_member_profile.your_secondary_email_empty') }}
                                @else
                                    {{Auth::user()->secondary_email}}
                                @endif
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                {{ __('board_member_profile.your_address') }}
                            </div>
                            <div class="col-sm-6">
                                {{ Auth::user()->address }}
                                <br>
                                {{ Auth::user()->postcode }}
                                <br>
                                {{ Auth::user()->city }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                {{ __('board_member_profile.your_phonenumber') }}
                            </div>
                            <div class="col-sm-6">
                                {{ Auth::user()->phone }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                {{ __('board_member_profile.your_dob') }}
                            </div>
                            <div class="col-sm-6">
                                {{ Carbon\Carbon::parse(Auth::user()->dob)->format('d-m-Y') }}

                            </div>

                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                {{ __('board_member_profile.your_jobtitle') }}
                            </div>
                            <div class="col-sm-6">
                                {{ __('board_member_profile.your_jobtitle_'.Auth::user()->boardmember_title ) }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                {{ __('board_member_profile.your_account_created_at') }}
                            </div>
                            <div class="col-sm-6">
                                {{ Auth::user()->created_at->format('d-m-Y H:i') }}
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-sm-6">
                                <button class="btn btn-default" type="button">{{ __('board_member_profile.button_update_your_profile') }}</button>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{ __('board_member_profile.your_workgroups') }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">

                            {{--@if(empty(Auth::user()->workgroups))--}}

                                {{ __('board_member_profile.your_workgroups_empty') }}

                            {{--@else--}}
                            <ul>
                                <li>
                                    Social Media
                                </li>
                                <li>
                                    AVG
                                </li>
                                <li>
                                    Routes
                                </li>
                                <li>
                                    Werkvoorbereiding
                                </li>
                            </ul>

                            {{--@endif--}}
                        </div>

                    </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{ __('board_member_profile.your_authorizations_website') }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">

                            {{--@if(empty(Auth::user()->website))--}}

                                {{ __('board_member_profile.your_authorizations_website_empty') }}

                            {{--@else--}}
                            <ul>
                                <li>
                                    Auteur
                                </li>
                                <li>
                                    Editor
                                </li>
                                <li>
                                    Redacteur
                                </li>
                                <li>
                                    Controller
                                </li>
                                <li>
                                    Super User
                                </li>
                            </ul>
                            {{--@endif--}}
                        </div>

                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{ __('board_member_profile.your_authorizations_volunteers') }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">

                            {{--@if(empty(Auth::user()->volunteers))--}}

                                {{ __('board_member_profile.your_authorizations_volunteers_empty') }}

                            {{--@else--}}
                            <ul>
                                <li>
                                    Auteur
                                </li>
                                <li>
                                    Editor
                                </li>
                                <li>
                                    Redacteur
                                </li>
                                <li>
                                    Controller
                                </li>
                                <li>
                                    Super User
                                </li>
                            </ul>
                            {{--@endif--}}
                        </div>

                    </div>
                </div>

                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{ __('board_member_profile.your_authorizations_board') }}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">

                            {{--@if(empty(Auth::user()->board))--}}

                                {{ __('board_member_profile.your_authorizations_board_empty') }}

                            {{--@else--}}
                            <ul>
                                <li>
                                    Auteur
                                </li>
                                <li>
                                    Editor
                                </li>
                                <li>
                                    Redacteur
                                </li>
                                <li>
                                    Controller
                                </li>
                                <li>
                                    Super User
                                </li>
                            </ul>
                            {{--@endif--}}
                        </div>

                    </div>
                </div>


            </div>

            <div class="col-md-3">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            {{ __('board_member_profile.your_quicklinks') }}
                        </h3>
                    </div>
                    <div class="panel-body">

                        {{--@if(empty(Auth::user()->quicklinks))--}}

                            <p>
                                {{ __('board_member_profile.your_quicklinks_empty') }}
                            </p>
                       {{--@else--}}
                        <p>
                            {{ __('board_member_profile.your_quicklinks_comment') }}
                        </p>

                        <p>
                            <table class="table table-striped table-hover" cellspacing="0" width="100%">
                                <tbody>
                                    <tr>
                                        <td><a href="#">W: Tijdlijn</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">W: Sponsors</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">W: Nieuws</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">V: Vrijwilligers</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">V: Toekenning</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">B: Deelnemers</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">B: Vrijwillligers</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">B: Leden</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">B: Werkgroep Social Media</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="#">B: Overzicht werkgroepen</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            {{--@endif--}}
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
