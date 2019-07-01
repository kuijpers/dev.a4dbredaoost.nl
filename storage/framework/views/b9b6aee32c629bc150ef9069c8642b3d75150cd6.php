<div class="tab-pane" id="author" role="tabpanel">

    <?php if(isset($author_drafts)): ?>
        
        <?php if($author_drafts->isNotEmpty()): ?>
            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>
                                    <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_table_title_title'); ?>
                                </th>
                                <th>
                                    <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_table_title_who'); ?>
                                </th>
                                <th>
                                    <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_table_title_creation_date'); ?>
                                </th>
                                <th>
                                    <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_table_title_last_update'); ?>
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $author_drafts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author_draft): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td>
                                    <?php echo e($author_draft->title); ?>

                                </td>
                                <td>
                                    <strong> <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_author'); ?> : </strong>
                                    <?php echo e($author_draft->getAuthorName($author_draft->author_group)); ?>

                                </td>
                                <td>
                                    <?php echo e($author_draft->created_at->format('d-m-Y H:i:s')); ?>

                                </td>
                                <td>
                                    <?php echo e($author_draft->updated_at->format('d-m-Y H:i:s')); ?>

                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        <?php 

                                        $author_draft_list=[
                                            	'id'            => $author_draft->id,
                                            	'title'         => $author_draft->title,

                                            	'body'          => htmlspecialchars_decode($author_draft->body),

                                            	'package'       => $author_draft->sponsor_packages_id,

                                            	'payment'       => $author_draft->payment_received,
                                            	'image_name'    => $author_draft->sponsor_image()->name,
                                            	'link'          => $author_draft->sponsor_link()->link

                                            ];

                                            $author_draft_modal = json_encode($author_draft_list, JSON_PRETTY_PRINT);


                                         ?>
                                         
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="Bekijk"
                                                data-toggle="modal"
                                                data-target="#view_author_drafts"
                                                data-info = "<?php echo e($author_draft_modal); ?>"
                                                >

                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        <?php else: ?>
            <div class="alert alert-info text-center" role="alert">
                <i class="alert-ico fa fa-fw fa-exclamation"></i>
                <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_data_no_concepts'); ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

</div>