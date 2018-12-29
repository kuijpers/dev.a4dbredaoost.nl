<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- provide the csrf token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    {{--<link rel="icon" type="image/png" href="img/favicon.png">--}}
    {{--<link rel="apple-touch-icon-precomposed" href="img/apple-touch-favicon.png">--}}


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" integrity="sha256-fmMNkMcjSw3xcp9iuPnku/ryk9kaWgrEbfJfKmdZ45o=" crossorigin="anonymous" />
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">--}}

    <link href="{{asset("/board/css/nav-dropdown.css")}}" rel="stylesheet">

    <link href="{{asset("/board/libs/jquery.scrollbar/jquery.scrollbar.css")}}" rel="stylesheet">

    <link href="{{asset("/board/libs/ionrangeslider/css/ion.rangeSlider.css")}}" rel="stylesheet">
    <link href="{{asset("/board/libs/ionrangeslider/css/ion.rangeSlider.skinFlat.css")}}" rel="stylesheet">

    <link href="{{asset("/board/libs/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css")}}" rel="stylesheet">

    <!-- Start Additional CSS -->
    @yield('css')
    <!-- End Additional CSS -->

    @if(isset($settings->boardmembers_theme))
        <link href="{{asset("/board/css/right.".$settings->boardmembers_theme.".css")}}" rel="stylesheet">
    @else
        <link href="{{asset("/board/css/right.light.css")}}" rel="stylesheet">
    @endif

    <link href="{{asset("/board/css/alert.css")}}" rel="stylesheet">

    <link href="{{asset("/board/css/padding-margin_bs3.css")}}" rel="stylesheet">

    <!-- Start Additional CSS -->
    @yield('jstop')
    <!-- End Additional CSS -->

    <title>@yield('title')</title>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>