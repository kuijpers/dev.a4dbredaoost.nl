{{--{{$curr_year}}--}}
<div id="footer-address" class="row footer-contact bg-success p-3">

    <div class="col-md-4 offset-md-1">
        <address>
            <strong>
                <div class="text-white">
                    {{$organisation->value_text}}
                </div>
            </strong>
            <br>
            <strong>
                <u>
                    Secretariaat
                </u>
            </strong>
            <br>
            <br>
            <strong>{{$secretary->name}}</strong>
            <br>
            @if($secretary->show_address)
                @isset($secretary->address)
                    {{$secretary->address}}
                    <br>
                @endisset
                @isset($secretary->postcode)
                    {{$secretary->postcode}}
                    @isset($secretary->city)
                        ,
                    @endisset
                @endisset
                @isset($secretary->city)
                    {{$secretary->city}}
                    <br>
                @endisset
            @endif
            @if($secretary->show_phone)
                @isset($secretary->phone)
                    <abbr title="Telefoon">T:</abbr> {{$secretary->phone}}
                    <br>
                @endisset
            @endif
            @if($secretary->show_phone)
                @isset($secretary->phone)
                    <abbr title="Telefoon">T:</abbr> {{$secretary->phone}}
                    <br>
                @endisset
            @endif
        </address>

        <address>
            <a href="mailto:{{$secretary->email}}">{{$secretary->email}}</a>
        </address>
    </div>


</div>

<div id="footer-copyright" class="row footer-copyright bg-success p-3">
    <div class="col-md-8 offset-md-2">
        De website is beschermd door copyright.
        <br>
        &copy; {{$founded}} - {{$curr_year}} {{$organisation->value_text}}
        <br>
        <br>
        <a href="{{ route('main.credits.index') }}" class="text-white">Credits</a>
    </div>
</div>