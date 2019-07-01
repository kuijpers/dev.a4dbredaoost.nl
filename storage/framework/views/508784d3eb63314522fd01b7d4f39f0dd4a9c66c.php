<?php $__env->startSection('title'); ?>

    <?php echo app('translator')->getFromJson('sponsors::board/general.page_title'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

    <!-- Custom styles for this template -->
    <link href="<?php echo e(Module::asset("sponsors:libs/dkw-inputfile/css/main.css")); ?>" rel="stylesheet">

    <link href="<?php echo e(Module::asset("sponsors:libs/bootstrap-select/css/bootstrap-select.min.css")); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jstop'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsbottom'); ?>

    <script src="<?php echo e(Module::asset("sponsors:js/helpers.js")); ?>"></script>

    <script src="<?php echo e(Module::asset("sponsors:libs/dkw-inputfile/js/filehandle.js")); ?>"></script>
    <script src="<?php echo e(Module::asset("sponsors:js/filehandle.js")); ?>"></script>

    <script src="<?php echo e(Module::asset("sponsors:libs/dkw-activetab/js/activetab.js")); ?>"></script>

    <script src="<?php echo e(Module::asset("sponsors:libs/bootstrap-select/js/bootstrap-select.min.js")); ?>"></script>



    
    <?php echo $__env->make('sponsors::Board.includes.sponsors_modals_js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo $__env->make('sponsors::Board.includes.sponsor_ajaxCalls', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    

    
    <div id="dkw-activetab" class="<?php echo app('translator')->getFromJson('sponsors::board/general.page_id'); ?>main" style="display: none;"></div>

    
    <?php echo $__env->make('sponsors::Board.includes.sponsor_modals', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row">
        <div class="col-md-12 text-right">
            <div class="pull-right">
                <button id="refresh_page" class="btn btn-default">
                    <i class="fa fa-refresh" aria-hidden="true"></i>
                    &nbsp;Refresh
                </button>
            </div>
        </div>
    </div>

    <hr>

    <?php if(!$rpc->CanAccessAs([
                                'webmaster' ,
                                'admin' ,
                                'author' ,
                                'editor' ,
                                'publisher',
                                'treasurer'
                                ])): ?>
        <div class="alert alert-danger alert-dismissible text-center" role="alert">
            <?php echo app('translator')->getFromJson('sponsors::board/notifications.no_permission_to_access'); ?>
        </div>
    <?php endif; ?>




    <?php if($rpc->CanAccessAs([
                        'webmaster' ,
                        'admin' ,
                        'author' ,
                        'editor' ,
                        'publisher',
                        'treasurer'
                        ])): ?>
        <div class="row">

            <div class="col-md-12">

                <?php if($rpc->CanAccessAs(['webmaster' , 'admin'])): ?>
                    
                <?php endif; ?>

                <div class="panel panel-info">

                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <?php echo app('translator')->getFromJson('sponsors::board/general.tab_title_sponsors'); ?>
                        </h3>
                    </div>

                    <div class="panel-body">

                        <ul class="nav nav-tabs" role="tablist">

                            
                            <?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author'])): ?>
                                <li role="presentation">
                                    <a href="#draft" aria-controls="draft" role="tab" data-toggle="tab">
                                        <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_concept'); ?>
                                        <?php if($personal_drafts->count()==0): ?>
                                            <span class="label label-default">
                                                <?php echo e($personal_drafts->count()); ?>

                                            </span>
                                        <?php else: ?>
                                            <span class="label label-primary">
                                                <?php echo e($personal_drafts->count()); ?>

                                            </span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                            
                            <?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher'])): ?>
                                <li role="presentation">
                                    <a href="#author" aria-controls="author" role="tab" data-toggle="tab">
                                        <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_author'); ?>&nbsp;
                                        <?php if($author_drafts->count()==0): ?>
                                            <span class="label label-default">
                                                <?php echo e($author_drafts->count()); ?>

                                            </span>
                                        <?php else: ?>
                                            <span class="label label-primary">
                                                <?php echo e($author_drafts->count()); ?>

                                            </span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                            
                            
                            <?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'editor'])): ?>
                                <li role="presentation">
                                    <a href="#editor" aria-controls="editor" role="tab" data-toggle="tab">
                                        <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_editor'); ?> &nbsp;
                                        <?php if($author_approved->count()==0): ?>
                                            <span class="label label-default">
                                                <?php echo e($author_approved->count()); ?>

                                            </span>
                                        <?php else: ?>
                                            <span class="label label-primary">
                                                <?php echo e($author_approved->count()); ?>

                                            </span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                            
                            <?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher' , 'treasurer'])): ?>
                                <li role="presentation">
                                    <a href="#treasurer" aria-controls="penningmeester" role="tab" data-toggle="tab">
                                        <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_treasurer'); ?>  &nbsp; &nbsp;
                                        <?php if($unpaid_invoices->count()==0): ?>
                                            <span class="label label-default">
                                                <?php echo e($unpaid_invoices->count()); ?>

                                            </span>
                                        <?php else: ?>
                                            <span class="label label-primary">
                                                <?php echo e($unpaid_invoices->count()); ?>

                                            </span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                            
                            <?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher'])): ?>
                                <li role="presentation">
                                    <a href="#publisher" aria-controls="redacteur" role="tab" data-toggle="tab">
                                        <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_publisher'); ?>  &nbsp; &nbsp;
                                        <?php if($editor_approved->count()==0): ?>
                                            <span class="label label-default">
                                                <?php echo e($editor_approved->count()); ?>

                                            </span>
                                        <?php else: ?>
                                            <span class="label label-primary">
                                                <?php echo e($editor_approved->count()); ?>

                                            </span>
                                        <?php endif; ?>
                                    </a>
                                </li>
                            <?php endif; ?>

                            
                            <?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher'])): ?>
                                <li role="presentation">
                                    <a href="#published" aria-controls="gepubliceerd" role="tab" data-toggle="tab">
                                        <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_published'); ?>  &nbsp; &nbsp;
                                        
                                            <span class="label label-default">
                                                
                                                6
                                            
                                        
                                            
                                                
                                            
                                        
                                    </a>
                                </li>
                            <?php endif; ?>

                            
                            <?php if($rpc->CanAccessAs(['webmaster' , 'admin'])): ?>
                                <li role="presentation">
                                    <a href="#archive" aria-controls="archief" role="tab" data-toggle="tab">
                                        <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_archive'); ?> &nbsp;
                                        
                                            <span class="label label-default">
                                                
                                                1
                                            </span>
                                        
                                            
                                                
                                            
                                        
                                    </a>
                                </li>
                            <?php endif; ?>

                            
                            <?php if($rpc->CanAccessAs(['webmaster' , 'admin'])): ?>
                                <li role="presentation">
                                    <a href="#garbage" aria-controls="garbage" role="tab" data-toggle="tab">
                                        <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_garbage'); ?> &nbsp;
                                        
                                            <span class="label label-default">
                                                
                                                1
                                            </span>
                                        
                                            
                                                
                                            
                                        
                                    </a>
                                </li>
                            <?php endif; ?>

                            
                            <?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author'])): ?>
                                <li role="presentation">
                                    <a href="#new" aria-controls="new" role="tab" data-toggle="tab">
                                        <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_new'); ?>  &nbsp; <i class="fa fa-plus"></i>
                                    </a>
                                </li>
                            <?php endif; ?>



                        </ul>

                        <div class="tab-content">

                            <?php echo $__env->make('sponsors::Board.includes.sponsors_tabs', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


                        </div>

                    </div>

                </div>

            </div>


        </div>


    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.board.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>