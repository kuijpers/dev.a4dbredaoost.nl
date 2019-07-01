    <div class="modal fade" id="view_author_drafts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-body">

                            <div class="col-md-12 text-primary">
                                <h5>
                                    <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_view_information_title'); ?>
                                </h5>
                            </div>

                            <div class="col-md-12 view_author_title">
                                Title
                                This line of text will not be vissible on the website.
                                This is where data will be placed using JS.
                                <hr>
                            </div>

                            <div class="col-md-12 text-primary">
                                <h5>
                                    <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_view_information_body'); ?>
                                </h5>
                            </div>

                            <div class="col-md-12 view_author_body">
                                Body
                                This line of text will not be vissible on the website.
                                This is where data will be placed using JS.
                            </div>

                            <div class="col-md-12 text-primary">
                                <h5>
                                    <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_view_information_link'); ?>
                                </h5>
                            </div>

                            <div class="col-md-12 view_author_link">
                                <a href="weblink" target="_blank" id="view_author_link_sponsor">
                                    weblink
                                </a>
                            </div>

                            <div class="col-md-12 text-primary">
                                <h5>
                                    <?php echo app('translator')->getFromJson('sponsors::board/modals.modal_view_information_logo'); ?>
                                </h5>
                            </div>

                            <div class="col-md-12 view_author_image margin-top-md text-center">
                                <img src=" <?php echo e(asset('img/no-image.png')); ?> " id="view_author_logo_sponsor" class="img-thumbnail" style="max-width:300px;">
                            </div>

                            <div class="col-md-12">
                                <hr>
                            </div>


                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <?php echo app('translator')->getFromJson('sponsors::board/buttons.modal_button_close'); ?>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>




