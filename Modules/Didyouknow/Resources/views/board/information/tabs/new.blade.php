<div class="tab-pane" id="new" role="tabpanel">
    <form id="new_article_form">
        <div class="row">
            <div class="form-group  col-md-10 col-md-offset-1">
                <label for="titel">
                    <strong>@lang('didyouknow::board/tabs.tab_new_title')</strong>
                </label>
                <input id="title" name="title" type="text" class="form-control" placeholder="@lang('didyouknow::board/tabs.tab_new_title')">
            </div>
        </div>

        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <hr>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-10 col-md-offset-1">
                <label for="new_article"><strong>@lang('didyouknow::board/tabs.tab_new_information')</strong></label>

                {{--<div id="new_article" name="body"></div>--}}

                <textarea id="new_article" name="body" class="form-control summernote" placeholder="@lang('didyouknow::board/tabs.tab_new_information')" rows="10"></textarea>

            </div>
        </div>

        <div class="row">
            <div class="form-group  col-md-10 col-md-offset-1 text-right">
                <br>
                <button id="live_preview" type="submit" class="btn btn-warning btn-sm">
                    @lang('didyouknow::board/buttons.tab_new_button_live_preview')
                </button>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <hr>
            </div>

        </div>

        <div class="row">
            <div class="form-group  col-md-10 col-md-offset-1">

                <div class="row">
                    <div class="col-md-3">

                        <label>
                            <input type="checkbox" id="selectall_approved">
                            @lang('didyouknow::board/general.checkbox_check_all')
                        </label>

                    </div>

                    <div class="col-md-3">

                        <label>
                            <input id="author_approved" name="approve[]" class="approved" type="checkbox" value="author_approved">
                            @lang('didyouknow::board/general.checkbox_author_approval')
                        </label>

                    </div>
                    <div class="col-md-3">

                        <label>
                            <input id="editor_approved" name="approve[]" class="approved" type="checkbox" value="editor_approved">
                            @lang('didyouknow::board/general.checkbox_editor_approval')
                        </label>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <hr>
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-10 col-md-offset-1">
                <button id="submit_new" type="button" class="btn btn-success">
                    @lang('didyouknow::board/buttons.modal_button_submit')
                </button>
            </div>
        </div>
    </form>
</div>