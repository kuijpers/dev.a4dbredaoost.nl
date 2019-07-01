<?php $__env->startSection('title'); ?>

    Dashboard bestuur

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jstop'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsbottom'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid half-padding">
        <div class="template template__blank">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Blank Page</h3>
                        </div>
                        <div class="panel-body">
                            <p>This is a blank page.</p>
                            <?php $__env->startComponent('components.whoslogged'); ?>
                            <?php echo $__env->renderComponent(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.board.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>