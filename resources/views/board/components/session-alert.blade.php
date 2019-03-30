@if(Session::has('success-message'))
    <div class="alert alert-success alert-dismissible tosti" role="alert">
        <i class="fa fa-check" aria-hidden="true"></i>
        <strong> {!! session('success-message') !!}</strong>
    </div>
@endif

@if(\Session::has('danger-message'))
    <div class="alert alert-danger alert-dismissible tosti" role="alert">
        <i class="fa fa-times-circle"></i>
        <em> {!! session('danger-message') !!}</em>
    </div>
@endif

@if(Session::has('warning-message'))
    <div class="alert alert-warning alert-dismissible tosti" role="alert">
        <i class="fa fa-bell" aria-hidden="true"></i>
        <em> {!! session('warning-message') !!}</em>
    </div>
@endif

@if(Session::has('info-message'))
    <div class="alert alert-info alert-dismissible tosti" role="alert">
        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
        <em> {!! session('info-message') !!}</em>
    </div>
@endif


@isset($errors)
    @if($errors->any() )

    <div class="alert alert-danger alert-dismissible tosti" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif
@endisset








@if($errors->has('email'))

    <div id="alert" class="alert alert-danger alert-dismissible tosti" role="alert">
        {{ $errors->first('email') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif

@if($errors->has('password'))

    <div id="alert" class="alert alert-danger alert-dismissible tosti" role="alert">
        {{ $errors->first('password') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif

@if($errors->has('password_confirmation'))

    <div id="alert" class="alert alert-danger alert-dismissible tosti" role="alert">
        {{ $errors->first('password_confirmation') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif

{{--<div class="alert alert-danger tosti" style="display:none">--}}
{{--<p class="text-center">--}}
    {{--<h4>--}}
    {{--<i class="fa fa-exclamation-circle" aria-hidden="true"></i>--}}
    {{--&nbsp; ERROR &nbsp;--}}
    {{--<i class="fa fa-exclamation-circle" aria-hidden="true"></i>--}}
    {{--</h4>--}}
{{--</p>--}}
{{--</div>--}}

{{--<div class="alert alert-success tosti" style="display:none">--}}
{{--<p class="text-center">--}}
    {{--<h4>--}}
    {{--<i class="fa fa-exclamation-circle" aria-hidden="true"></i>--}}
    {{--&nbsp; SUCCESS &nbsp;--}}
    {{--<i class="fa fa-exclamation-circle" aria-hidden="true"></i>--}}
    {{--</h4>--}}
{{--</p>--}}
{{--</div>--}}