<div class="panel panel-warning">

    <div class="panel-heading">
        <h3 class="panel-title">
            @lang('sponsors::board/general.tab_settings').
        </h3>
    </div>

    <div class="panel-body">

        <div class="row">

            <div class="col-md-4">
                @lang('sponsors::board/general.tab_settings_title_visible') : &nbsp;
                <input class="bs-switch" type="checkbox"
                       name="settings_title_switch"
                       id="settings_title_switch"
                       data-size="mini"
                       data-on-color="success"
                       data-off-color="danger"
                       data-on-text="@lang('sponsors::board/buttons.modal_switch_on')"
                       data-off-text="@lang('sponsors::board/buttons.modal_switch_off')"
                       @if($title_setting->value_bool == 1) checked @endif
                >
            </div>

            <div class="col-md-4">
                @lang('sponsors::board/general.tab_settings_info_visible') : &nbsp;
                <input class="bs-switch" type="checkbox"
                       name="settings_info_switch"
                       id="settings_info_switch"
                       data-size="mini"
                       data-on-color="success"
                       data-off-color="danger"
                       data-on-text="@lang('sponsors::board/buttons.modal_switch_on')"
                       data-off-text="@lang('sponsors::board/buttons.modal_switch_off')"
                       @if($body_setting->value_bool == 1) checked @endif
                >
            </div>

        </div>

    </div>

</div>