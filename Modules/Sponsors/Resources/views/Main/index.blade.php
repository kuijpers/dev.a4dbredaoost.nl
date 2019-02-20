@extends('layouts.main.main')

@section('title')
    @lang('sponsors::main/lang.index_web_title')
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/sponsors/css/main.css') }}" rel="stylesheet">
@endsection

@section('jstop')

@endsection

@section('jsbottom')

@endsection


@section('content')

    {{--{{dd($sponsors)}}--}}

    {{--{{$sponsor_spotlight}}--}}


    {{-- Content here--}}
    <div class="section-a row">

            @include('sponsors::Includes.Main.information')

        <div class="col-md-8 offset-md-2 my-3">
            <div class="col-md-12 border-bottom">
                <h1>@lang('sponsors::main/lang.index_our_sponsors')</h1>
            </div>
        </div>
        <div class="col-md-12 my-2">

            @if($sponsor_spotlight)
                @include('sponsors::Includes.Main.spotlight')
            @endif



            {{--@foreach($sponsors as $sponsor)--}}
                {{--<p>{{$sponsor}}</p>--}}
                {{--<p>{{$sponsor->with_package()}}</p>--}}
                {{--<p>{{$sponsor->with_link()}}</p>--}}
                {{--<p>{{$sponsor->with_image()}}</p>--}}
                {{--<hr>--}}
            {{--@endforeach--}}

            @if(\Modules\Sponsors\Http\Controllers\Main\SponsorsController::select_template('set-theme', '1'))

                @include('sponsors::Includes.Main.even_columns')

            @endif

            @if(\Modules\Sponsors\Http\Controllers\Main\SponsorsController::select_template('set-theme', '2'))

                @include('sponsors::Includes.Main.masonry')

            @endif

            @if(\Modules\Sponsors\Http\Controllers\Main\SponsorsController::select_template('set-theme', '3'))

                @include('sponsors::Includes.Main.blocked')

            @endif


        </div>

    </div>
    {{-- End content--}}

@endsection

