<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('sponsors::main/lang.index_web_title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('modules/sponsors/css/main.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jstop'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsbottom'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    

    


    
    <div class="section-a row">

            <?php echo $__env->make('sponsors::Includes.Main.information', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="col-md-8 offset-md-2 my-3">
            <div class="col-md-12 border-bottom">
                <h1><?php echo app('translator')->getFromJson('sponsors::main/lang.index_our_sponsors'); ?></h1>
            </div>
        </div>
        <div class="col-md-12 my-2">

            <?php if($sponsor_spotlight): ?>
                <?php echo $__env->make('sponsors::Includes.Main.spotlight', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>



            
                
                
                
                
                
            

            <?php if(\Modules\Sponsors\Http\Controllers\Main\SponsorsController::select_template('set-theme', '1')): ?>

                <?php echo $__env->make('sponsors::Includes.Main.even_columns', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php endif; ?>

            <?php if(\Modules\Sponsors\Http\Controllers\Main\SponsorsController::select_template('set-theme', '2')): ?>

                <?php echo $__env->make('sponsors::Includes.Main.masonry', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php endif; ?>

            <?php if(\Modules\Sponsors\Http\Controllers\Main\SponsorsController::select_template('set-theme', '3')): ?>

                <?php echo $__env->make('sponsors::Includes.Main.blocked', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <?php endif; ?>


        </div>

    </div>
    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>