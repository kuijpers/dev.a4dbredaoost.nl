<?php
	/**
	 * @todo make connection with DB-> Var's are: title , body , editor_approval(checkbox) , publisher_approval(checkbox)
	 */
?>
    <div class="modal fade" id="edit_editor_approved" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                <label for="editor_approved_title">
                                    <h5>
                                        @lang('didyouknow::board/modals.modal_view_information_title')
                                    </h5>
                                </label>
                            </div>

                            <div class="col-md-12 edit_editor_approved_title">
                                Hier komt de tekst te staan van de titel en
                                deze word door JS aangepast en is dus niet zichtbaar op de pagina.
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

                            <div class="col-md-12 edit_editor_approved_body">
                                Hier komt de tekst te staan van de titel en
                                deze word door JS aangepast en is dus niet zichtbaar op de pagina.
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
                                    <input class="bs-switch" type="checkbox" checked="checked" disabled
                                           name="editor_approval"
                                           id="edit_editor_approved_approve_editor"
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
                                    <label for="edit_personal_drafts_approve_editor">
                                        @lang('didyouknow::board/modals.modal_change_publisher')
                                    </label>
                                </div>

                                <div class="col-md-4">

                                    <input class="bs-switch" type="checkbox" checked="checked" disabled
                                           name="publisher_approval"
                                           id="edit_editor_approved_approve_publisher"
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

                            {{--
                                NOTE: When this switch is set to yes a new div [#edit_editor_approved_approve_period_block]
                                will show up on the page
                            --}}
                            <div class="col-md-12 text-primary">

                                <div class="col-md-5" >
                                    <label for="edit_editor_approved_approve_publish">
                                        @lang('didyouknow::board/modals.modal_change_can_publish')
                                    </label>
                                    <br>
                                    <br>
                                </div>

                                <div class="col-md-4">

                                    <input class="bs-switch" type="checkbox"
                                           name="publish_approved"
                                           id="edit_editor_approved_approve_publish"
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
                            {{--
                                NOTE: End of the switch
                             --}}

                            {{--
                                NOTE: This div will show up when the above switch is checked
                            --}}

                            <div class="col-md-12 text-primary" id="edit_editor_approved_approve_period_block">

                                {{--
                                    NOTE: When this switch is set to yes a new div [#edit_editor_approved_approve_period_block]
                                    will show up on the page and the current div [#edit_editor_approved_approve_period_period]
                                    will fadeOut
                                --}}
                                    <div class="col-md-5" >
                                        <label for="edit_editor_approved_approve_select_period">
                                            @lang('didyouknow::board/modals.modal_change_publish_temp')
                                        </label>
                                        <br>
                                        <br>
                                    </div>

                                    <div class="col-md-3">
                                        <input class="bs-switch" type="checkbox"
                                               id="edit_editor_approved_approve_select_period"
                                               data-size="mini"
                                               data-on-color="success"
                                               data-off-color="danger"
                                               data-on-text="@lang('didyouknow::board/buttons.modal_switch_on')"
                                               data-off-text="@lang('didyouknow::board/buttons.modal_switch_off')"
                                               >
                                    </div>
                                {{--
                                    NOTE: End of the switch
                                 --}}

                                {{--
                                    NOTE: When above switch is checked yes this div [#edit_editor_approved_approve_period_forever]
                                    will be shown
                                --}}
                                {{-- Period from - till forever --}}
                                <div class="col-md-12 text-primary" id="edit_editor_approved_approve_period_forever">

                                    <div class="col-md-12 text-primary">
                                        @lang('didyouknow::board/modals.modal_change_publish_start'):
                                    </div>

                                    <div class='col-sm-5'>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" >
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{--
                                    NOTE: End of div [#edit_editor_approved_approve_period_forever]
                                 --}}

                                {{--
                                    NOTE: When above switch is checked no this div [#edit_editor_approved_approve_period_period]
                                    will be shown
                                --}}
                                {{-- Period from - till --}}
                                <div class="col-md-12 text-primary" id="edit_editor_approved_approve_period_period">

                                    <div class="col-md-12 text-primary">
                                        @lang('didyouknow::board/modals.modal_change_publish_period'):
                                    </div>

                                    <div class='col-md-5'>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker6'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='col-md-5'>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker7'>
                                                <input type='text' class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                {{--
                                    NOTE: End of div [#edit_editor_approved_approve_period_period]
                                 --}}


                            </div>

                        </div>

                    </div>

                </div>

                <div class="row">

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
