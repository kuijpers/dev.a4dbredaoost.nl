
    <div class="modal fade" id="edit_personal_drafts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-header">
                            <h4 class="modal-title text-danger">
                                @lang('didyouknow::board/modals.modal_view_title')
                            </h4>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-title-message">
                            <h5 class="text-primary">
                                @lang('didyouknow::board/modals.modal_view_announcement')
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
                            @lang('didyouknow::board/modals.modal_change_alert_success')
                        </div>
                    </div>

                    <div id="modal_update_fail" class="col-md-8 col-md-offset-2" style="display:none;">
                        <div id="modal_update_fail_alert" class="alert alert-danger alert-dismissible" role="alert">
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <i class="alert-ico fa fa-fw fa-ban"></i>
                            @lang('didyouknow::board/modals.modal_change_alert_fail')
                        </div>
                    </div>

                </div>

                <form id="edit_personal_drafts" name="edit_personal_drafts" class="edit_personal_drafts" method="POST" action="#" >
                    <div class="row">

                        <div class="col-md-10 col-lg-offset-1">
                            <div class="modal-body">

                                <input name="id" type="hidden" class="form-control span6" id="edit_personal_drafts_id">

                                <div class="col-md-12 text-primary">
                                    <label for="personal_title">
                                        <h5>
                                            @lang('didyouknow::board/modals.modal_view_information_title')
                                        </h5>
                                    </label>
                                </div>

                                <div class="col-md-12 view_personal_title">
                                    <input name="title" type="text" class="form-control span6" id="edit_personal_drafts_title">
                                </div>

                                <div class="col-md-12">
                                    <hr>
                                </div>

                                <div class="col-md-12 text-primary">
                                    <label for="personal_body">
                                        <h5>
                                            @lang('didyouknow::board/modals.modal_view_information_body')
                                        </h5>
                                    </label>
                                </div>

                                <div class="col-md-12 edit_personal_body">

                                    <textarea name="body" class="form-control summernote" rows="10" id="edit_personal_drafts_body"></textarea>

                                </div>

                                <div class="col-md-12">
                                    <hr>
                                </div>

                                <div class="col-md-12 text-primary">

                                    <div class="col-md-5">
                                        <label for="author_approved">
                                            @lang('didyouknow::board/modals.modal_change_editor')&nbsp;
                                        </label>
                                    </div>

                                    <div class="col-md-4">
                                        <input class="bs-switch" type="checkbox"
                                               name="author_approval"
                                               id="author_approved"
                                               data-size="mini"
                                               data-on-color="success"
                                               data-off-color="danger"
                                               data-on-text="@lang('didyouknow::board/buttons.modal_switch_on')"
                                               data-off-text="@lang('didyouknow::board/buttons.modal_switch_off')"
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
                                    @lang('didyouknow::board/buttons.modal_button_cancel')
                                </button>
                                <button type="submit" class="btn btn-success" id="edit_personal_drafts_submit">
                                    @lang('didyouknow::board/buttons.modal_button_save')
                                </button>

                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>





