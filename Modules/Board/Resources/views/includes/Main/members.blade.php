@foreach($board_members as $board_member)

    <div class="col-md-4">
        <div class="card mt-4">
            <h5 class="card-header text-center text-white bg-success">
                @lang('board::main/lang.boardmember')
            </h5>

            @if($board_member->show_img)
                <img class="card-img-top img-thumbnail mx-auto mt-4 d-block"
                     src="
                @if($board_member->profile_img){{ asset('modules/board/img/'.$board_member->profile_img) }}" alt="{{ $board_member->name }}">
            @else{{ asset('img/no-image.png') }}" alt="@lang('board::main/lang.error_no_image')">
            @endif
            @else
                <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('img/no-image.png') }}" alt="{{ $board_member->name }}">
            @endif


            <div class="card-body">
                <p class="card-text">
                <div class="col-md-12">
                    <h5>
                        {{ $board_member->name }}
                    </h5>

                    @if($board_member->show_dob)
                        <div class="text-muted">
                            {{ $board_member->dob }}
                        </div>
                    @endif

                    @if($board_member->show_email)
                        <div class="mt-2">
                            {{ $board_member->email }}
                        </div>
                    @endif

                </div>

                @if($board_member->show_address || $board_member->show_phone)
                    <div class="col-md-12 mt-3">

                        <table class="table table-sm table-borderless">
                            @if($board_member->show_address)
                                <tr>
                                    <td>
                                        {{ $board_member->address }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        {{ $board_member->postcode }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        {{ $board_member->city }}
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        {{ $board_member->country }}
                                    </td>
                                </tr>
                            @endif

                            @if($board_member->show_phone)
                                <tr>
                                    <td>
                                        {{ $board_member->phone }}
                                    </td>
                                </tr>
                            @endif
                        </table>

                    </div>
                @endif

                @if($board_member->show_about_me)
                    <div class="mt-3 pb-3">
                        <h6> @lang('board::main/lang.about_me') </h6>
                        {!! $board_member->about_me !!}
                    </div>
                @endif

                @if($board_member->show_wallet)
                    <div class="card-header">
                        <strong>Waar mee bezig?</strong>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                @endif

            </div>
        </div>
    </div>

@endforeach
