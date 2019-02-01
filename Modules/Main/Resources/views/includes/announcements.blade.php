<div class="section-c row info-block bg-success pt-5">

    <div class="col-md-12">
        <div class="card-deck">

            <div class="card">
                <h4 class="card-header bg-success text-white">@lang('main::main/page.title_latest_news')</h4>
                <div class="card-body">
                    <h5 class="card-title text-success">Nieuwe mensen in de organisatie.</h5>
                    <p class="text-muted text-success"><small>17-10-2018</small></p>
                    <p class="card-text text-a4dbo">
                        Wat gaat er nu gebeuren met de vernieuwing.
                        <br>
                        Sinds kort zitten er aan aantal nieuwe mensen in het bestuur van de organisatie.
                        <br>
                        Wat gaat dit betekenen voor de toekomst van de avondvierdaagse in Breda-oost?
                    </p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="#" class="btn btn-success">@lang('main::main/page.button_news_message')</a>
                </div>
            </div>

            <div class="card">
                <h4 class="card-header bg-success text-white">@lang('main::main/page.title_whats_happening')</h4>
                <div class="card-body">
                    @isset($main_event)
                        <h5 class="card-title text-success">
                            {{$main_event->title}}
                        </h5>
                        <p class="text-muted text-success">
                            <small>
                                {{Carbon\Carbon::parse($main_event->start)->format('d-m-Y H:i')}}
                            </small>
                        </p>
                        <p class="card-text text-a4dbo">
                            {!! $main_event->content !!}
                        </p>

                        @else
                        <h5 class="card-title text-success">
                            @lang('main::main/page.message_no_calendar_data')
                        </h5>
                    @endisset

            </div>
            <div class="card-footer bg-white border-0">
                <a href="{{ route('main.calendar.index') }}" class="btn btn-success">
                    @lang('main::main/page.button_more_dates')
                </a>
            </div>
            </div>

            <div class="card">
                <h4 class="card-header bg-success text-white">
                    @lang('main::main/page.title_didyouknow')
                </h4>
                <div class="card-body">
                    <h5 class="card-title text-success">{!! $main_didyouknow->question !!}</h5>
                    <p class="card-text text-a4dbo">
                        {!! $main_didyouknow->answer !!}
                    </p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="{{ route('main.didyouknow.index') }}" class="btn btn-success">
                        @lang('main::main/page.button_more_didyouknow')
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>