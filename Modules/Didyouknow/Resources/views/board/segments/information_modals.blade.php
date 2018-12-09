{{--Personal Drafts--}}
@include('didyouknow::board.information.modals.view_personal_drafts')
@include('didyouknow::board.information.modals.edit_personal_drafts')

{{--Author drafts--}}
@include('didyouknow::board.information.modals.view_author_drafts')

{{--Editor--}}
@include('didyouknow::board.information.modals.view_author_approved')
@include('didyouknow::board.information.modals.edit_author_approved')

{{--Publisher--}}
@include('didyouknow::board.information.modals.view_editor_approved')
@include('didyouknow::board.information.modals.edit_editor_approved')

{{--Published--}}
@include('didyouknow::board.information.modals.view_publisher_approved')
@include('didyouknow::board.information.modals.edit_publisher_approved')

{{--Archived--}}
@include('didyouknow::board.information.modals.view_archive')
@include('didyouknow::board.information.modals.edit_archive')

{{--Delete item--}}
@include('didyouknow::board.information.modals.delete_article')

{{--Destroy after deleted--}}
@include('didyouknow::board.information.modals.destroy_article')