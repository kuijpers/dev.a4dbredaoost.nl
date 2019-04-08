
{{-- Personal drafts--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author']))
    @include('sponsors::Board.sponsors.tabs.draft')
@endif

{{--Author drafts--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
    @include('sponsors::Board.sponsors.tabs.author')
@endif

{{--Editor--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'editor']))
    @include('sponsors::Board.sponsors.tabs.editor')
@endif

{{--Treasurer--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher' , 'treasurer']))
    @include('sponsors::Board.sponsors.tabs.treasurer')
@endif

{{--Publisher--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher']))
    @include('sponsors::Board.sponsors.tabs.publisher')
@endif

{{--Published--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher']))
    @include('sponsors::Board.sponsors.tabs.published')
@endif

{{--Garbage--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin']))
    @include('sponsors::Board.sponsors.tabs.garbage')
@endif

{{--Archived--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin']))
    @include('sponsors::Board.sponsors.tabs.archive')
@endif

{{--New article--}}
@if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author']))
    @include('sponsors::Board.sponsors.tabs.new')
@endif