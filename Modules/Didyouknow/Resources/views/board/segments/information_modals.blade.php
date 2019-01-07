{{--Personal Drafts--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author']))
    @include('didyouknow::board.information.modals.view_personal_drafts')
    @include('didyouknow::board.information.modals.edit_personal_drafts')
@endif

{{--Author drafts--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
    @include('didyouknow::board.information.modals.view_author_drafts')
@endif

{{--Editor--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'editor']))
    @include('didyouknow::board.information.modals.view_author_approved')
    @include('didyouknow::board.information.modals.edit_author_approved')
@endif

{{--Publisher--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
    @include('didyouknow::board.information.modals.view_editor_approved')
    @include('didyouknow::board.information.modals.edit_editor_approved')
@endif

{{--Published--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher']))
    @include('didyouknow::board.information.modals.view_publisher_approved')
    @include('didyouknow::board.information.modals.edit_publisher_approved')
@endif

{{--Archived--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin']))
    @include('didyouknow::board.information.modals.view_archive')
    @include('didyouknow::board.information.modals.edit_archive')
@endif

{{--Delete item--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher']))
    @include('didyouknow::board.information.modals.delete_article')
@endif

{{--Destroy after deleted--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin']))
    @include('didyouknow::board.information.modals.destroy_article')
@endif