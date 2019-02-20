<div class="container">

    <div class="row">

        @foreach($sponsors as $sponsor)

        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">

                @if($sponsor->with_package()->image_field)
                    @if($sponsor->with_package()->linked_image)
                        <a href="{{route('main.sponsors.click', $sponsor->with_link()->slug)}}" target="_blank">
                            <img class="card-img-top img-thumbnail" src="{{ asset('modules/sponsors/img').'/'.$sponsor->with_image()->name }}" alt="{{$sponsor->description}}" >
                        </a>
                    @else
                        <img class="card-img-top img-thumbnail" src="{{ asset('modules/sponsors/img/httpwwwweilustnl1539476413.jpg') }}" alt="{{$sponsor->description}}" >
                    @endif

                @endif


                <div class="card-body">

                     @if($sponsor->with_package()->title_field)

                        @if($sponsor->with_package()->linked_title)
                        <h5 class="card-title">
                            <a href="{{route('main.sponsors.click', $sponsor->with_link()->slug)}}" target="_blank">{{$sponsor->title}}</a>
                        </h5>
                        @else
                             <h5 class="card-title">{{$sponsor->title}}</h5>
                        @endif

                    @endif

                    @if($sponsor->with_package()->text_field)
                    <p class="card-text">
                        {!! $sponsor->body !!}
                    </p>
                    @endif



                </div>

                @if($sponsor->with_package()->footer_field)

                <div class="card-footer">
                    <p class="card-text">
                        @if($sponsor->with_package()->linked_footer)
                        <a href="{{route('main.sponsors.click', $sponsor->with_link()->slug)}}" target="_blank">{{$sponsor->title}}</a>
                        @else
                            {{$sponsor->title}}
                        @endif
                    </p>
                </div>

                @endif


            </div>
        </div>

        @endforeach

    </div>
    <!-- /.row -->
</div>
<!-- /.container -->