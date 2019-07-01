    <div class="modal fade" id="edit_personal_drafts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-header">
                            <h4 class="modal-title text-danger">
                                <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_view_title'); ?>
                            </h4>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-title-message">
                            <h5 class="text-primary">
                                <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_view_announcement'); ?>
                            </h5>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div id="modal_update_success" class="col-md-8 col-md-offset-2" style="display:none;">
                        <div id="modal_update_success_alert" class="alert alert-success alert-dismissible" role="alert">
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <i class="alert-ico fa fa-fw fa-check"></i>
                            <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_change_alert_success'); ?>
                        </div>
                    </div>

                    <div id="modal_update_fail" class="col-md-8 col-md-offset-2" style="display:none;">
                        <div id="modal_update_fail_alert" class="alert alert-danger alert-dismissible" role="alert">
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <i class="alert-ico fa fa-fw fa-ban"></i>
                            <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_change_alert_fail'); ?>
                        </div>
                    </div>

                </div>

                <form id="edit_personal_drafts_form"
                      name="edit_personal_drafts_form"
                      class="edit_personal_drafts"
                      method="post"
                      action="<?php echo e(route('board.sponsors.author.edit')); ?>"
                      enctype="multipart/form-data">

                    <?php echo e(csrf_field()); ?>


                    <div class="row">

                        <div class="col-md-10 col-lg-offset-1">
                            <div class="modal-body">

                                <input name="id" type="hidden" class="form-control span6" id="edit_personal_drafts_id">

                                <div class="col-md-12 text-primary">
                                    <label for="edit_personal_drafts_title">
                                        <h5>
                                            <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_view_information_title'); ?>
                                        </h5>
                                    </label>
                                </div>

                                <div class="col-md-12 edit_personal_title">
                                    <input name="title" type="text" class="form-control span6" id="edit_personal_drafts_title">
                                </div>

                                <div class="col-md-12 text-primary">
                                    <label for="edit_personal_drafts_package">
                                        <h5>
                                            <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_view_information_package'); ?>
                                        </h5>
                                    </label>
                                </div>

                                <div class="col-md-6 edit_personal_package">
                                    <select class="selectpicker form-control" name="sponsor_package" id="edit_personal_package">
                                        <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($package->id); ?>"><?php echo e($package->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                </div>

                                <div class="col-md-12 text-primary">
                                    <label for="personal_body">
                                        <h5>
                                            <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_view_information_body'); ?>
                                        </h5>
                                    </label>
                                </div>

                                <div class="col-md-12 edit_personal_body">

                                    <textarea name="body" class="form-control summernote" rows="10" id="edit_personal_drafts_body"></textarea>

                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="edit_personal_drafts_link" class="col-sm-2 control-label text-primary margin-top-md">
                                        <h5>
                                            Web site link:
                                        </h5>
                                    </label>
                                    <div class="col-sm-8  margin-top-md">
                                        <input type="text" name="sponsor_link" class="form-control" id="edit_personal_drafts_link" placeholder="http(s):// Website link">
                                    </div>
                                    
                                </div>

                                <div class="col-md-12 edit_personal_image margin-top-md text-center">
                                    <img id="edit_personal_drafts_show_logo" src=" <?php echo e(asset('img/no-image.png')); ?> " class="img-thumbnail logo_sponsor" style="max-width:300px;">
                                </div>

                                <div class="form-group  col-md-10 col-md-offset-1 margin-top-md">
                                    <div class="input-group">

                                        

                                        <label class="input-group-btn">
                                        <span class="btn btn-default">
                                            Select new Logo <input type="file" name="sponsor_logo"  style="display: none;">
                                        </span>
                                        </label>
                                        <input id="edit_personal_drafts_logo" type="text" class="form-control input-file" readonly placeholder="Upload logo...." >

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                </div>

                                <div class="col-md-12 text-primary">

                                    <div class="col-md-5">
                                        <label for="author_approved">
                                            <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_change_editor'); ?>&nbsp;
                                        </label>
                                    </div>

                                    <div class="col-md-4">
                                        <input class="bs-switch" type="checkbox"
                                               name="author_approval"
                                               id="author_approved"
                                               data-size="mini"
                                               data-on-color="success"
                                               data-off-color="danger"
                                               data-on-text="<?php echo app('translator')->getFromJson('sponsors::board/buttons.modal_switch_on'); ?>"
                                               data-off-text="<?php echo app('translator')->getFromJson('sponsors::board/buttons.modal_switch_off'); ?>"
                                               value=1
                                        >
                                        <br>
                                        <br>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-md-10 col-lg-offset-1">
                            <div class="modal-footer">

                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    <?php echo app('translator')->getFromJson('sponsors::board/buttons.modal_button_cancel'); ?>
                                </button>
                                <button type="submit" class="btn btn-success" id="edit_personal_drafts_submit">
                                    <?php echo app('translator')->getFromJson('sponsors::board/buttons.modal_button_save'); ?>
                                </button>

                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>





