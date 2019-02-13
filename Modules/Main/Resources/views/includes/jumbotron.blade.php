<div class="section-a row">
    <div class="jumbotron">
        <div class="col-sm-8 mx-auto jumbofill">
            <p>
            <h1 class="text-success">
                @lang('main::main/page.title_spotlight')
                <i class="fas fa-sun fa-spin text-warning"></i>
            </h1>
            <h3 class="text-a4dbo">{{$spotlight->title}}</h3>
            <p class="text-a4dbo">
                {!! str_limit($main_latestnews->content, 600) !!}
            </p>
            <p>
                <a class="btn btn-success" href="{{$url = route('main.spotlight.index', ['slug' => $spotlight->slug])}}" role="button">@lang('main::main/page.button_more_info') &raquo;</a>

                {{--<a href="{{$url = route('main.news.post', ['slug' => $spotlight->slug])}}" class="btn btn-success">--}}
                    {{--@lang('news::main/lang.index_button_read_more') &rarr;--}}
                {{--</a>--}}
            </p>
            </p>
        </div>
    </div>
</div>