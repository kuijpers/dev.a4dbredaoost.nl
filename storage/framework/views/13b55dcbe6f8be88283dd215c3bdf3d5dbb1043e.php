<div class="tab-pane" id="editor" role="tabpanel">
    <?php if(isset($author_approved)): ?>
        
        <?php if($author_approved->isNotEmpty()): ?>
            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    Test editor
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
                        <?php $__currentLoopData = $author_approved; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author_approve): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td>
                                    <?php echo e($author_approve->title); ?>

                                </td>
                                <td>
                                    <strong><?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_author'); ?></strong> :
                                    <?php echo e($author_approve->getAuthorName($author_approve->author_group)); ?>

                                    <br>
                                    <strong><?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_editor'); ?></strong> :
                                    <?php if(!empty($author_approve->editor)): ?>
                                        <?php echo e($author_approve->getEditorName($author_approve->editor_group)); ?>

                                    <?php else: ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo e($author_approve->created_at->format('d-m-Y H:i:s')); ?>

                                </td>
                                <td>
                                    <?php echo e($author_approve->updated_at->format('d-m-Y H:i:s')); ?>

                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        <?php 

                                        $author_approve_list=[
                                            	'id'            => $author_approve->id,
                                            	'title'         => $author_approve->title,

                                            	'body'          => htmlspecialchars_decode($author_approve->body),

                                            	'package'       => $author_approve->sponsor_packages_id,

                                            	'payment'       => $author_approve->payment_received,
                                            	'image_name'    => $author_approve->sponsor_image()->name,
                                            	'link'          => $author_approve->sponsor_link()->link,

                                            	'author'        => $author_approve->getAuthorName($author_approve->author_group),
                                            	'editor'        => $author_approve->getEditorName($author_approve->editor_group),

                                            ];

                                            $author_approve_modal = json_encode($author_approve_list, JSON_PRETTY_PRINT);

                                         ?>
                                         
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="<?php echo app('translator')->getFromJson('sponsors::board/buttons.tab_tooltip_view'); ?>"
                                                data-toggle="modal"
                                                data-target="#view_author_approved"
                                                data-info = "<?php echo e($author_approve_modal); ?>"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                         
                                        <button type="button" class="btn btn-warning"
                                                data-hoover="tooltip"
                                                title="<?php echo app('translator')->getFromJson('sponsors::board/buttons.tab_tooltip_edit'); ?>"
                                                data-toggle="modal"
                                                data-target="#edit_author_approved"
                                                data-info = "<?php echo e($author_approve_modal); ?>"
                                        >
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>
                                         
                                        <button type="button" class="btn btn-danger"
                                                data-hoover="tooltip"
                                                title="<?php echo app('translator')->getFromJson('sponsors::board/buttons.tab_tooltip_delete'); ?>"
                                                data-toggle="modal"
                                                data-target="#delete_article"
                                                data-info = "<?php echo e($author_approve_modal); ?>"
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