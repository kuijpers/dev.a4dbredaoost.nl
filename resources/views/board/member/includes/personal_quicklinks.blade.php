
<div class="panel panel-success">
    <div class="panel-heading">
        <h3 class="panel-title">
            {{ __('board_member_profile.your_quicklinks') }}
        </h3>
    </div>
    <div class="panel-body">

        {{--@if(empty(Auth::user()->quicklinks))--}}

        <p>
            {{ __('board_member_profile.your_quicklinks_empty') }}
        </p>
        {{--@else--}}
        {{--<p>--}}
            {{--{{ __('board_member_profile.your_quicklinks_comment') }}--}}
        {{--</p>--}}

        {{--<p>--}}
        {{--<table class="table table-striped table-hover" cellspacing="0" width="100%">--}}
            {{--<tbody>--}}
            {{--<tr>--}}
                {{--<td><a href="#">W: Tijdlijn</a></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><a href="#">W: Sponsors</a></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><a href="#">W: Nieuws</a></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><a href="#">V: Vrijwilligers</a></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><a href="#">V: Toekenning</a></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><a href="#">B: Deelnemers</a></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><a href="#">B: Vrijwillligers</a></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><a href="#">B: Leden</a></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><a href="#">B: Werkgroep Social Media</a></td>--}}
            {{--</tr>--}}
            {{--<tr>--}}
                {{--<td><a href="#">B: Overzicht werkgroepen</a></td>--}}
            {{--</tr>--}}
            {{--</tbody>--}}
        {{--</table>--}}
        {{--@endif--}}
        {{--</p>--}}

    </div>
</div>