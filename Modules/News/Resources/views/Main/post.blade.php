<?php
	Carbon\Carbon::setLocale(config('app.locale'))
?>
@extends('layouts.main.main')

@section('title')
    @lang('news::main/lang.post_web_title') {{$news_item->title}}
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/news/css/main.css') }}" rel="stylesheet">

<!-- CSS for use with lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />


<!-- CSS for item rating -->
    @if($news_item->rating)
        <link href="{{ asset('libs/list-based-star-rating-plugin/css/starrating.css') }}" rel="stylesheet">
    @endif

@endsection

@section('jstop')

@endsection

@section('jsbottom')

<!-- JS for use with lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha256-jGAkJO3hvqIDc4nIY1sfh/FPbV+UK+1N+xJJg6zzr7A=" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <script src="{{ asset('libs/bs4-lightbox-gallery/js/lightbox.js') }}"></script>


<!-- JS for item rating -->
    @if($news_item->rating)
        <script src="{{ asset('libs/list-based-star-rating-plugin/js/jquery.starrating.js') }}"></script>

        <script>
            (function( $ ) {
                $('#starRating').starRating({
                    callback: function (value) {
                        alert('You Just Clicked: '+value);
                    }})
            }(jQuery))
        </script>
    @endif

@endsection


@section('content')

    {{--{{dd($news_item->images()->get())}}--}}
    {{--{{$news_item}}--}}

    {{-- Content here--}}

    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8">

                <!-- Title -->
                <h1 class="mt-4">{{$news_item->title}}</h1>
                <!-- Author -->
                <p class="lead">
                    @lang('news::main/lang.post_made_by')
                    {{--<a href="#" class="text-success">Start Bootstrap</a>--}}
                    <a href="{{route('main.news.author', [$news_item->getAuthorSlug($news_item->author_group)])}}" class="text-success">
                        {{$news_item->getAuthorName($news_item->author_group)}}
                    </a>
                </p>

                <!-- Date/Time -->
                <p>@lang('news::main/lang.post_posted_on') {{Carbon\Carbon::parse($news_item->publish_date_start)->format('l d F Y H:i:s')}}</p>


                <hr>
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

                <hr>

                    <!-- Preview Image -->
                @isset($news_item->images()->first()->name)
                    <figure>
                        <img class="img-fluid rounded" src="{{ asset('modules/news/album/'.$news_item->images()->first()->name ) }}" alt="{{ $news_item->images()->first()->description }}" style="width:100%">
                        <figcaption style="padding: 10px 0 10px 10px;">
                                <span class="text-muted">
                                    @lang('news::main/lang.post_photo_courtesy')
                                </span>
                            <i>
                                {{ $news_item->images()->first()->photographer }}
                            </i>
                        </figcaption>
                    </figure>
                <hr>
                @endisset

                    <!-- Post Content -->
                    {!! substr($news_item->content, 0, (strlen($news_item->content)/5)) !!}
                    @isset($news_item->images()->first()->name)
                        @include('news::includes.post_carousel')
                    @endisset
                    {!! substr($news_item->content, (strlen($news_item->content)/5)) !!}
                <hr>

                @if(\Modules\News\Http\Controllers\Main\NewsController::show_on_page('comments'))

                <!-- Comments Form -->
                    @if($news_item->comments_show)
                        @if($news_item->comments)

                            @include('news::includes.post_comment_form')

                        @endif
                    @endif

                    @if($news_item->comments_show)

                        @include('news::includes.post_comment_section')

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

                <!-- Categories Widget -->
                    @if(\Modules\News\Http\Controllers\Main\NewsController::show_on_page('categories'))

                        <!-- Categories Widget -->
                        @include('news::includes.categories')

                    @endif

                    @if(\Modules\News\Http\Controllers\Main\NewsController::show_on_page('tags'))

                        <!-- Categories Widget -->
                        @include('news::includes.tags')

                    @endif

                <!-- Side Widget -->
                    @if(\Modules\News\Http\Controllers\Main\NewsController::show_on_page('ratings'))
                        @if($news_item->rating)

                            @include('news::includes.post_rating')

                        @endif
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

