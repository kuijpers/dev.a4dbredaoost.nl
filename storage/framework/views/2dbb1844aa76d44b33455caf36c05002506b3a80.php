<!doctype html>
<html lang="en">
<head>

    <?php echo $__env->make('layouts.main.segments.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('layouts.main.segments.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('layouts.main.segments.jstop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Custom styles for this page -->
    <?php echo $__env->yieldContent('css'); ?>

    <!-- Custom js for this page -->
    <?php echo $__env->yieldContent('jstop'); ?>

    <title><?php echo $__env->yieldContent('title'); ?></title>

</head>




<?php echo $__env->make('main.modals.register', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('main.modals.password_reset', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body>
<?php $__env->startComponent('layouts.main.components.session-alert'); ?>
<?php echo $__env->renderComponent(); ?>
<header>

    <?php echo $__env->make('layouts.main.segments.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</header>

<div class="container-fluid">
    <main role="main">

        <?php echo $__env->yieldContent('content'); ?>

    </main>


    <footer class="footer">

        <?php echo $__env->make('layouts.main.segments.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </footer>
</div>

    <?php echo $__env->make('layouts.main.segments.jsbottom', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Custom js for this page -->
    <?php echo $__env->yieldContent('jsbottom'); ?>

</body>
</html>
