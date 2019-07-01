
{{-- Personal drafts--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author']))
    @include('sponsors::Board.information.tabs.draft')
@endif

{{--Author drafts--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
    @include('sponsors::Board.information.tabs.author')
@endif

{{--Editor--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'editor']))
    @include('sponsors::Board.information.tabs.editor')
@endif

{{--Publisher--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
    @include('sponsors::Board.information.tabs.publisher')
@endif

{{--Published--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher']))
    @include('sponsors::Board.information.tabs.published')
@endif

{{--Archived--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin']))
    @include('sponsors::Board.information.tabs.archive')
@endif

{{--New article--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author']))
    @include('sponsors::Board.information.tabs.new')
@endif