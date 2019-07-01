    <div class="modal fade" id="edit_treasurer_unpaid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-header">
                            <h4 class="modal-title text-danger">
                                @lang('sponsors::board/modals.modal_view_title')
                            </h4>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-title-message">
                            <h5 class="text-primary">
                                @lang('sponsors::board/modals.modal_view_announcement')
                            </h5>
                        </div>
                    </div>

                </div>

                <form id="edit_treasurer_unpaid_form"
                      name="edit_treasurer_unpaid_form"
                      class="edit_treasurer_unpaid_drafts"
                      method="post"
                      action="{{route('board.sponsors.treasurer.edit')}}"
                >

                    {{csrf_field()}}

                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-body">

                            <input name="id" type="hidden" class="form-control span6" id="edit_treasurer_unpaid_id">

                            <div class="col-md-12 text-primary">
                                <h5>
                                    @lang('sponsors::board/modals.modal_view_information_title')
                                </h5>
                            </div>

                                <div class="col-md-12 edit_treasurer_unpaid_title">
                                    Title
                                    This line of text will not be vissible on the website.
                                    This is where data will be placed using JS.
                                    <hr>
                                </div>

                                <div class="col-md-12 text-primary">
                                    <h5>
                                        @lang('sponsors::board/modals.modal_view_information_body')
                                    </h5>
                                </div>

                                <div class="col-md-12 edit_treasurer_unpaid_body">
                                    Body
                                    This line of text will not be vissible on the website.
                                    This is where data will be placed using JS.
                                </div>

                                <div class="col-md-12 text-primary">
                                    <h5>
                                        @lang('sponsors::board/modals.modal_view_information_link')
                                    </h5>
                                </div>

                                <div class="col-md-12 edit_treasurer_unpaid_link">
                                    <a href="weblink" target="_blank" id="edit_treasurer_unpaid_link_sponsor">
                                        weblink
                                    </a>
                                </div>

                                <div class="col-md-12 text-primary">
                                    <h5>
                                        @lang('sponsors::board/modals.modal_view_information_logo')
                                    </h5>
                                </div>

                                <div class="col-md-12 edit_treasurer_unpaid_image margin-top-md text-center">
                                    <img src=" {{asset('img/no-image.png')}} " id="edit_treasurer_unpaid_logo_sponsor" class="img-thumbnail" style="max-width:300px;">
                                </div>

                                <div class="col-md-12">
                                    <hr>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="edit_treasurer_unpaid_paid">
                                                Betaling ontvangen :
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                                <input class="bs-switch approved" type="checkbox"
                                                       name="payment_received"
                                                       id="edit_treasurer_unpaid_paid"
                                                       data-size="mini"
                                                       data-on-color="success"
                                                       data-off-color="danger"
                                                       data-on-text="Ja"
                                                       data-off-text="Nee"
                                                       value=1
                                                >
                                        </div>
                                    </div>

                                    <div class="row margin-top-md">
                                        <div class='col-md-3'>
                                            <label for="payment_received_at">
                                                Datum ontvangst :
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class='input-group date' id='payment_received_at'>

                                                    <input name="payment_received_at"
                                                           type='text' class="form-control"
                                                           data-format="yyyy-MM-dd hh:mm:ss">

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
                                    @lang('sponsors::board/buttons.modal_button_close')
                                </button>
                                <button id="edit_treasurer?unpaid_submit" type="submit" class="btn btn-success">
                                    @lang('didyouknow::board/buttons.modal_button_save')
                                </button>
                            </div>
                        </div>

                    </div>

                </form>

                </div>
            </div>
        </div>




