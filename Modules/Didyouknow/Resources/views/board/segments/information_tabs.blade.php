
{{-- Personal drafts--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author']))
    @include('didyouknow::board.information.tabs.draft')
@endif

{{--Author drafts--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
    @include('didyouknow::board.information.tabs.author')
@endif

{{--Editor--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'editor']))
    @include('didyouknow::board.information.tabs.editor')
@endif

{{--Publisher--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
    @include('didyouknow::board.information.tabs.publisher')
@endif

{{--Published--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher']))
    @include('didyouknow::board.information.tabs.published')
@endif

{{--Archived--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin']))
    @include('didyouknow::board.information.tabs.archive')
@endif

{{--New article--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author']))
    @include('didyouknow::board.information.tabs.new')
@endif