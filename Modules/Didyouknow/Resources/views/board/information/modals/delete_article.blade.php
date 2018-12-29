<div class="modal fade" id="delete_article" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    &nbsp;
                </h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <h4><i class="alert-ico fa fa-fw fa-ban"></i>
                        <strong>@lang('didyouknow::board/modals.modal_edit_title')&thinsp;</strong>
                    </h4>
                    @lang('didyouknow::board/modals.modal_edit_body')
                </div>
                <hr>
                <div class="modal-content">
                    <div class="padding-md">
                        <h4 class="delete_title">
                            Hier tekst
                        </h4>
                        <div class="delete_body margin-top-lg">
                            Test
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    @lang('didyouknow::board/buttons.modal_button_cancel')
                </button>
                <a href="#" class="btn btn-danger btn-ok">
                    @lang('didyouknow::board/buttons.modal_button_delete')
                </a>
            </div>
        </div>
    </div>
</div>
