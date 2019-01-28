<div class="section-d row">

    <div class="col-md-4">
        <h4 class="text-success">@lang('main::main/page.title_volunteers')</h4>
        <p class="text-a4dbo">
            @if($ty_volunteers->isEmpty())
                @lang('main::main/page.message_no_data')
            @else

                @foreach($ty_volunteers as $ty_volunteer)
                    {{$ty_volunteer->title}}
                    {!! $ty_volunteer->content !!}
                @endforeach

            @endif
        </p>
    </div>

    <div class="col-md-4">
        <h4 class="text-success">@lang('main::main/page.title_participants')</h4>
        <p class="text-a4dbo">
            @if($ty_participants->isEmpty())
                @lang('main::main/page.message_no_data')
            @else

                @foreach($ty_participants as $ty_participant)
                    {{$ty_participant->title}}
                    {!! $ty_participant->content !!}
                @endforeach

            @endif
        </p>
    </div>

    <div class="col-md-4">
        <h4 class="text-success">@lang('main::main/page.title_sponsors')</h4>
        <p class="text-a4dbo">
            @if($ty_sponsors->isEmpty())
                @lang('main::main/page.message_no_data')
            @else

                @foreach($ty_sponsors as $ty_sponsor)
                    {{$ty_sponsor->title}}
                    {!! $ty_sponsor->content !!}
                @endforeach

            @endif
        </p>
    </div>

</div>