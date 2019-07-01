<div class="tab-pane" id="publisher" role="tabpanel">

    

    <?php if(isset($editor_approved)): ?>
        <?php if($editor_approved->isNotEmpty()): ?>
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
                        <?php $__currentLoopData = $editor_approved; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $editor_approve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td>
                                    <?php echo e($editor_approve->title); ?>

                                </td>
                                <td>
                                    <strong><?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_author'); ?> :</strong>
                                    <?php echo e($editor_approve->getAuthorName($editor_approve->author_group)); ?>

                                    <br>
                                    <strong><?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_editor'); ?> :</strong>
                                    <?php if(!empty($editor_approve->editor)): ?>
                                        <?php echo e($editor_approve->getEditorName($editor_approve->editor_group)); ?>

                                    <?php endif; ?>
                                    <br>
                                    <strong><?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_publisher'); ?> :</strong>
                                    <?php if(!empty($editor_approve->publisher)): ?>
                                        <?php echo e($editor_approve->getPublisherName($editor_approve->publisher_group)); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo e($editor_approve->created_at->format('d-m-Y H:m:i')); ?>

                                </td>
                                <td>
                                    <?php echo e($editor_approve->updated_at->format('d-m-Y H:m:i')); ?>

                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        <?php 
                                            $editor_approve_list=[
                                            	'id'                    => $editor_approve->id,
                                            	'title'                 => $editor_approve->title,

                                            	'body'                  => htmlspecialchars_decode($editor_approve->body),

                                            	'package'               => $editor_approve->sponsor_packages_id,

                                            	'payment_received'      => $editor_approve->payment_received,
                                            	'payment_received_at'   => $editor_approve->payment_received,
                                            	'image_name'            => $editor_approve->sponsor_image()->name,
                                            	'link'                  => $editor_approve->sponsor_link()->link,

                                            	'author'                => $editor_approve->getAuthorName($editor_approve->author_group),
                                            	'editor'                => $editor_approve->getEditorName($editor_approve->editor_group),
                                            	'publisher'             => $editor_approve->getPublisherName($editor_approve->publisher_group),
                                            ];

                                        $editor_approve_modal = json_encode($editor_approve_list, JSON_PRETTY_PRINT);

                                         ?>
                                         
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="<?php echo app('translator')->getFromJson('sponsors::board/buttons.tab_tooltip_view'); ?>"
                                                data-toggle="modal"
                                                data-target="#view_editor_approved"
                                                data-info = "<?php echo e($editor_approve_modal); ?>"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                         
                                        <button type="button" class="btn btn-warning"
                                                data-hoover="tooltip"
                                                title="<?php echo app('translator')->getFromJson('sponsors::board/buttons.tab_tooltip_edit'); ?>"
                                                data-toggle="modal"
                                                data-target="#edit_editor_approved"
                                                data-info = "<?php echo e($editor_approve_modal); ?>"
                                        >
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                         
                                        <button type="button" class="btn btn-danger"
                                                data-hoover="tooltip"
                                                title="<?php echo app('translator')->getFromJson('sponsors::board/buttons.tab_tooltip_delete'); ?>"
                                                data-toggle="modal"
                                                data-target="#delete_article"
                                                data-info = "<?php echo e($editor_approve_modal); ?>"
                                        >
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
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
                <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_data_no_data'); ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>

</div>