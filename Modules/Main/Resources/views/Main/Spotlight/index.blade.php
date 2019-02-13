<?php
	Carbon\Carbon::setLocale(config('app.locale'))
?>
@extends('layouts.main.main')

@section('title')
    @lang('main::main/lang.spotlight_web_title') {{$spotlight->title}}
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/main/css/main.css') }}" rel="stylesheet">

<!-- CSS for use with lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />



@endsection

@section('jstop')

@endsection

@section('jsbottom')

<!-- JS for use with lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha256-jGAkJO3hvqIDc4nIY1sfh/FPbV+UK+1N+xJJg6zzr7A=" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <script src="{{ asset('libs/bs4-lightbox-gallery/js/lightbox.js') }}"></script>



@endsection


@section('content')

    {{--{{dd( $spotlight->images() )}}--}}
    {{--{{$spotlight}}--}}

    {{-- Content here--}}

    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8 offset-lg-2">

                <!-- Title -->
                <h1 class="mt-4">{{$spotlight->title}}</h1>

                <!-- Author -->
                <p class="lead">
                    @lang('main::main/lang.spotlight_made_by')
                    {{--<a href="#" class="text-success">Start Bootstrap</a>--}}
                    <a href="{{$spotlight->author_group}}/{{$spotlight->getAuthorSlug($spotlight->author_group)}}" class="text-success">
                        {{$spotlight->getAuthorName($spotlight->author_group)}}
                    </a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p>@lang('main::main/lang.spotlight_posted_on') {{Carbon\Carbon::parse($spotlight->publish_date_start)->format('l d F Y H:i:s')}}</p>

                <hr>

                    <!-- Preview Image -->
                @isset($spotlight->images()->first()->name)
                    <figure>
                        <img class="img-fluid rounded" src="{{ asset('modules/main/album/'.$spotlight->images()->first()->name ) }}" alt="{{ $spotlight->images()->first()->description }}" style="width:100%">
                        <figcaption style="padding: 10px 0 10px 10px;">
                                <span class="text-muted">
                                    @lang('main::main/lang.spotlight_photo_courtesy')
                                </span>
                            <i>
                                {{ $spotlight->images()->first()->photographer }}
                            </i>
                        </figcaption>
                    </figure>

                    <hr>
                @endisset

                    <!-- Post Content -->
                    {!! substr($spotlight->content, 0, (strlen($spotlight->content)/5)) !!}
                @isset($spotlight->images()->first()->name)
                    @include('main::includes.spotlight_carousel')
                @endisset
                    {!! substr($spotlight->content, (strlen($spotlight->content)/5)) !!}
                <hr>


            </div>


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


    {{-- End content--}}

@endsection

