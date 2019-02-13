<div class="col-md-4">
    <div class="card mt-4">
        <h5 class="card-header text-center text-white bg-success">
            @lang('board::main/lang.treasurer')
        </h5>

        @if($board_treasurer->show_img)
            <img class="card-img-top img-thumbnail mx-auto mt-4 d-block"
                 src="
                @if($board_treasurer->profile_img){{ asset('modules/board/img/'.$board_treasurer->profile_img) }}" alt="{{ $board_treasurer->name }}">
        @else{{ asset('img/no-image.png') }}" alt="@lang('board::main/lang.error_no_image')">
        @endif
        @else
            <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('img/no-image.png') }}" alt="{{ $board_treasurer->name }}">
        @endif


        <div class="card-body">
            <p class="card-text">
            <div class="col-md-12">
                <h5>
                    {{ $board_treasurer->name }}
                </h5>

                @if($board_treasurer->show_dob)
                    <div class="text-muted">
                        {{ $board_treasurer->dob }}
                    </div>
                @endif

                @if($board_treasurer->show_email)
                    <div class="mt-2">
                        {{ $board_treasurer->email }}
                    </div>
                @endif

            </div>

            @if($board_treasurer->show_address || $board_treasurer->show_phone)
                <div class="col-md-12 mt-3">

                    <table class="table table-sm table-borderless">
                        @if($board_treasurer->show_address)
                            <tr>
                                <td>
                                    {{ $board_treasurer->address }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    {{ $board_treasurer->postcode }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    {{ $board_treasurer->city }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    {{ $board_treasurer->country }}
                                </td>
                            </tr>
                        @endif

                        @if($board_treasurer->show_phone)
                            <tr>
                                <td>
                                    {{ $board_treasurer->phone }}
                                </td>
                            </tr>
                        @endif
                    </table>

                </div>
            @endif

            @if($board_treasurer->show_about_me)
                <div class="mt-3 pb-3">
                    <h6> @lang('board::main/lang.about_me') </h6>
                    {!! $board_treasurer->about_me !!}
                </div>
            @endif

            @if($board_treasurer->show_wallet)
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