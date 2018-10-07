@if(Session::has('primary-message'))
    <div class="alert alert-primary alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-comment"></i>
        <em> {!! session('primary-message') !!}</em>
    </div>
@endif

@if(Session::has('secondary-message'))
    <div class="alert alert-secondary alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-comment-alt"></i>
        <em> {!! session('secondary-message') !!}</em>
    </div>
@endif

@if(Session::has('success-message'))
    <div class="alert alert-success alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-check"></i>
        <em> {!! session('success-message') !!}</em>
    </div>
@endif

@if(Session::has('danger-message'))
    <div class="alert alert-danger alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-times-circle"></i>
        <em> {!! session('danger-message') !!}</em>
    </div>
@endif

@if(Session::has('warning-message'))
    <div class="alert alert-warning alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-bell"></i>
        <em> {!! session('warning-message') !!}</em>
    </div>
@endif

@if(Session::has('info-message'))
<div class="alert alert-info alert-dismissible fade show tosti" role="alert">
    <i class="fas fa-lightbulb"></i>
    <em> {!! session('info-message') !!}</em>
</div>
@endif

@if(Session::has('light-message'))
    <div class="alert alert-light alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-comments"></i>
        <em> {!! session('light-message') !!}</em>
    </div>
@endif

@if(Session::has('dark-message'))
    <div class="alert alert-dark alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-comments"></i>
        <em> {!! session('dark-message') !!}</em>
    </div>
@endif

@if($errors->has('email'))

    <div id="alert" class="alert alert-danger alert-dismissible fade show tosti" role="alert">
        {{ $errors->first('email') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif

@if($errors->has('password'))

    <div id="alert" class="alert alert-danger alert-dismissible fade show tosti" role="alert">
        {{ $errors->first('password') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif

@if($errors->has('password_confirmation'))

    <div id="alert" class="alert alert-danger alert-dismissible fade show tosti" role="alert">
        {{ $errors->first('password_confirmation') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

@endif