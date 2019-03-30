<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title">
            {{ __('board_member_profile.your_workgroups') }}
        </h3>
    </div>
    <div class="panel-body">
        <div class="col-md-12">

            {{--@if(empty(Auth::user()->workgroups))--}}

            {{ __('board_member_profile.your_workgroups_empty') }}

            {{--@else--}}
            {{--<ul>--}}
                {{--<li>--}}
                    {{--Social Media--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--AVG--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--Routes--}}
                {{--</li>--}}
                {{--<li>--}}
                    {{--Werkvoorbereiding--}}
                {{--</li>--}}
            {{--</ul>--}}

            {{--@endif--}}
        </div>

    </div>
</div>