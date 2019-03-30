<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title">
            {{ __('board_member_settings.your_dashboard_settings') }}
        </h3>
    </div>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label">
                {{ __('board_member_settings.your_dashboard_settings_theme') }} :
            </label>
            <div class="col-sm-6">
                <select id="select_theme" class="selectpicker form-control" name="select_theme">
                    <option value="light" @if($settings['boardmembers_theme'] == 'light') selected @endif >Light</option>
                    {{--<option value="light" @if($settings->boardmembers_theme == 'gray') selected @endif >Gray</option>--}}
                    <option value="dark" @if($settings['boardmembers_theme'] == 'dark') selected @endif >Dark</option>
                    <option value="lilac" @if($settings['boardmembers_theme'] == 'lilac') selected @endif >Lilac</option>
                </select>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-4 control-label text-left">
                {{ __('board_member_settings.your_dashboard_settings_language') }} :
            </label>
            <div class="col-sm-6">
                <div id="select_language"
                     data-input-name="language"
                     @if(isset($settings->boardmembers_language))
                     data-selected-country="{{$settings->boardmembers_language}}"
                     @else
                     data-selected-country="nl"
                     @endif

                     data-button-size="btn-md btn-block"
                     data-button-type="btn-default"
                     data-scrollable-height="250px">
                </div>
            </div>
        </div>
    </div>

    {{--<div class="panel-body">--}}
        {{--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.--}}
           {{--Vestibulum tincidunt est vitae ultrices accumsan.--}}
           {{--Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.--}}
        {{--</p>--}}
    {{--</div>--}}
</div>