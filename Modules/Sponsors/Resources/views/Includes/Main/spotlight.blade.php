<div class="col-md-8 offset-md-2 col-sm-12 my-5">

    <div class="card text-center">
        <div class="card-header text-white bg-success">
            <h3>
                <i class="fas fa-sun fa-spin text-warning"></i>
                @lang('sponsors::main/lang.index_spotlight')
                <i class="fas fa-sun fa-spin text-warning"></i>
            </h3>
        </div>
        <div class="card-body">
            <h5 class="card-title text-a4dbo">{{$sponsor_spotlight->title}}</h5>
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <a href="{{route('main.sponsors.click', $sponsor_spotlight->with_link()->slug)}}" target="_blank">
                        {{--<img class="card-img-top img-thumbnail" src="{{ asset('modules/sponsors/img').'/'.$sponsor_spotlight->with_image()->name }}" alt="{{$sponsor_spotlight->description}}" >--}}
                        <img class="card-img-top img-thumbnail" src="{{ asset('storage/'.$sponsor_spotlight->with_image()->name) }}" alt="{{$sponsor_spotlight->description}}" >
                    </a>
                </div>

                <div class="col-md-6 col-sm-12 text-a4dbo">
                    {!! $sponsor_spotlight->body !!}
                </div>

            </div>
        </div>
        <div class="card-footer text-white bg-success">
            <a class="text-white text-bold" href="{{route('main.sponsors.click', $sponsor_spotlight->with_link()->slug)}}" target="_blank">{{$sponsor_spotlight->title}}</a>
        </div>
    </div>

</div>