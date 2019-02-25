<div class="card my-5">
    <h5 class="card-header bg-success text-white">@lang('news::main/lang.tags_header')</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">

                @foreach($news_tags as $news_tag)
                    <a href="{{$url = route('main.news.tag', ['slug' => $news_tag->slug])}}" class="badge badge-pill badge-success">{{$news_tag->name}}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>