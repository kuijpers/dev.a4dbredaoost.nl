<div id="demo" class="carousel slide carousel-fade" data-ride="carousel" style="padding-right:3px; padding-top: 3px; display:inline-block; max-width:300px; height:210px; float:right;">

    <!-- Indicators -->

    <ul class="carousel-indicators">
        @for ($i = 0; $i < $news_item->images()->count(); $i++)
            <li data-target="#demo" data-slide-to="{{ $i }}" @if($i == 0) class="active"@endif></li>

        @endfor
    </ul>

    <div class="carousel-inner">
		<?php
		$count = 0;
		?>
        @foreach($news_item->images()->get() as $image)
			<?php $count++; ?>

            <div class="carousel-item @if($count == 1) active @endif">
                <a href="{{ asset('modules/news/album/'.$image->name ) }}"
                               data-toggle="lightbox" data-gallery="{{$news_item->title}}"
                               data-title="{{ $image->content }}"
                               data-footer="@lang('news::main/lang.carousel_photo_courtesy') {{ $news_item->images()->first()->photographer }}">
                    <img src="{{ asset('modules/news/album/'.$image->name ) }}" class="img-fluid rounded" alt="{{ $image->description }}">
                </a>
                {{--<img class="img-fluid rounded" src="{{ asset('modules/news/album/'.$image->name ) }}" alt="{{ $image->description }}" style="width:100%">--}}
            </div>
        @endforeach

    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>