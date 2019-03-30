@extends('layouts.board.main')

@section('title')
    {{ __('board_member_profile.page_title') }}
@endsection

@section('css')

    <link href="{{asset("/board/css/avatar_upload.css")}}" rel="stylesheet">


@endsection

@section('jstop')

@endsection

@section('jsbottom')

    <script src="{{asset("/board/js/toggle_password.js")}}"></script>

    <script src="{{asset("/board/js/summernote/board_profile_about_me.js")}}"></script>

    <script src="{{asset("/board/js/avatar_upload.js")}}"></script>

    <script src="{{asset("/board/js/datetimepicker/update_boardmember_profile.js")}}"></script>

@endsection

@section('content')

    {{--{{$user}}--}}

    <div class="container-fluid half-padding">
        <div class="row">

            <div class="col-md-6">

                {{-- YOUR PROFILE --}}
                @include('board.member.includes.personal_pofile')

            </div>

            <div class="col-md-3">

                {{--AUTHORISATIONS--}}
                @include('board.member.includes.personal_authorisations')

            </div>

            <div class="col-md-3">

                {{-- QUICKLINKS --}}
                @include('board.member.includes.personal_quicklinks')

                {{-- WORKGROUPS --}}
                @include('board.member.includes.personal_workgroups')

            </div>

        </div>
    </div>

@endsection
