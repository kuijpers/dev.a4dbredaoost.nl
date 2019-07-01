    <div class="modal fade" id="edit_editor_approved" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

                <form id="edit_editor_approved_form"
                      name="edit_editor_approved"
                      class="edit_editor_approved"
                      method="post"
                      action="{{route('board.sponsors.publisher.edit')}}"
                      enctype="multipart/form-data" >

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

                                <input name="id" type="hidden" class="form-control span6" id="edit_editor_approved_id">

                                <div class="col-md-12 text-primary">
                                    <label for="editor_approved_title">
                                        <h5>
                                            @lang('sponsors::board/modals.modal_view_information_title')
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
                                            @lang('sponsors::board/modals.modal_view_information_body')
                                        </h5>
                                    </label>
                                </div>

                                <div class="col-md-12 edit_editor_approved_body">

                                    <textarea name="body" class="form-control summernote" rows="10" id="edit_editor_approved_body"></textarea>

                                </div>


                                <div class="col-md-12 form-group">
                                    <label for="edit_editor_approved_link" class="col-sm-2 control-label text-primary margin-top-md">
                                        <h5>
                                            Web site link:
                                        </h5>
                                    </label>
                                    <div class="col-sm-8  margin-top-md">
                                        <input type="text" name="sponsor_link" class="form-control" id="edit_editor_approved_link" placeholder="http(s):// Website link">
                                    </div>
                                    {{--<input name="link" type="text" class="form-control span6" id="edit_author_approved_link">--}}
                                </div>

                                <div class="col-md-12 edit_editor_image margin-top-md text-center">
                                    <img id="edit_editor_approved_show_logo" src=" {{asset('img/no-image.png')}} " class="img-thumbnail logo_sponsor" style="max-width:300px;">
                                </div>

                                <div class="form-group  col-md-10 col-md-offset-1 margin-top-md">
                                    <div class="input-group">

                                        {{--<input type="file" name="sponsor_logo">--}}

                                        <label class="input-group-btn">
                                        <span class="btn btn-default">
                                            Select new Logo <input type="file" name="sponsor_logo"  style="display: none;">
                                        </span>
                                        </label>
                                        <input name="sponsor_logo" id="edit_editor_approved_logo" type="text" class="form-control input-file" readonly placeholder="Upload logo...." >

                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <hr>
                                </div>

                                <div class="col-md-12 text-primary">

                                    <div class="col-md-5">
                                        <label for="author_approved">
                                            @lang('sponsors::board/modals.modal_change_editor')&nbsp;
                                        </label>
                                    </div>

                                    <div class="col-md-4">
                                        <input class="bs-switch" type="checkbox" checked="checked" disabled
                                               name="author_approved"
                                               id="author_approved"
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
                                        <label for="editor_approved">
                                            @lang('sponsors::board/modals.modal_change_publisher')
                                        </label>
                                    </div>

                                    <div class="col-md-4">

                                        <input class="bs-switch" type="checkbox" checked="checked" disabled
                                               name="editor_approved"
                                               id="editor_approved"
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

                                {{--
                                    NOTE: When this switch is set to yes a new div [#edit_editor_approved_approve_period_block]
                                    will show up on the page
                                --}}
                                <div class="col-md-12 text-primary">

                                    <div class="col-md-5" >
                                        <label for="approve_to_publish">
                                            @lang('sponsors::board/modals.modal_change_can_publish')
                                        </label>
                                        <br>
                                        <br>
                                    </div>

                                    <div class="col-md-4">

                                        <input class="bs-switch" type="checkbox"
                                               name="approve_to_publish"
                                               id="approve_to_publish"
                                               value="1"
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
                                {{--
                                    NOTE: End of the switch
                                 --}}

                                {{--
                                    NOTE: This div will show up when the above switch is checked
                                --}}

                                <div class="col-md-12 text-primary" id="approve_period_block">

                                    {{--
                                        NOTE: When this switch is set to yes a new div [#edit_editor_approved_approve_period_block]
                                        will show up on the page and the current div [#edit_editor_approved_approve_period_period]
                                        will fadeOut
                                    --}}
                                    <div class="col-md-7">
                                        De periode waarin de sponsor vermeld wordt op de website.
                                    </div>
                                    <div class="col-md-5">
                                        Van &nbsp;: <span id="show_publish_start_date">start date</span>
                                        <br>
                                        Tot &nbsp;: <span id="show_publish_end_date">end date</span>
                                    </div>

                                        <div class="col-md-5 margin-top-md" >
                                            <label for="approve_select_period">
                                                Moet deze daum aangepast worden?
                                            </label>
                                            <br>
                                            <br>
                                        </div>

                                        <div class="col-md-3 margin-top-md">
                                            <input class="bs-switch"
                                                   name="update_publish_period"
                                                   type="checkbox"
                                                   id="approve_select_period"
                                                   value="1"
                                                   data-size="mini"
                                                   data-on-color="success"
                                                   data-off-color="danger"
                                                   data-on-text="@lang('sponsors::board/buttons.modal_switch_on')"
                                                   data-off-text="@lang('sponsors::board/buttons.modal_switch_off')"
                                                   >
                                        </div>
                                    {{--
                                        NOTE: End of the switch
                                     --}}

                                    {{--
                                        NOTE: When above switch is checked yes this div [#edit_editor_approved_approve_period_period]
                                        will be shown
                                    --}}
                                    {{-- Period from - till --}}
                                    <div class="col-md-12 text-primary" id="approve_period_period">

                                        <div class="col-md-12 text-primary margin-bottom-md">
                                            Graag nieuwe periode aangeven:
                                        </div>

                                        <div class='col-md-5'>
                                            <div class="form-group">
                                                <label for="update_publish_period_start"> Van:</label>
                                                <div class='input-group date' id='approve_from'>

                                                    <input name="update_publish_period_start"
                                                           id="update_publish_period_start"
                                                           type='text'
                                                           class="form-control"
                                                           data-format="yyyy-MM-dd hh:mm:ss" />

                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar"></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class='col-md-5'>
                                            <div class="form-group">
                                                <label for="update_publish_period_end"> Tot:</label>
                                                <div class='input-group date' id='approve_till'>

                                                    <input name="update_publish_period_end"
                                                           id="update_publish_period_end"
                                                           type='text'
                                                           class="form-control"
                                                           data-format="yyyy-MM-dd hh:mm:ss" />

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
                                    @lang('sponsors::board/buttons.modal_button_cancel')
                                </button>
                                <button id="edit_editor_approved_submit" type="submit" class="btn btn-success">
                                    @lang('sponsors::board/buttons.modal_button_save')
                                </button>

                            </div>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
