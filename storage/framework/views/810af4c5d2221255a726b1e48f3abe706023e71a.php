<div class="tab-pane" id="treasurer" role="tabpanel">

    

    <?php if(isset($unpaid_invoices)): ?>
        <?php if($unpaid_invoices->isNotEmpty()): ?>
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
                        <?php $__currentLoopData = $unpaid_invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unpaid_invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <tr>
                                <td>
                                    <?php echo e($unpaid_invoice->title); ?>

                                </td>
                                <td>
                                    <strong><?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_author'); ?> :</strong>
                                    <?php echo e($unpaid_invoice->getAuthorName($unpaid_invoice->author_group)); ?>

                                    <br>
                                    <strong><?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_editor'); ?> :</strong>
                                    <?php if(!empty($unpaid_invoice->editor)): ?>
                                        <?php echo e($unpaid_invoice->getEditorName($unpaid_invoice->editor_group)); ?>

                                    <?php endif; ?>
                                    <br>
                                    <strong><?php echo app('translator')->getFromJson('sponsors::board/tabs.tab_nav_publisher'); ?> :</strong>
                                    <?php if(!empty($unpaid_invoice->publisher)): ?>
                                        <?php echo e($unpaid_invoice->getPublisherName($unpaid_invoice->publisher_group)); ?>

                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php echo e($unpaid_invoice->created_at->format('d-m-Y H:m:i')); ?>

                                </td>
                                <td>
                                    <?php echo e($unpaid_invoice->updated_at->format('d-m-Y H:m:i')); ?>

                                </td>
                                <td>
                                    <div class="btn-group btn-group-xs" role="group">
                                        <?php 
                                            $unpaid_invoice_list=[
                                            	'id'            => $unpaid_invoice->id,
                                            	'title'         => $unpaid_invoice->title,

                                            	'body'          => htmlspecialchars_decode($unpaid_invoice->body),

                                            	'package'       => $unpaid_invoice->sponsor_packages_id,

                                            	'payment'       => $unpaid_invoice->payment_received,
                                            	'image_name'    => $unpaid_invoice->sponsor_image()->name,
                                            	'link'          => $unpaid_invoice->sponsor_link()->link,

                                            	'author'        => $unpaid_invoice->getAuthorName($unpaid_invoice->author_group),
                                            	'editor'        => $unpaid_invoice->getEditorName($unpaid_invoice->editor_group),

                                            ];

                                        $unpaid_invoice_modal = json_encode($unpaid_invoice_list, JSON_PRETTY_PRINT);

                                         ?>
                                         
                                        <button type="button" class="btn btn-info"
                                                data-hoover="tooltip"
                                                title="<?php echo app('translator')->getFromJson('sponsors::board/buttons.tab_tooltip_view'); ?>"
                                                data-toggle="modal"
                                                data-target="#view_treasurer_unpaid"
                                                data-info = "<?php echo e($unpaid_invoice_modal); ?>"
                                        >
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                        <?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'treasurer'])): ?>
                                         
                                            <button type="button" class="btn btn-warning"
                                                    data-hoover="tooltip"
                                                    title="<?php echo app('translator')->getFromJson('sponsors::board/buttons.tab_tooltip_edit'); ?>"
                                                    data-toggle="modal"
                                                    data-target="#edit_treasurer_unpaid"
                                                    data-info = "<?php echo e($unpaid_invoice_modal); ?>"
                                            >
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </button>
                                             
                                            <button type="button" class="btn btn-danger"
                                                    data-hoover="tooltip"
                                                    title="<?php echo app('translator')->getFromJson('sponsors::board/buttons.tab_tooltip_delete'); ?>"
                                                    data-toggle="modal"
                                                    data-target="#delete_article"
                                                    data-info = "<?php echo e($unpaid_invoice_modal); ?>"
                                            >
                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            </button>
                                        <?php endif; ?>
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