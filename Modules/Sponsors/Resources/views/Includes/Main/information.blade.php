@foreach($sponsor_information as $information)

    <div class="col-md-8 offset-md-2 border-bottom">
        <h1>{{$information->title}}</h1>
    </div>

    <div class="col-md-8 offset-md-2 my-2">
    {!! $information->body !!}
    </div>

@endforeach