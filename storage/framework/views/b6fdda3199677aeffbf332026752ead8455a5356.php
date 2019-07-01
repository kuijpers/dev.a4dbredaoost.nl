<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- provide the csrf token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <link rel="icon" type="image/png" href="<?php echo e(asset('img/logo-a4d.png')); ?>">
    


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" integrity="sha256-fmMNkMcjSw3xcp9iuPnku/ryk9kaWgrEbfJfKmdZ45o=" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
    

    <link href="<?php echo e(asset("/board/css/nav-dropdown.css")); ?>" rel="stylesheet">

    <link href="<?php echo e(asset("/board/libs/jquery.scrollbar/jquery.scrollbar.css")); ?>" rel="stylesheet">

    <link href="<?php echo e(asset("/board/libs/ionrangeslider/css/ion.rangeSlider.css")); ?>" rel="stylesheet">
    <link href="<?php echo e(asset("/board/libs/ionrangeslider/css/ion.rangeSlider.skinFlat.css")); ?>" rel="stylesheet">

    <link href="<?php echo e(asset("/board/libs/bootstrap-switch/css/bootstrap3/bootstrap-switch.min.css")); ?>" rel="stylesheet">

    <link href="<?php echo e(asset("/board/libs/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css")); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" integrity="sha256-b5ZKCi55IX+24Jqn638cP/q3Nb2nlx+MH/vMMqrId6k=" crossorigin="anonymous" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.js" integrity="sha256-hi7kF5DOw6iuvRjNmoGLvriiuIPdZskmVZaYLxbh6BA=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.css" integrity="sha256-o/v/5fOniPHMAww4EAIfRBFV0SeoqksPrY0Yq5x+wSM=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/addon/scroll/simplescrollbars.css" integrity="sha256-4mk7VKvNIWjYnA+rExxtLNsjGaPPI5ql2BRAgmFxQ0E=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/hopscotch.css" integrity="sha256-IHTaOxAkWcZLuddgx5DV37xKGAWgJkGf6UlJGK3KXVQ=" crossorigin="anonymous" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/summernote.css" rel="stylesheet">

    <!-- Start Additional CSS -->
    <?php echo $__env->yieldContent('css'); ?>
    <!-- End Additional CSS -->

    <?php if(isset($settings->boardmembers_theme)): ?>
        <link href="<?php echo e(asset("/board/css/right.".$settings->boardmembers_theme.".css")); ?>" rel="stylesheet">
    <?php else: ?>
        <link href="<?php echo e(asset("/board/css/right.light.css")); ?>" rel="stylesheet">
    <?php endif; ?>

    <link href="<?php echo e(asset("/board/css/alert.css")); ?>" rel="stylesheet">

    <link href="<?php echo e(asset("/board/css/padding-margin_bs3.css")); ?>" rel="stylesheet">

    <!-- Start Additional CSS -->
    <?php echo $__env->yieldContent('jstop'); ?>
    <!-- End Additional CSS -->

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>