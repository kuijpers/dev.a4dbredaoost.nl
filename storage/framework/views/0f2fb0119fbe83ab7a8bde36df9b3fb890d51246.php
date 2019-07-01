<?php $__env->startSection('title'); ?>
    <?php echo e(__('board_member_settings.page_title')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

    <link href="<?php echo e(asset("/board/libs/selectize/css/selectize.default.css")); ?>" rel="stylesheet">
    <link href="<?php echo e(asset("/board/libs/selectize/css/selectize.bootstrap3.css")); ?>" rel="stylesheet">

    <link href="<?php echo e(asset("/board/libs/bootstrap-select/css/bootstrap-select.min.css")); ?>" rel="stylesheet">

    <link href="<?php echo e(asset("/board/libs/flagstrap/dist/css/flags.css")); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jstop'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsbottom'); ?>

    <script src="<?php echo e(asset("/board/libs/selectize/js/standalone/selectize.min.js")); ?>"></script>

    <script src="<?php echo e(asset("/board/libs/bootstrap-select/js/bootstrap-select.min.js")); ?>"></script>

    <script src="<?php echo e(asset("/board/libs/flagstrap/dist/js/jquery.flagstrap.js")); ?>"></script>

    <script src="<?php echo e(asset("/board/js/settings/select_theme.js")); ?>"></script>

    <script src="<?php echo e(asset("/board/js/settings/select_language.js")); ?>"></script>

    <script src="<?php echo e(asset("/board/js/settings/show_contact_web.js")); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid half-padding">
        <div class="template template__blank">
            <div class="row">

                <div class="col-md-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Dit zijn uw instellingen</h3>
                        </div>
                        <div class="panel-body">
                            <p>This is a blank page.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    
                    <?php echo $__env->make('board.member.includes.settings_show_web', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                </div>

                <div class="col-md-4">

                    
                    <?php echo $__env->make('board.member.includes.settings_dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.board.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>