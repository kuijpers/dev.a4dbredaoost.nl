<script src="{{asset("/modules/didyouknow/js/didyouknow_information_ajax.js")}}"></script>

{{--
        * 	Set-up the data required to display in the modals
        * 	Data needs to be send as a JSON string via buttons
--}}

{{--Personal Drafts--}}
<script src="{{ Module::asset('didyouknow:js/ajaxCalls/personal_drafts.js') }}"></script>

{{--Editor--}}
<script src="{{ Module::asset('didyouknow:js/ajaxCalls/author_approved.js') }}"></script>

{{--Publisher--}}
<script src="{{ Module::asset('didyouknow:js/ajaxCalls/editor_approved.js') }}"></script>

{{--Published--}}
<script src="{{ Module::asset('didyouknow:js/ajaxCalls/publisher_approved.js') }}"></script>

{{--Archived--}}
<script src="{{ Module::asset('didyouknow:js/ajaxCalls/archived.js') }}"></script>

{{--New--}}
<script src="{{ Module::asset('didyouknow:js/ajaxCalls/new.js') }}"></script>
