<div class="section-c row info-block bg-success pt-5">

    <div class="col-md-12">
        <div class="card-deck">

            <div class="card">
                <h4 class="card-header bg-success text-white">@lang('main::main/page.title_latest_news')</h4>
                <div class="card-body">
                    @isset($main_latestnews)
                    <h5 class="card-title text-success">{{$main_latestnews->title}}</h5>
                    <p class="text-muted text-success">
                        <small>
                            {{Carbon\Carbon::parse($main_latestnews->publish_date_start)->format('d-m-Y H:i:s')}}
                        </small>
                    </p>
                    <p class="card-text text-a4dbo">
                        {!! str_limit($main_latestnews->content, 500) !!}
                    </p>

                    @else
                        <h5 class="card-title text-success">
                            @lang('main::main/page.message_no_news_data')
                        </h5>
                    @endisset
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="{{$url = route('main.news.post', ['slug' => $main_latestnews->slug])}}" class="btn btn-success">@lang('main::main/page.button_news_message')</a>
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