@extends('layouts.main.main')

@section('title')
    @lang('organisation::main/lang.index_web_title')
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/organisation/css/main.css') }}" rel="stylesheet">

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

    {{--{{$items}}--}}

    {{-- Content here--}}
    <div class="section-a section-a row">

        <div class="col-md-8 offset-md-2 border-bottom">
            <h1>De organisatie</h1>
        </div>

        <div class="col-md-8 offset-md-2 my-5">

            @foreach($items as $item)

                <h1 class="mt-4">{{$item->title}}</h1>


                <hr>

                <!-- Preview Image -->
                @isset($item->images()->first()->name)
                    <figure>
                        <img class="img-fluid rounded" src="{{ asset('modules/main/album/'.$item->images()->first()->name ) }}" alt="{{ $item->images()->first()->description }}" style="width:100%">
                        <figcaption style="padding: 10px 0 10px 10px;">
                                <span class="text-muted">
                                    @lang('main::main/lang.spotlight_photo_courtesy')
                                </span>
                            <i>
                                {{ $item->images()->first()->photographer }}
                            </i>
                        </figcaption>
                    </figure>

                    <hr>
                @endisset

            <!-- Post Content -->
                {!! substr($item->content, 0, (strlen($item->content)/5)) !!}
                @isset($item->images()->first()->name)
                    @include('main::includes.spotlight_carousel')
                @endisset
                {!! substr($item->content, (strlen($item->content)/5)) !!}
                {{--<hr>--}}

            @endforeach

        </div>
    </div>
    {{-- End content--}}

@endsection

