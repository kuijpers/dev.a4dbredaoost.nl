{{--{{$faq_information}}--}}

<div class="col-12 mb-5">
    @foreach($faq_information as $faq_info)
        <h4>{{$faq_info->title}}</h4>
        {!! $faq_info->content  !!}
    @endforeach
</div>