<div class="modal fade" id="modal_update_profile">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update your profile</h4>
            </div>
            <form method="post" action="{{route('board.member.profile.update')}}">
                {{ csrf_field() }}
                <div class="modal-body">


                    {{-- Name --}}
                        <div class="row">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="col-sm-5">
                                        <label for="boardmember_name"><strong>{{ __('board_member_profile.your_name') }}</strong></label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input id="boardmember_name" name="name" class="form-control" value="{{ $user->name }}" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                    {{-- Primary email --}}
                        <div class="row">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="col-sm-5">
                                        <label for="boardmember_email"><strong>{{ __('board_member_profile.your_primary_email') }}</strong></label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input id="boardmember_email" name="email" class="form-control" value="{{ $user->email }}" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                    {{-- Secondary email--}}
                        <div class="row">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="col-sm-5">
                                        <label for="boardmember_sec_email"><strong>{{ __('board_member_profile.your_secondary_email') }}</strong></label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input id="boardmember_sec_email" name="secondary_email" class="form-control" value="{{ $user->secondary_email }}" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                    {{-- Address --}}
                        <div class="row">

                            <div class="form-group">
                                <div class="input-group">

                                    <div class="col-sm-12">
                                        <strong>{{ __('board_member_profile.your_address') }}</strong>
                                    </div>
                                    {{-- Address (street)--}}
                                    <div class="col-sm-5">
                                        <label for="boardmember_address">Address:</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input id="boardmember_address" name="address" class="form-control" value="{{ $user->address }}" required>
                                    </div>
                                    {{-- Postcode --}}
                                    <div class="col-sm-5">
                                        <label for="boardmember_postcode">Postcode:</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input id="boardmember_postcode" name="postcode" class="form-control" value="{{ $user->postcode }}" required>
                                    </div>
                                    {{-- City --}}
                                    <div class="col-sm-5">
                                        <label for="boardmember_city">City:</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input id="boardmember_city" name="city" class="form-control" value="{{ $user->city }}" required>
                                    </div>

                                </div>
                            </div>

                        </div>
                    {{-- Phone --}}
                        <div class="row">

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="col-sm-5">
                                        <label for="boardmember_phone"><strong>{{ __('board_member_profile.your_phonenumber') }}</strong></label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input id="boardmember_phone" name="phone" class="form-control" value="{{ $user->phone }}" required>
                                    </div>
                                </div>
                            </div>

                        </div>
                    {{-- DOB --}}
                        <div class="row">

                            <div class="form-group">
                                <div class="col-sm-5">
                                    <label for="boardmember_dob"><strong>{{ __('board_member_profile.your_dob') }}</strong></label>
                                </div>
                                <div class="col-sm-7">
                                    <div class="input-group">
                                        <input id="boardmember_dob" name="dob" class="form-control" value="{{ Carbon\Carbon::parse($user->dob)->format('d-m-Y') }}" required>
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>