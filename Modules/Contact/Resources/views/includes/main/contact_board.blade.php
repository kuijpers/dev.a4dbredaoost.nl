{{--{{$treasurer}}--}}

@isset($president)
    <address>
        <strong>
            <div class="text-success">
                @lang('contact::main/lang.contact_board_president')
            </div>
        </strong>
        <strong>{{$president->name}}</strong>
        <br>
        @if($president->show_address)
            @isset($president->address)
                {{$president->address}}
                <br>
            @endisset
            @isset($president->postcode)
                {{$president->postcode}}
                @isset($president->city)
                    ,
                @endisset
            @endisset
            @isset($president->city)
                {{$president->city}}
                <br>
            @endisset
        @endif
        @if($president->show_phone)
            @isset($president->phone)
                <abbr title="Telefoon">T:</abbr> {{$president->phone}}
                <br>
            @endisset
        @endif
        <a href="mailto:{{$president->email}}" class="text-success">{{$president->email}}</a>
    </address>
@endisset

@isset($vice_president)
    <address>
        <strong>
            <div class="text-success">
                @lang('contact::main/lang.contact_board_vicepresident')
            </div>
        </strong>
        <strong>{{$vice_president->name}}</strong>
        <br>
        @if($vice_president->show_address)
            @isset($vice_president->address)
                {{$vice_president->address}}
                <br>
            @endisset
            @isset($vice_president->postcode)
                {{$vice_president->postcode}}
                @isset($vice_president->city)
                    ,
                @endisset
            @endisset
            @isset($vice_president->city)
                {{$vice_president->city}}
                <br>
            @endisset
        @endif
        @if($vice_president->show_phone)
            @isset($vice_president->phone)
                <abbr title="Telefoon">T:</abbr> {{$vice_president->phone}}
                <br>
            @endisset
        @endif
        <a href="mailto:{{$vice_president->email}}" class="text-success">{{$vice_president->email}}</a>
    </address>
@endisset

@isset($secretary)
    <address>
    <strong>
        <div class="text-success">
            @lang('contact::main/lang.contact_board_secretary')
        </div>
    </strong>
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
    <a href="mailto:{{$secretary->email}}" class="text-success">{{$secretary->email}}</a>

    </address>
@endisset

@isset($treasurer)
    <address>
        <strong>
            <div class="text-success">
                @lang('contact::main/lang.contact_board_treasurer')
            </div>
        </strong>
        <strong>{{$treasurer->name}}</strong>
        <br>
        @if($treasurer->show_address)
            @isset($treasurer->address)
                {{$treasurer->address}}
                <br>
            @endisset
            @isset($treasurer->postcode)
                {{$treasurer->postcode}}
                @isset($treasurer->city)
                    ,
                @endisset
            @endisset
            @isset($treasurer->city)
                {{$treasurer->city}}
                <br>
            @endisset
        @endif
        @if($treasurer->show_phone)
            @isset($treasurer->phone)
                <abbr title="Telefoon">T:</abbr> {{$treasurer->phone}}
                <br>
            @endisset
        @endif
        <a href="mailto:{{$treasurer->email}}" class="text-success">{{$treasurer->email}}</a>

    </address>
@endisset