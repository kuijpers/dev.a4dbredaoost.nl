    <div class="modal fade" id="view_editor_approved" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-header">
                            <h4 class="modal-title text-danger">
                                <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_view_title_publisher'); ?>
                            </h4>
                        </div>
                    </div>

                </div>

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

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-body">

                            <div class="col-md-12 text-primary">
                                <h5>
                                    <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_view_information_title'); ?>
                                </h5>
                            </div>

                            <div class="col-md-12 view_editor_approved_title">
                                Title
                                This line of text will not be vissible on the website.
                                This is where data will be placed using JS..
                                <hr>
                            </div>

                            <div class="col-md-12 text-primary">
                                <h5>
                                    <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_view_information_body'); ?>
                                </h5>
                            </div>

                            <div class="col-md-12 view_editor_approved_body">
                                Body
                                This line of text will not be vissible on the website.
                                This is where data will be placed using JS.
                            </div>

                            <div class="col-md-12 text-primary">
                                <h5>
                                    <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_view_information_link'); ?>
                                </h5>
                            </div>

                            <div class="col-md-12 view_editor_approved_link">
                                <a href="weblink" target="_blank" id="view_editor_approved_link_sponsor">
                                    weblink
                                </a>
                            </div>

                            <div class="col-md-12 text-primary">
                                <h5>
                                    <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_view_information_logo'); ?>
                                </h5>
                            </div>

                            <div class="col-md-12 view_treasurer_unpaid_image margin-top-md text-center">
                                <img src=" <?php echo e(asset('img/no-image.png')); ?> " id="view_editor_approved_logo_sponsor" class="img-thumbnail" style="max-width:300px;">
                            </div>

                            <div class="col-md-12">
                                <hr>

                                <div class="row">
                                    <div id="view_editor_approved_unpaid_id" class="col-md-6" style="display: none">
                                        
                                        <label>
                                            Betaling ontvangen :
                                            <input class="bs-switch payment_received" type="checkbox"
                                                   name="payment_received"
                                                   id="view_editor_approved_unpaid"
                                                   data-size="mini"
                                                   data-on-color="success"
                                                   data-off-color="danger"
                                                   data-on-text="Ja"
                                                   data-off-text="Nee"
                                                   disabled
                                            >
                                        </label>
                                    </div>
                                    
                                    <div id="view_editor_approved_paid_id" class="col-md-6" style="display: none">
                                        <label>
                                            Betaling ontvangen :
                                            <input class="bs-switch payment_received" type="checkbox"
                                                   name="payment_received"
                                                   id="view_editor_approved_paid"
                                                   data-size="mini"
                                                   data-on-color="success"
                                                   data-off-color="danger"
                                                   data-on-text="Ja"
                                                   data-off-text="Nee"
                                                   disabled
                                                   checked
                                            >
                                        </label>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <hr>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-4 text-primary">
                                    <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_view_approved_author'); ?>
                                </div>
                                <div class="col-md-4 view_editor_approved_author">
                                    Author
                                    This line of text will not be vissible on the website.
                                    This is where data will be placed using JS.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-4 text-primary">
                                    <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_view_approved_editor'); ?>
                                </div>
                                <div class="col-md-4 view_editor_approved_editor">
                                    Editor
                                    This line of text will not be vissible on the website.
                                    This is where data will be placed using JS.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-4 text-primary">
                                    <?php echo app('translator')->getFromJson('didyouknow::board/modals.modal_view_process_publisher'); ?>
                                </div>
                                <div class="col-md-4 view_editor_approved_publisher">
                                    Publisher
                                    This line of text will not be vissible on the website.
                                    This is where data will be placed using JS.
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <?php echo app('translator')->getFromJson('didyouknow::board/buttons.modal_button_close'); ?>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>




