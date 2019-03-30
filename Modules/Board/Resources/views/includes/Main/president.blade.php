<div class="col-md-4 offset-md-2">
    <div class="card mt-4">
        <h5 class="card-header text-center text-white bg-success">
            @lang('board::main/lang.president')
        </h5>

        @if($board_president->show_img)
            <img class="card-img-top img-thumbnail mx-auto mt-4 d-block"
                 src="
                @if($board_president->profile_img){{ asset('storage/'.$board_president->profile_img) }}" alt="{{ $board_president->name }}">
                @else{{ asset('img/no-image.png') }}" alt="@lang('board::main/lang.error_no_image')">
                @endif
        @else
            <img class="card-img-top img-thumbnail mx-auto mt-4 d-block" src="{{ asset('img/no-image.png') }}" alt="{{ $board_president->name }}">
        @endif


        <div class="card-body">
            <p class="card-text">
            <div class="col-md-12">
                <h5>
                    {{ $board_president->name }}
                </h5>

                @if($board_president->show_dob)
                    <div class="text-muted">
                        {{ $board_president->dob }}
                    </div>
                @endif

                @if($board_president->show_email)
                    <div class="mt-2">
                        {{ $board_president->email }}
                    </div>
                @endif

            </div>

            @if($board_president->show_address || $board_president->show_phone)
            <div class="col-md-12 mt-3">

                <table class="table table-sm table-borderless">
                    @if($board_president->show_address)
                    <tr>
                        <td>
                            {{ $board_president->address }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            {{ $board_president->postcode }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            {{ $board_president->city }}
                        </td>
                    </tr>

                    <tr>
                        <td>
                            {{ $board_president->country }}
                        </td>
                    </tr>
                    @endif

                    @if($board_president->show_phone)
                    <tr>
                        <td>
                            {{ $board_president->phone }}
                        </td>
                    </tr>
                    @endif
                </table>

            </div>
            @endif

            @if($board_president->show_about_me)
                <div class="mt-3 pb-3">
                    <h6> @lang('board::main/lang.about_me') </h6>
                    {!! $board_president->about_me !!}
                </div>
            @endif

            @if($board_president->show_wallet)
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