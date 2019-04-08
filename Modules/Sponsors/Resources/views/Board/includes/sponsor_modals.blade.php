{{--Personal Drafts--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author']))
    @include('sponsors::Board.sponsors.modals.view_personal_drafts')
    @include('sponsors::Board.sponsors.modals.edit_personal_drafts')
@endif

{{--Author drafts--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
    {{--@include('sponsors::Board.sponsors.modals.view_author_drafts')--}}
@endif

{{--Editor--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'editor']))
    {{--@include('sponsors::Board.sponsors.modals.view_author_approved')--}}
    {{--@include('sponsors::Board.sponsors.modals.edit_author_approved')--}}
@endif

{{--Publisher--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
    {{--@include('sponsors::Board.sponsors.modals.view_editor_approved')--}}
    {{--@include('sponsors::Board.sponsors.modals.edit_editor_approved')--}}
@endif

{{--Published--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher']))
    {{--@include('sponsors::Board.sponsors.modals.view_publisher_approved')--}}
    {{--@include('sponsors::Board.sponsors.modals.edit_publisher_approved')--}}
@endif

{{--Archived--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin']))
    {{--@include('sponsors::Board.sponsors.modals.view_archive')--}}
    {{--@include('sponsors::Board.sponsors.modals.edit_archive')--}}
@endif

{{--Delete item--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher']))
    {{--@include('sponsors::Board.sponsors.modals.delete_article')--}}
@endif

{{--Destroy after deleted--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin']))
    {{--@include('sponsors::Board.sponsors.modals.destroy_article')--}}
@endif