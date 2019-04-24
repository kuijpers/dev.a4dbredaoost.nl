{{--
        * 	Set-up the data required to display in the modals
        * 	Data needs to be send as a JSON string via buttons
--}}

{{--Personal Drafts--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author']))
    <script src="{{ Module::asset('sponsors:js/modals/sponsors/personal_drafts.js') }}"></script>
@endif

{{--Author drafts--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
    <script src="{{ Module::asset('sponsors:js/modals/sponsors/author_drafts.js') }}"></script>
@endif

{{--Editor--}}
{{--@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'editor']))--}}
    {{--<script src="{{ Module::asset('sponsors:js/modals/sponsors/author_approved.js') }}"></script>--}}
{{--@endif--}}

{{--Publisher--}}
{{--@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))--}}
    {{--<script src="{{ Module::asset('sponsors:js/modals/sponsors/editor_approved.js') }}"></script>--}}
{{--@endif--}}

{{--Published--}}
{{--@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher']))--}}
    {{--<script src="{{ Module::asset('sponsors:js/modals/sponsors/publisher_approved.js') }}"></script>--}}
{{--@endif--}}

{{--Archived--}}
{{--@if($rpc->CanAccessAs(['webmaster' , 'admin']))--}}
    {{--<script src="{{ Module::asset('sponsors:js/modals/sponsors/archived.js') }}"></script>--}}
{{--@endif--}}

{{--Delete item--}}
{{--@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher']))--}}
    {{--<script src="{{ Module::asset('sponsors:js/modals/sponsors/delete_article.js') }}"></script>--}}
{{--@endif--}}

{{--Destroy after deleted--}}
{{--@if($rpc->CanAccessAs(['webmaster' , 'admin']))--}}
    {{--<script src="{{ Module::asset('sponsors:js/modals/sponsors/destroy.js') }}"></script>--}}
{{--@endif--}}

{{--New article--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author']))
    <script src="{{ Module::asset('sponsors:js/modals/sponsors/new_article.js') }}"></script>
@endif


{{--Helper function--}}
<script src="{{ Module::asset('sponsors:js/modals/sponsors/modal_helpers.js') }}"></script>
