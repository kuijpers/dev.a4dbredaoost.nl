    <div class="modal fade" id="edit_publisher_approved" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

                <form id="edit_author_approved" name="edit_author_approved" class="edit_author_approved" method="POST" action="#" >

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


                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-body">

                            <input name="id" type="hidden" class="form-control span6" id="edit_publisher_approved_id">

                            <div class="col-md-12 text-primary">
                                <label for="editor_approved_title">
                                    <h5>
                                        @lang('didyouknow::board/modals.modal_view_information_title')
                                    </h5>
                                </label>
                            </div>

                            <div class="col-md-12 edit_publisher_approved_title">
                                Title
                                This line of text will not be vissible on the website.
                                This is where data will be placed using JS.
                                <hr>
                            </div>

                            <div class="col-md-12">
                                <hr>
                            </div>

                            <div class="col-md-12 text-primary">
                                <label for="editor_approved_body">
                                    <h5>
                                        @lang('didyouknow::board/modals.modal_view_information_body')
                                    </h5>
                                </label>
                            </div>

                            <div class="col-md-12 edit_publisher_approved_body">
                                Body
                                This line of text will not be vissible on the website.
                                This is where data will be placed using JS.
                            </div>

                            <div class="col-md-12">
                                <hr>
                            </div>

                            <div class="col-md-12 text-primary">

                                <div class="col-md-5">
                                    <label for="edit_publisher_approved_editor_published">
                                        @lang('didyouknow::board/modals.modal_change_editor')&nbsp;
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <input class="bs-switch" type="checkbox" checked="checked" disabled
                                           name="editor_approval"
                                           id="edit_publisher_approved_editor_published"
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

                            <div class="col-md-12 text-primary">

                                <div class="col-md-5">
                                    <label for="edit_publisher_approved_publisher_published">
                                        @lang('didyouknow::board/modals.modal_change_publisher')&nbsp;
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <input class="bs-switch" type="checkbox" checked="checked" disabled
                                           name="publisher_approval"
                                           id="edit_publisher_approved_publisher_published"
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

                            <div class="col-md-12 text-primary">

                                <div class="col-md-5" >
                                    <label for="publish_approved">
                                        @lang('didyouknow::board/modals.modal_change_can_publish')
                                    </label>
                                    <br>
                                    <br>
                                </div>

                                <div class="col-md-4">

                                    <input class="bs-switch" type="checkbox" checked="checked"
                                           name="publish_approved"
                                           id="publish_approved"
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

                            <div class="col-md-12">
                                <div class="col-md-4 text-primary">
                                    @lang('didyouknow::board/modals.modal_view_publish_from'):
                                </div>
                                <div class="col-md-4 edit_publisher_approved_start">
                                    Start date
                                    This line of text will not be vissible on the website.
                                    This is where data will be placed using JS.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-4 text-primary">
                                    @lang('didyouknow::board/modals.modal_view_publish_till'):
                                </div>
                                <div class="col-md-4 edit_publisher_approved_end">
                                    End date
                                    This line of text will not be vissible on the website.
                                    This is where data will be placed using JS.
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                @lang('didyouknow::board/buttons.modal_button_cancel')
                            </button>
                            <button id="edit_publisher_approved_submit" type="submit" class="btn btn-success" disabled>
                                @lang('didyouknow::board/buttons.modal_button_save')
                            </button>

                        </div>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>




