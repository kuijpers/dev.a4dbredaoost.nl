<div class="col-md-8 offset-md-2 my-5">

        @if(\Modules\Board\Http\Controllers\Main\TheBoardController::show_on_page('set-body'))

                @if(\Modules\Board\Http\Controllers\Main\TheBoardController::show_on_page('set-title'))
                        <h4>{{$board_information->title}}</h4>
                @endif

                {!! $board_information->body !!}

        @endif

</div>