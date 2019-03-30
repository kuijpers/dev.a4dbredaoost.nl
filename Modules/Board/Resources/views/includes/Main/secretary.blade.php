<div class="col-md-4 offset-md-2">
    <div class="card mt-4">
        <h5 class="card-header text-center text-white bg-success">
            @lang('board::main/lang.secretary')
        </h5>

        @if($board_secretary->show_img)
            <img class="card-img-top img-thumbnail mx-auto mt-4 d-block"
                 src="
                @if($board_secretary->profile_img){{ asset('storage/'.$board_secretary->profile_img) }}" alt="{{ $board_secretary->name }}">
        @else{{ asset('img/no-image.png') }}" alt="@lang('board::main/lang.error_no_image')">
        @endif
        @else
            <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('img/no-image.png') }}" alt="{{ $board_secretary->name }}">
        @endif


        <div class="card-body">
            <p class="card-text">
            <div class="col-md-12">
                <h5>
                    {{ $board_secretary->name }}
                </h5>

                @if($board_secretary->show_dob)
                    <div class="text-muted">
                        {{ $board_secretary->dob }}
                    </div>
                @endif

                @if($board_secretary->show_email)
                    <div class="mt-2">
                        {{ $board_secretary->email }}
                    </div>
                @endif

            </div>

            @if($board_secretary->show_address || $board_secretary->show_phone)
                <div class="col-md-12 mt-3">

                    <table class="table table-sm table-borderless">
                        @if($board_secretary->show_address)
                            <tr>
                                <td>
                                    {{ $board_secretary->address }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    {{ $board_secretary->postcode }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    {{ $board_secretary->city }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    {{ $board_secretary->country }}
                                </td>
                            </tr>
                        @endif

                        @if($board_secretary->show_phone)
                            <tr>
                                <td>
                                    {{ $board_secretary->phone }}
                                </td>
                            </tr>
                        @endif
                    </table>

                </div>
            @endif

            @if($board_secretary->show_about_me)
                <div class="mt-3 pb-3">
                    <h6> @lang('board::main/lang.about_me') </h6>
                    {!! $board_secretary->about_me !!}
                </div>
            @endif

            @if($board_secretary->show_wallet)
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