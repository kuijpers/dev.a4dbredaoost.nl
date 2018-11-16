<?php
	/**
	 * @todo make connection with DB-> Var's are: title , body , editor_approval(checkbox) , publisher_approval(checkbox) , publish_start , publish_end
	 * @todo Keep in mind that the dates will be set to null when this article may not be published anymore.
	 * @todo When it needs an approval from the publisher new dates for start and end needs to be set.
	 */
?>
<div class="modal fade" id="edit_archive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

                        <div class="col-md-12 edit_archive_title">
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

                        <div class="col-md-12 edit_archive_body">
                            Hier komt de tekst te staan van de titel en
                            deze word door JS aangepast en is dus niet zichtbaar op de pagina.
                        </div>

                        <div class="col-md-12">
                            <hr>
                        </div>

                        <div class="col-md-12 text-primary">

                            <div class="col-md-5" >
                                <label for="edit_publisher_approved_approve_publish">
                                    @lang('didyouknow::board/modals.modal_archive_roll_back')
                                </label>
                                <br>
                                <br>
                            </div>

                            <div class="col-md-4">

                                <input class="bs-switch" type="checkbox"
                                       name="archive_roll_back"
                                       id="edit_archive_roll_back"
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
                        <button type="submit" class="btn btn-danger pull-left">
                            @lang('didyouknow::board/buttons.modal_button_destroy')
                        </button>
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




