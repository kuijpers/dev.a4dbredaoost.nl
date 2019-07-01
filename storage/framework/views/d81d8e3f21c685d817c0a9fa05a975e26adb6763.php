<div class="tab-pane active" id="draft" role="tabpanel">
    <?php if(isset($personal_drafts)): ?>
        
        <?php if($personal_drafts->isNotEmpty()): ?>
            <div class="template__table_static template__table_responsive">
                <div class="scrollable scrollbar-macosx">
                    <table class="table table-condensed">
                        <thead>
                            <tr>
                                <th>
                                    <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_table_title_title'); ?>
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
                        <?php $__currentLoopData = $personal_drafts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personal_draft): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td>
                                    <?php echo e($personal_draft->title); ?>

                                </td>
                                <td>
                                    <?php echo e($personal_draft->created_at->format('d-m-Y H:i:s')); ?>

                                </td>
                                <td>
                                    <?php echo e($personal_draft->updated_at->format('d-m-Y H:i:s')); ?>

                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        <?php 

                                            $personal_draft_list=[
                                            	'id'            => $personal_draft->id,
                                            	'title'         => $personal_draft->title,

                                            	'body'          => htmlspecialchars_decode($personal_draft->body),

                                            	'package'       => $personal_draft->sponsor_packages_id,

                                            	'payment'       => $personal_draft->payment_received,
                                            	'image_name'    => $personal_draft->sponsor_image()->name,
                                            	'link'          => $personal_draft->sponsor_link()->link

                                            ];

                                            $personal_draft_modal = json_encode($personal_draft_list, JSON_PRETTY_PRINT);

                                         ?>

                                        

                                         
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="<?php echo app('translator')->getFromJson('sponsors::board/buttons.tab_tooltip_view'); ?>"
                                                data-toggle="modal"
                                                data-target="#view_personal_drafts"
                                                data-info = "<?php echo e($personal_draft_modal); ?>"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>

                                         
                                        <button type="button" class="btn btn-warning"
                                                data-hoover="tooltip"
                                                title="<?php echo app('translator')->getFromJson('sponsors::board/buttons.tab_tooltip_edit'); ?>"
                                                data-toggle="modal"
                                                data-target="#edit_personal_drafts"
                                                data-info = "<?php echo e($personal_draft_modal); ?>"
                                        >
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </button>

                                         
                                        <button type="button" class="btn btn-danger"
                                                data-hoover="tooltip"
                                                title="<?php echo app('translator')->getFromJson('sponsors::board/buttons.tab_tooltip_delete'); ?>"
                                                data-toggle="modal"
                                                data-target="#delete_article"
                                                data-info = "<?php echo e($personal_draft_modal); ?>"
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
        <?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_data_no_concepts'); ?>
    </div>
    <?php endif; ?>


    <?php endif; ?>
</div>