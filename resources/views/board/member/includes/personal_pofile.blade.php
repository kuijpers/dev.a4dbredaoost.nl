
    @include('board.member.modals.update_profile')

    @include('board.member.modals.update_password')

    @include('board.member.modals.update_avatar')

    @include('board.member.modals.update_about_me')


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
                @if(empty( $user->profile_img ))
                    <img src="{{asset("/board/css/img/nophoto.png")}}" class="img-fluid" alt="Profiel foto">
                @else
                    <img src="{{asset('storage/'.$user->profile_img)}}" class="img-fluid img-thumbnail" alt="Profiel foto">
                @endif
                <br>
                <br>
                    <button class="btn btn-default" type="button" data-toggle="modal" data-target="#modal_avatar_renew">
                        {{ __('board_member_profile.button_update_your_avatar') }}
                    </button>

            </div>

        </div>

    </div>
    <div class="panel-body">

        <div class="row">

            <div class="col-sm-5">
                <strong>{{ __('board_member_profile.your_name') }}</strong>
            </div>
            <div class="col-sm-7">
                {{ $user->name }}
            </div>

        </div>
        <div class="row">

            <div class="col-sm-5">
                <strong>{{ __('board_member_profile.your_primary_email') }}</strong>
            </div>
            <div class="col-sm-7">
                {{ $user->email }}
            </div>

        </div>
        <div class="row">

            <div class="col-sm-5">
                <strong>{{ __('board_member_profile.your_secondary_email') }}</strong>
            </div>
            <div class="col-sm-7">
                @if(empty($user->secondary_email))
                    {{ __('board_member_profile.your_secondary_email_empty') }}
                @else
                    {{$user->secondary_email}}
                @endif
            </div>

        </div>
        <div class="row">

            <div class="col-sm-5">
                <strong>{{ __('board_member_profile.your_address') }}</strong>
            </div>
            <div class="col-sm-7">
                {{ $user->address }}
                <br>
                {{ $user->postcode }}
                <br>
                {{ $user->city }}
            </div>

        </div>
        <div class="row">

            <div class="col-sm-5">
                <strong>{{ __('board_member_profile.your_phonenumber') }}</strong>
            </div>
            <div class="col-sm-7">
                {{ $user->phone }}
            </div>

        </div>
        <div class="row">

            <div class="col-sm-5">
                <strong>{{ __('board_member_profile.your_dob') }}</strong>
            </div>
            <div class="col-sm-7">
                {{ Carbon\Carbon::parse($user->dob)->format('d-m-Y') }}

            </div>

        </div>
        <div class="row">

            <div class="col-sm-5">
                <strong>{{ __('board_member_profile.your_jobtitle') }}</strong>
            </div>
            <div class="col-sm-7">
                {{ __('board_member_profile.your_jobtitle_'.$user->boardmember_title ) }}
            </div>

        </div>
        <div class="row">

            <div class="col-sm-5">
                <strong>{{ __('board_member_profile.your_account_created_at') }}</strong>
            </div>
            <div class="col-sm-7">
                {{ $user->created_at->format('d-m-Y H:i') }}
            </div>

        </div>
        <div class="row">

            <div class="col-sm-5 margin-sm">
                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#modal_update_profile">
                    {{ __('board_member_profile.button_update_your_profile') }}
                </button>
            </div>

        </div>

        <div class="row">

            <div class="col-sm-5 margin-sm">
                <button class="btn btn-default" type="button" data-toggle="modal" data-target="#modal_password_reset">
                    {{ __('board_member_profile.button_update_your_password') }}
                </button>
            </div>

        </div>

        <hr>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">About me</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-12">
                        {!! $user->about_me !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 margin-sm">
                        <button class="btn btn-default" type="button" data-toggle="modal" data-target="#modal_about_me">
                            Update about me
                        </button>
                    </div>
                </div>


            </div>

        </div>

    </div>
</div>