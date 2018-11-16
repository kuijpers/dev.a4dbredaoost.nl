<?php
/**
* @todo make connection with DB-> Var's are: title , body , editor_approval(checkbox)
*/
?>
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

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-body">

                            <div class="col-md-12 text-primary">
                                <label for="personal_title">
                                    <h5>
                                        @lang('didyouknow::board/modals.modal_view_information_title')
                                    </h5>
                                </label>
                            </div>

                            <div class="col-md-12 view_personal_title">
                                <input name="title" type="text" class="form-control span6" id="personal_title">
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

                            <div class="col-md-12 view_personal_body">

                                <textarea name="body" class="form-control summernote" rows="10" id="personal_body"></textarea>

                            </div>

                            <div class="col-md-12">
                                <hr>
                            </div>

                            <div class="col-md-12 text-primary">

                                <div class="col-md-5">
                                    <label for="edit_personal_drafts_approve_editor">
                                        @lang('didyouknow::board/modals.modal_change_editor')&nbsp;
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <input class="bs-switch" type="checkbox"
                                           name="editor_approval"
                                           id="edit_personal_drafts_approve_editor"
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
                            <button type="submit" class="btn btn-success">
                                @lang('didyouknow::board/buttons.modal_button_save')
                            </button>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>




