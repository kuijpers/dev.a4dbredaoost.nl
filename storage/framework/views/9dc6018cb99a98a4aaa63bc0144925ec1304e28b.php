<?php
	Carbon\Carbon::setLocale(config('app.locale'))
?>


<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('main::main/lang.spotlight_web_title'); ?> <?php echo e($spotlight->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('modules/main/css/main.css')); ?>" rel="stylesheet">

<!-- CSS for use with lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" integrity="sha256-HAaDW5o2+LelybUhfuk0Zh2Vdk8Y2W2UeKmbaXhalfA=" crossorigin="anonymous" />



<?php $__env->stopSection(); ?>

<?php $__env->startSection('jstop'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsbottom'); ?>

<!-- JS for use with lightbox -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js" integrity="sha256-jGAkJO3hvqIDc4nIY1sfh/FPbV+UK+1N+xJJg6zzr7A=" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <script src="<?php echo e(asset('libs/bs4-lightbox-gallery/js/lightbox.js')); ?>"></script>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    
    

    

    <div class="container">

        <div class="row">

            <!-- Post Content Column -->
            <div class="col-lg-8 offset-lg-2">

                <!-- Title -->
                <h1 class="mt-4"><?php echo e($spotlight->title); ?></h1>

                <!-- Author -->
                <p class="lead">
                    <?php echo app('translator')->getFromJson('main::main/lang.spotlight_made_by'); ?>
                    
                    <a href="<?php echo e($spotlight->author_group); ?>/<?php echo e($spotlight->getAuthorSlug($spotlight->author_group)); ?>" class="text-success">
                        <?php echo e($spotlight->getAuthorName($spotlight->author_group)); ?>

                    </a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><?php echo app('translator')->getFromJson('main::main/lang.spotlight_posted_on'); ?> <?php echo e(Carbon\Carbon::parse($spotlight->publish_date_start)->format('l d F Y H:i:s')); ?></p>

                <hr>

                    <!-- Preview Image -->
                <?php if(isset($spotlight->images()->first()->name)): ?>
                    <figure>
                        <img class="img-fluid rounded" src="<?php echo e(asset('modules/main/album/'.$spotlight->images()->first()->name )); ?>" alt="<?php echo e($spotlight->images()->first()->description); ?>" style="width:100%">
                        <figcaption style="padding: 10px 0 10px 10px;">
                                <span class="text-muted">
                                    <?php echo app('translator')->getFromJson('main::main/lang.spotlight_photo_courtesy'); ?>
                                </span>
                            <i>
                                <?php echo e($spotlight->images()->first()->photographer); ?>

                            </i>
                        </figcaption>
                    </figure>

                    <hr>
                <?php endif; ?>

                    <!-- Post Content -->
                    <?php echo substr($spotlight->content, 0, (strlen($spotlight->content)/5)); ?>

                <?php if(isset($spotlight->images()->first()->name)): ?>
                    <?php echo $__env->make('main::includes.spotlight_carousel', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endif; ?>
                    <?php echo substr($spotlight->content, (strlen($spotlight->content)/5)); ?>

                <hr>


            </div>


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>