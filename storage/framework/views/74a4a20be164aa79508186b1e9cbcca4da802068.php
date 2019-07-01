    <div class="modal fade" id="edit_editor_approved" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-header">
                            <h4 class="modal-title text-danger">
                                <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_view_title'); ?>
                            </h4>
                        </div>
                    </div>

                </div>

                <form id="edit_editor_approved" name="edit_editor_approved" class="edit_editor_approved" method="POST" action="#" >
                    <div class="row">

                        <div class="col-md-10 col-lg-offset-1">
                            <div class="modal-title-message">
                                <h5 class="text-primary">
                                    <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_view_announcement'); ?>
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
                                <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_change_alert_success'); ?>
                            </div>
                        </div>

                        <div id="modal_update_fail" class="col-md-8 col-md-offset-2" style="display:none;">
                            <div id="modal_update_fail_alert" class="alert alert-danger alert-dismissible" role="alert">
                                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <i class="alert-ico fa fa-fw fa-ban"></i>
                                <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_change_alert_fail'); ?>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-10 col-lg-offset-1">

                            <div class="modal-body">

                                <input name="id" type="hidden" class="form-control span6" id="edit_editor_approved_id">

                                <div class="col-md-12 text-primary">
                                    <label for="editor_approved_title">
                                        <h5>
                                            <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_view_information_title'); ?>
                                        </h5>
                                    </label>
                                </div>

                                <div class="col-md-12 edit_editor_approved_title">
                                    <input name="title" type="text" class="form-control span6" id="edit_editor_approved_title">
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                </div>

                                <div class="col-md-12 text-primary">
                                    <label for="editor_approved_body">
                                        <h5>
                                            <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_view_information_body'); ?>
                                        </h5>
                                    </label>
                                </div>

                                <div class="col-md-12 edit_editor_approved_body">

                                    <textarea name="body" class="form-control summernote" rows="10" id="edit_editor_approved_body"></textarea>

                                </div>

                                <div class="col-md-12">
                                    <hr>
                                </div>

                                <div class="col-md-12 text-primary">

                                    <div class="col-md-5">
                                        <label for="author_approved">
                                            <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_change_editor'); ?>&nbsp;
                                        </label>
                                    </div>

                                    <div class="col-md-4">
                                        <input class="bs-switch" type="checkbox" checked="checked" disabled
                                               name="author_approved"
                                               id="author_approved"
                                               data-size="mini"
                                               data-on-color="success"
                                               data-off-color="danger"
                                               data-on-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_on'); ?>"
                                               data-off-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_off'); ?>"
                                        >
                                        <br>
                                        <br>
                                    </div>

                                </div>

                                <div class="col-md-12 text-primary">

                                    <div class="col-md-5">
                                        <label for="editor_approved">
                                            <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_change_publisher'); ?>
                                        </label>
                                    </div>

                                    <div class="col-md-4">

                                        <input class="bs-switch" type="checkbox" checked="checked" disabled
                                               name="editor_approved"
                                               id="editor_approved"
                                               data-size="mini"
                                               data-on-color="success"
                                               data-off-color="danger"
                                               data-on-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_on'); ?>"
                                               data-off-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_off'); ?>"
                                        >
                                        <br>
                                        <br>
                                    </div>

                                </div>

                                
                                <div class="col-md-12 text-primary">

                                    <div class="col-md-5" >
                                        <label for="approve_to_publish">
                                            <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_change_can_publish'); ?>
                                        </label>
                                        <br>
                                        <br>
                                    </div>

                                    <div class="col-md-4">

                                        <input class="bs-switch" type="checkbox"
                                               name="approve_to_publish"
                                               id="approve_to_publish"
                                               data-size="mini"
                                               data-on-color="success"
                                               data-off-color="danger"
                                               data-on-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_on'); ?>"
                                               data-off-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_off'); ?>"
                                        >
                                        <br>
                                        <br>
                                    </div>

                                </div>
                                

                                

                                <div class="col-md-12 text-primary" id="approve_period_block">

                                    
                                        <div class="col-md-5" >
                                            <label for="approve_select_period">
                                                <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_change_publish_temp'); ?>
                                            </label>
                                            <br>
                                            <br>
                                        </div>

                                        <div class="col-md-3">
                                            <input class="bs-switch" type="checkbox"
                                                   id="approve_select_period"
                                                   data-size="mini"
                                                   data-on-color="success"
                                                   data-off-color="danger"
                                                   data-on-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_on'); ?>"
                                                   data-off-text="<?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_switch_off'); ?>"
                                                   >
                                        </div>
                                    

                                    
                                    
                                    <div class="col-md-12 text-primary" id="approve_period_forever">

                                        <div class="col-md-12 text-primary">
                                            <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_change_publish_start'); ?>:
                                        </div>

                                        <div class='col-sm-5'>
                                            <div class="form-group">
                                                <div class='input-group date' id='approve_forever'>
                                                    <input type='text' class="form-control" data-format="yyyy-MM-dd hh:mm:ss">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    

                                    
                                    
                                    <div class="col-md-12 text-primary" id="approve_period_period">

                                        <div class="col-md-12 text-primary">
                                            <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_change_publish_period'); ?>:
                                        </div>

                                        <div class='col-md-5'>
                                            <div class="form-group">
                                                <div class='input-group date' id='approve_from'>
                                                    <input type='text' class="form-control" data-format="yyyy-MM-dd hh:mm:ss" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='col-md-5'>
                                            <div class="form-group">
                                                <div class='input-group date' id='approve_till'>
                                                    <input type='text' class="form-control" data-format="yyyy-MM-dd hh:mm:ss" />
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    


                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-10 col-lg-offset-1">
                            <div class="modal-footer">

                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    <?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_button_cancel'); ?>
                                </button>
                                <button id="edit_editor_approved_submit" type="submit" class="btn btn-success">
                                    <?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_button_save'); ?>
                                </button>

                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
