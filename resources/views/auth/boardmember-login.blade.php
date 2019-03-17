<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" integrity="sha256-fmMNkMcjSw3xcp9iuPnku/ryk9kaWgrEbfJfKmdZ45o=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />

    <link href="{{asset("/board/libs/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css")}}" rel="stylesheet">

    <link href="{{asset("/board/css/right.lilac.css")}}" rel="stylesheet">

    <link href="{{asset("/board/libs/codemirror/lib/codemirror.css")}}" rel="stylesheet">
    <link href="{{asset("/board/libs/codemirror/addon/scroll/simplescrollbars.css")}}" rel="stylesheet">
    <link href="{{asset("/board/libs/codemirror/theme/hopscotch.css")}}" rel="stylesheet">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>Login</title>

</head>
<body class="framed">
<div class="wrapper">
    <div class="login">
        <form data-toggle="validator" data-disable="false" role="form" class="login__form" method="post" action="{{ route('board.login.submit') }}">

            {{ csrf_field() }}

            <div class="panel panel-danger">
                <div class="panel-heading">
                    <div class="login__logo"></div>
                </div>
                <div class="panel-body">

                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <input class="form-control" type="email" name="email"  placeholder="E-mail" value="{{ old('email') }}" required autofocus>

                        <div class="help-block with-errors"></div>
                        @if ($errors->has('email'))
                            <div class="help-block with-errors">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        @endif

                    </div>

                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input class="form-control" type="password" placeholder="Wachtwoord" name="password" required>

                        <div class="help-block with-errors"></div>
                        @if ($errors->has('password'))
                            <div class="help-block with-errors">
                                <strong>{{ $errors->first('password') }}</strong>
                            </div>
                        @endif

                    </div>


                    <div class="form-group login__action">
                        <div class="checkbox login__remember">
                            <input id="chb1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="chb1">Onthouden</label>
                        </div>

                        <div class="login__submit">
                            <button class="btn btn-default" type="submit">Sign in</button>
                        </div>
                    </div>


                </div>
            </div>
        </form>

    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha256-U5ZEeKfGNOja007MMD3YBI0A3OSZOQbeG6z2f2Y0hu8=" crossorigin="anonymous"></script>





<script src="{{asset("/board/libs/codemirror/lib/codemirror.js")}}"></script>
<script src="{{asset("/board/libs/codemirror/addon/scroll/simplescrollbars.js")}}"></script>
<script src="{{asset("/board/libs/codemirror/mode/javascript/javascript.js")}}"></script>
<script src="{{asset("/board/libs/codemirror/mode/htmlmixed/htmlmixed.js")}}"></script>
<script src="{{asset("/board/libs/codemirror/mode/xml/xml.js")}}"></script>
<script src="{{asset("/board/libs/codemirror/mode/css/css.js")}}"></script>

<script src="{{asset("/board/libs/bootstrap-validator/validator.min.js")}}"></script>
<script src="{{asset("/board/js/validation.js")}}"></script>



</body>
</html>