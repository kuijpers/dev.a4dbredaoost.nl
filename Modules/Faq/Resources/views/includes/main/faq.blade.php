
@foreach($faq_categories as $faq_categorie)
<div class="card">
    <div class="card-body">
        <h4 class="card-title">{{$faq_categorie->name}}</h4>
    </div>

    {{--{{$faq_categorie->faqs()->count()}}--}}

    @foreach($faq_categorie->faqs()->get() as $faq)
        <ul class="list-group list-group-flush">
            <li class="list-group-item list-group-item-action list-group-item-secondary">
                <strong>V:</strong>
                {{$faq->title}}
            </li>
            <li class="list-group-item list-group-item-action list-group-item-light">
                <strong>A:</strong>
                {!! $faq->content !!}
            </li>
            @if($loop->iteration == round($faq_categorie->faqs()->count()/2))
                <li class="list-group-item text-center">
                    <img src="{{ asset($faq_images[array_rand($faq_images)]) }}" class="img-thumbnail">
                </li>
            @endif
        </ul>
    @endforeach
</div>

    @endforeach