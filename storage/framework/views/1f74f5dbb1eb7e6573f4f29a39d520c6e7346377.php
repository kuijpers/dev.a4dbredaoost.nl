<?php $__env->startSection('title'); ?>
    Avond vierdaagse Breda Oost
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('modules/main/css/main.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jstop'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsbottom'); ?>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    

    
    <?php echo $__env->make('main::includes.jumbotron', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('main::includes.announcements', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <?php echo $__env->make('socialmedia::includes.main.social_media_component', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('main::includes.thankyou', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>