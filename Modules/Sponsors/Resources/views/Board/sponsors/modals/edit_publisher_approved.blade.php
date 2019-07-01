    <div class="modal fade" id="edit_publisher_approved" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-header">
                            <h4 class="modal-title text-danger">
                                @lang('sponsors::board/modals.modal_view_title_published')
                            </h4>
                        </div>
                    </div>

                </div>

                <form id="edit_publisher_approved"
                      name="edit_publisher_approved"
                      class="edit_publisher_approved"
                      method="POST"
                      action="{{route('board.sponsors.published.edit')}}" >

                    {{csrf_field()}}

                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-title-message">
                            <h5 class="text-primary">
                                @lang('sponsors::board/modals.modal_view_announcement')
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
                            @lang('sponsors::board/modals.modal_change_alert_success')
                        </div>
                    </div>

                    <div id="modal_update_fail" class="col-md-8 col-md-offset-2" style="display:none;">
                        <div id="modal_update_fail_alert" class="alert alert-danger alert-dismissible" role="alert">
                            <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <i class="alert-ico fa fa-fw fa-ban"></i>
                            @lang('sponsors::board/modals.modal_change_alert_fail')
                        </div>
                    </div>

                </div>


                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-body">

                            <input name="id" type="hidden" class="form-control span6" id="edit_publisher_approved_id">

                            <div class="col-md-12 text-primary">
                                <label for="edit_publisher_approved_title">
                                    <h5>
                                        @lang('sponsors::board/modals.modal_view_information_title')
                                    </h5>
                                </label>
                            </div>
                            <div class="col-md-12 edit_publisher_approved_title" id="edit_publisher_approved_title">
                                Title
                                This line of text will not be vissible on the website.
                                This is where data will be placed using JS.
                                <hr>
                            </div>

                            <div class="col-md-12">
                                <hr>
                            </div>

                            <div class="col-md-12 text-primary">
                                <label for="edit_publisher_approved_body">
                                    <h5>
                                        @lang('sponsors::board/modals.modal_view_information_body')
                                    </h5>
                                </label>
                            </div>
                            <div class="col-md-12 edit_publisher_approved_body" id="edit_publisher_approved_body">
                                Body
                                This line of text will not be vissible on the website.
                                This is where data will be placed using JS.
                            </div>

                            <div id="edit_publisher_link">
                                <div class="col-md-12 text-primary">
                                    <h5>
                                        @lang('sponsors::board/modals.modal_view_information_link')
                                    </h5>
                                </div>

                                <div class="col-md-12 edit_publisher_approved_link" id="edit_publisher_approved_link">
                                    <a href="weblink" target="_blank" id="edit_publisher_approved_link_sponsor">
                                        weblink
                                    </a>
                                </div>
                            </div>

                            <div class="col-md-12 text-primary">
                                <h5>
                                    @lang('sponsors::board/modals.modal_view_information_logo')
                                </h5>
                            </div>

                            <div class="col-md-12 edit_publisher_approved_image margin-top-md text-center">
                                <img src=" {{asset('img/no-image.png')}} " id="edit_publisher_approved_logo_sponsor" class="img-thumbnail" style="max-width:300px;">
                            </div>

                            <div class="col-md-12">
                                <hr>

                                <div class="row">
                                    <div id="edit_publisher_approved_unpaid_id" class="col-md-6" style="display: none">
                                        {{--Display div--}}
                                        <label>
                                            Betaling ontvangen :
                                            <input class="bs-switch payment_received" type="checkbox"
                                                   name="payment_received"
                                                   id="edit_publisher_approved_unpaid"
                                                   data-size="mini"
                                                   data-on-color="success"
                                                   data-off-color="danger"
                                                   data-on-text="Ja"
                                                   data-off-text="Nee"
                                                   disabled
                                            >
                                        </label>
                                    </div>
                                    {{-- Do not show div--}}
                                    <div id="edit_publisher_approved_paid_id" class="col-md-6" style="display: none">
                                        <label>
                                            Betaling ontvangen :
                                            <input class="bs-switch payment_received" type="checkbox"
                                                   name="payment_received"
                                                   id="edit_publisher_approved_paid"
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
                                    @lang('sponsors::board/modals.modal_view_approved_author')
                                </div>
                                <div class="col-md-4 edit_publisher_approved_author">
                                    Author
                                    This line of text will not be vissible on the website.
                                    This is where data will be placed using JS.Hier komt de naam van de auteur te staan en
                                    deze word door JS aangepast en is dus niet zichtbaar op de pagina.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-4 text-primary">
                                    @lang('sponsors::board/modals.modal_view_approved_editor')
                                </div>
                                <div class="col-md-4 edit_publisher_approved_editor">
                                    Editor
                                    This line of text will not be vissible on the website.
                                    This is where data will be placed using JS.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-4 text-primary">
                                    @lang('sponsors::board/modals.modal_view_approved_publisher')
                                </div>
                                <div class="col-md-4 edit_publisher_approved_publisher">
                                    Publisher
                                    This line of text will not be vissible on the website.
                                    This is where data will be placed using JS.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <hr>
                            </div>

                            <div class="col-md-12 text-primary">

                                <div class="col-md-5">
                                    <label for="edit_publisher_approved_editor_published">
                                        @lang('sponsors::board/modals.modal_change_editor')&nbsp;
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <input class="bs-switch" type="checkbox" checked="checked" disabled
                                           name="editor_approval"
                                           id="edit_publisher_approved_editor_published"
                                           data-size="mini"
                                           data-on-color="success"
                                           data-off-color="danger"
                                           data-on-text="@lang('sponsors::board/buttons.modal_switch_on')"
                                           data-off-text="@lang('sponsors::board/buttons.modal_switch_off')"
                                    >
                                    <br>
                                    <br>
                                </div>

                            </div>

                            <div class="col-md-12 text-primary">

                                <div class="col-md-5">
                                    <label for="edit_publisher_approved_publisher_published">
                                        @lang('sponsors::board/modals.modal_change_publisher')&nbsp;
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <input class="bs-switch" type="checkbox" checked="checked" disabled
                                           name="publisher_approval"
                                           id="edit_publisher_approved_publisher_published"
                                           data-size="mini"
                                           data-on-color="success"
                                           data-off-color="danger"
                                           data-on-text="@lang('sponsors::board/buttons.modal_switch_on')"
                                           data-off-text="@lang('sponsors::board/buttons.modal_switch_off')"
                                    >
                                    <br>
                                    <br>
                                </div>

                            </div>

                            <div class="col-md-12 text-primary">

                                <div class="col-md-5" >
                                    <label for="publish_approved">
                                        @lang('sponsors::board/modals.modal_change_can_publish')
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
                                           data-on-text="@lang('sponsors::board/buttons.modal_switch_on')"
                                           data-off-text="@lang('sponsors::board/buttons.modal_switch_off')"
                                    >
                                    <br>
                                    <br>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="col-md-4 text-primary">
                                    @lang('sponsors::board/modals.modal_view_publish_from'):
                                </div>
                                <div class="col-md-4 edit_publisher_approved_start" id="show_publish_start_date">
                                    Start date
                                    This line of text will not be vissible on the website.
                                    This is where data will be placed using JS.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-4 text-primary">
                                    @lang('sponsors::board/modals.modal_view_publish_till'):
                                </div>
                                <div class="col-md-4 edit_publisher_approved_end" id="show_publish_end_date">
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
                                @lang('sponsors::board/buttons.modal_button_cancel')
                            </button>
                            <button id="edit_publisher_approved_submit" type="submit" class="btn btn-success" disabled>
                                @lang('sponsors::board/buttons.modal_button_save')
                            </button>

                        </div>
                    </div>

                </div>
                </form>
            </div>
        </div>
    </div>




