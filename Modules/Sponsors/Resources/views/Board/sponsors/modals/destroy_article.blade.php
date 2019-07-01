<div class="modal fade" id="destroy_article" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <div id="destroy-title">
                        Title
                        This line of text will not be vissible on the website.
                        This is where data will be placed using JS.
                    </div>
                </h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    <h4><i class="alert-ico fa fa-fw fa-ban"></i>
                        <strong>@lang('sponsors::board/modals.modal_destroy_title')&thinsp;</strong>
                    </h4>
                    @lang('sponsors::board/modals.modal_destroy_body')
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    @lang('sponsors::board/buttons.modal_button_cancel')
                </button>
                <a href="#" class="btn btn-danger btn-ok">
                    @lang('sponsors::board/buttons.modal_button_delete')
                </a>
            </div>
        </div>
    </div>
</div>
