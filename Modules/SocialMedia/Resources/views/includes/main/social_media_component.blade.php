
{{--{{$social_media_items}}--}}

<div id="social_media_section" class="section-b row bg-success">
    <div class="social-media col-md-8 offset-md-2">
        <div class="card bg-success">
            <p class="card-text">
                @foreach($social_media_items as $social_media_item)

                    <a href="{{route('main.socialmedia.click', $social_media_item->slug)}}"
                       class="text-a4dbo card-link" title="Link naar {{$social_media_item->name}}"
                    style="text-decoration: none;" target="_blank">
                        <i class="{{$social_media_item->fa_class}}"></i>
                    </a>
                @endforeach

            </p>
        </div>
    </div>
</div>
