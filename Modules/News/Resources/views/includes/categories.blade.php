<div class="card my-5">
    <h5 class="card-header bg-success text-white">@lang('news::main/lang.categories_header')</h5>
    <div class="card-body">
        <div class="row">

            @foreach($news_categories as $news_categorie)

                <div class="col-lg-6">
                    <a href="#{{$news_categorie->slug}}" class="text-success">{{$news_categorie->name}}</a>
                </div>

            @endforeach

        </div>
    </div>
</div>