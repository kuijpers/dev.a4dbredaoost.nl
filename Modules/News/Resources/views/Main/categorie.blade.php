<?php
	Carbon\Carbon::setLocale(config('app.locale'))
?>
@extends('layouts.main.main')

@section('title')
    @lang('news::main/lang.index_web_title')
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/news/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection


@section('content')

    {{--{{dd($news_items)}}--}}
    {{--{{$news_cat}}--}}

    {{-- Content here--}}

    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">
                    @lang('news::main/lang.categorie_page_title') : {{$news_cat}}
                </h1>
                <hr>

                @if(!$news_items)
                    @lang('news::main/lang.categorie_no_items')
                @else
                    @if($news_items->isEmpty())
                        @lang('news::main/lang.categorie_no_items')
                    @else
                        @foreach($news_items as $news_item)
                        <!-- Blog Post -->
                        <div class="card mb-4">

                                {{--{{  dd($news_item->images()->first()->name) }}--}}
                                {{--{{  $news_item->images()->first()->name }}--}}
                            @isset($news_item->images()->first()->name)
                            <figure>
                                <img class="card-img-top" src="{{ asset('modules/news/album/'.$news_item->images()->first()->name ) }}" alt="Card image cap" style="width:100%">
                                <figcaption style="padding: 10px 0 10px 10px;">
                                    <span class="text-muted">
                                        @lang('news::main/lang.index_photo_courtesy')
                                    </span>
                                    <i>
                                        {{ $news_item->images()->first()->photographer }}
                                    </i>
                                </figcaption>
                            </figure>
                            @endisset


                            <div class="card-body">
                                <h2 class="card-title">{{$news_item->title}}</h2>
                                <h6 class="text-muted">
                                    @lang('news::main/lang.category'):
                                    <span class="text-muted text-success">
                                        <a href="{{$url = route('main.news.categorie', ['slug' => $news_item->categorie()->first()->slug])}}" class="text-success">
                                            {{$news_item->categorie()->first()->name}}
                                        </a>
                                    </span>
                                </h6>
                                <p>

                                    @foreach($news_item->tags()->get() as $news_tag)
                                        <a href="{{$url = route('main.news.tag', ['slug' => $news_tag->slug])}}" class="badge badge-pill badge-success">{{$news_tag->name}}</a>
                                    @endforeach

                                    {{--{{$news_item->tags()->get()}}--}}
                                </p>
                                <p class="card-text">

                                    {!! str_limit($news_item->content, 600) !!}

                                </p>
                                <a href="{{$url = route('main.news.post', ['slug' => $news_item->slug])}}" class="btn btn-success">
                                    @lang('news::main/lang.index_button_read_more') &rarr;
                                </a>
                            </div>
                            <div class="card-footer text-muted">
                                @lang('news::main/lang.index_posted_on')
                                {{Carbon\Carbon::parse($news_item->publish_date_start)->format('l d F Y H:i:s')}}
                                @lang('news::main/lang.index_made_by')
                                <a href="{{route('main.news.author', [$news_item->getAuthorSlug($news_item->author_group)])}}" class="text-success">
                                    {{$news_item->getAuthorName($news_item->author_group)}}
                                </a>
                            </div>
                        </div>
                        @endforeach


                        <!-- Pagination -->

                        @include('main.includes.custom_pagination', ['paginator' => $news_items])
                    @endif
                @endif

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4 pt-5">

                <!-- Search Widget -->
                @if(\Modules\News\Http\Controllers\Main\NewsController::show_on_page('search'))

                    <!-- Categories Widget -->
                    @include('news::includes.search')

                @endif

                @if(\Modules\News\Http\Controllers\Main\NewsController::show_on_page('categories'))

                    <!-- Categories Widget -->
                    @include('news::includes.categories')

                @endif

                @if(\Modules\News\Http\Controllers\Main\NewsController::show_on_page('tags'))

                    <!-- Categories Widget -->
                    @include('news::includes.tags')

                @endif

                @if(\Modules\News\Http\Controllers\Main\NewsController::show_on_page('archives'))

                    <!-- Categories Widget -->
                    @include('news::includes.archives')

                @endif


            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


    {{-- End content--}}

@endsection

