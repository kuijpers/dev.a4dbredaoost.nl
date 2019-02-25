<div class="card my-5">
    <h5 class="card-header bg-success text-white">@lang('news::main/lang.categories_header')</h5>
    <div class="card-body">
        <div class="row">

            @foreach($news_categories as $news_categorie)
                @if(\Modules\News\Entities\Models\Main\NewsCategorie::count_cat_items($news_categorie->id))
                <div class="col-lg-6">
                        <a href="{{$url = route('main.news.categorie', ['slug' => $news_categorie->slug])}}" class="text-success">
                            {{$news_categorie->name}}
                        </a>
                        <span class="badge badge-success float-right">
                                {{\Modules\News\Entities\Models\Main\NewsCategorie::count_cat_items($news_categorie->id)}}
                        </span>

                </div>
                @endif

            @endforeach

        </div>
    </div>
</div>