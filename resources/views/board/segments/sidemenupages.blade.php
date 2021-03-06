<div class="sidebar__menu">
    <div class="sidebar__utitle">Web Paginas</div>
    <ul class="nav nav-menu">
        {{-- HOME NAV --}}
        @if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ]))
        <li>
            <a href="#">
                <div class="nav-menu__ico">
                    <i class="fa fa-fw fa-home"></i>
                </div>
                <div class="nav-menu__text">
                    <span>Home</span>
                </div>
            </a>
        </li>
        @endif
        {{-- END HOME NAV --}}

        {{-- WHO ARE WE NAV --}}
        @if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ]))
        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-users"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Wie zijn wij ?</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    @if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ]))
                    <li>
                        <a href="#">De organisatie</a>
                    </li>
                    @endif

                    @if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ]))
                    <li>
                        <a href="#">Het bestuur</a>
                    </li>
                    @endif

                    @if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ]))
                    <li>
                        <a href="#">Tijdlijn</a>
                    </li>
                    @endif
                </ul>
            </li>
        </ul>
        @endif
        {{-- END WHO ARE WE NAV --}}

        {{--  SPONSORS NAV --}}
        @if($rpc->CanAccessAs([
                                'webmaster' ,
                                'member' ,
                                ]))
        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-handshake-o"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Sponsors</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    @if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ]))
                    <li>
                        <a href="{{ route('board.sponsors.index') }}">Sponsors</a>
                    </li>
                    @endif

                    @if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            'member' ,
                                            ]))
                    <li>
                        <a href="{{ route('board.sponsors.information.index') }}">Informatie</a>
                    </li>
                    @endif

                    @if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ]))
                    <li>
                        <a href="{{ route('board.sponsors.settings.index') }}">Settings</a>
                    </li>
                    @endif
                </ul>
            </li>
        </ul>
        @endif
        {{-- END SPONSOR NAV --}}

        {{-- NEWS NAV --}}
        @if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ]))
        <li>
            <a href="#">
                <div class="nav-menu__ico">
                    <i class="fa fa-fw fa-newspaper-o"></i>
                </div>
                <div class="nav-menu__text">
                    <span>Nieuws</span>
                </div>
            </a>
        </li>
        @endif
        {{-- END NEWS NAV --}}


        {{-- CALENDAR NAV --}}
        @if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ]))
        <li>
            <a href="#">
                <div class="nav-menu__ico">
                    <i class="fa fa-fw fa-calendar"></i>
                </div>
                <div class="nav-menu__text">
                    <span>Kalender</span>
                </div>
            </a>
        </li>
        @endif
        {{-- END CALENDAR NAV --}}


        {{-- DID YOU KNOW NAV--}}
        @if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ]))
        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-question"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Wist u dat</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    @if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ]))
                    <li>
                        <a href="#">Wist u datjes</a>
                    </li>
                    @endif

                    @if($rpc->CanAccessAs([
                                        'webmaster' ,
                                        //'member' ,
                                        ]))
                    <li>
                        <a href="{{ route('board.didyouknow.information.index') }}">Informatie</a>
                    </li>
                    @endif

                    @if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ]))
                    <li>
                        <a href="#">Settings</a>
                    </li>
                    @endif
                </ul>
            </li>
        </ul>
        @endif
        {{-- END DID YOU KNOW NAV--}}

        {{-- CONTACT NAV --}}
        @if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ]))
        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-envelope-open-o"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Contact</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    @if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ]))
                    <li>
                        <a href="#">Mail ons</a>
                    </li>
                    @endif

                    @if($rpc->CanAccessAs([
                                'webmaster' ,
                                //'member' ,
                                ]))
                    <li>
                        <a href="#">Contact details</a>
                    </li>
                    @endif


                    {{-- FAQ SECTION--}}
                    @if($rpc->CanAccessAs([
                            'webmaster' ,
                            //'member' ,
                            ]))
                    <li>
                        <a href="#">
                            <div class="nav-menu__ico">
                                <i class="fa fa-fw fa-quora"></i>
                            </div>
                            <div class="nav-menu__text">
                                <span>FAQ</span>
                            </div>
                            <div class="nav-menu__right">
                                <i class="fa fa-fw fa-angle-right arrow"></i>
                            </div>
                        </a>
                        <ul class="nav nav-menu__second collapse">
                            @if($rpc->CanAccessAs([
                                                    'webmaster' ,
                                                    //'member' ,
                                                    ]))
                            <li>
                                <a href="#">Informatie</a>
                            </li>
                            @endif

                            @if($rpc->CanAccessAs([
                                                    'webmaster' ,
                                                    //'member' ,
                                                    ]))
                            <li>
                                <a href="#">Stellingen</a>
                            </li>
                            @endif

                            @if($rpc->CanAccessAs([
                                                    'webmaster' ,
                                                    //'member' ,
                                                    ]))
                            <li>
                                <a href="#">Settings</a>
                            </li>
                            @endif
                        </ul>
                    </li>
                    @endif
                    {{-- END FAQ SECTION--}}

                    @if($rpc->CanAccessAs([
                                            'webmaster' ,
                                            //'member' ,
                                            ]))
                    <li>
                        <a href="#">Privacy verklaring</a>
                    </li>
                    @endif
                </ul>
            </li>
        </ul>
        @endif
        {{-- END CONTACT NAV --}}

    </ul>



    <div class="sidebar__utitle">Gebruikers</div>
    <ul class="nav nav-menu">
        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-users"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Web</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    <li>
                        <a href="#">Ingeschreven</a>
                    </li>
                    <li>
                        <a href="#">Nieuw</a>
                    </li>
                    <li>
                        <a href="#">Banned</a>
                    </li>
                    <li>
                        <a href="#">Authorisaties</a>
                    </li>
                </ul>
            </li>
        </ul>

        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-users"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Vrijwilligers</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    <li>
                        <a href="#">Geregistreerd</a>
                    </li>
                    <li>
                        <a href="#">Groepen</a>
                    </li>
                    <li>
                        <a href="#">Authorisaties</a>
                    </li>
                </ul>
            </li>

        </ul>

        <ul class="nav nav-menu">
            <li>
                <a href="#">
                    <div class="nav-menu__ico">
                        <i class="fa fa-fw fa-users"></i>
                    </div>
                    <div class="nav-menu__text">
                        <span>Bestuur</span>
                    </div>
                    <div class="nav-menu__right">
                        <i class="fa fa-fw fa-angle-right arrow"></i>
                    </div>
                </a>

                <ul class="nav nav-menu__second collapse">
                    <li>

                        <a href="{{ route('board.boardmembers.index') }}">Overzicht</a>

                    </li>
                    <li>
                        <a href="#">Groepen</a>
                    </li>
                    <li>
                        <a href="#">Authorisaties</a>
                    </li>
                </ul>
            </li>

        </ul>

    </ul>



    {{--<div class="sidebar__utitle">Original</div>--}}
    {{--<ul class="nav nav-menu">--}}
        {{--<li><a href="#">--}}
                {{--<div class="nav-menu__ico"><i class="fa fa-fw fa-star"></i></div>--}}
                {{--<div class="nav-menu__text"><span>Dashboard</span></div></a></li>--}}
        {{--<li><a href="#">--}}
                {{--<div class="nav-menu__ico"><i class="fa fa-fw fa-cube"></i></div>--}}
                {{--<div class="nav-menu__text"><span>Products</span></div></a></li>--}}
        {{--<li><a href="#">--}}
                {{--<div class="nav-menu__ico"><i class="fa fa-fw fa-envelope"></i></div>--}}
                {{--<div class="nav-menu__text"><span>Mailbox</span></div>--}}
                {{--<div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>--}}
            {{--<ul class="nav nav-menu__second collapse">--}}
                {{--<li><a href="#">Inbox</a></li>--}}
                {{--<li><a href="#">Sent</a></li>--}}
                {{--<li><a href="#">Compose</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        {{--<li><a href="#">--}}
                {{--<div class="nav-menu__ico"><i class="fa fa-fw fa-truck"></i></div>--}}
                {{--<div class="nav-menu__text"><span>Orders</span></div>--}}
                {{--<div class="nav-menu__right"><i class="badge badge-default">2</i></div></a></li>--}}
        {{--<li><a href="#">--}}
                {{--<div class="nav-menu__ico"><i class="fa fa-fw fa-user"></i></div>--}}
                {{--<div class="nav-menu__text"><span>Users</span></div></a></li>--}}
        {{--<li class="active opened"><a href="#">--}}
                {{--<div class="nav-menu__ico"><i class="fa fa-fw fa-folder-o"></i></div>--}}
                {{--<div class="nav-menu__text"><span>Other</span></div>--}}
                {{--<div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>--}}
            {{--<ul class="nav nav-menu__second collapse in">--}}
                {{--<li class="active"><a href="#">Blank</a></li>--}}
                {{--<li><a href="#">Login</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
    {{--</ul>--}}


    {{--<div class="sidebar__utitle">Navigation</div>--}}

        {{--<ul class="nav nav-menu">--}}
            {{--<li>--}}
                {{--<a href="#">--}}
                    {{--<div class="nav-menu__ico">--}}
                        {{--<i class="fa fa-fw fa-table"></i>--}}
                    {{--</div>--}}
                    {{--<div class="nav-menu__text">--}}
                        {{--<span>Multilevel 1</span>--}}
                    {{--</div>--}}
                    {{--<div class="nav-menu__right">--}}
                        {{--<i class="fa fa-fw fa-angle-right arrow"></i>--}}
                    {{--</div>--}}
                {{--</a>--}}

                {{--<ul class="nav nav-menu__second collapse">--}}
                    {{--<li>--}}
                        {{--<a href="#">Normal 1</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Normal 2</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">Normal 3</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="#">--}}
                            {{--<div class="nav-menu__ico">--}}
                                {{--<i class="fa fa-fw fa-table"></i>--}}
                            {{--</div>--}}
                            {{--<div class="nav-menu__text">--}}
                                {{--<span>Multilevel 2</span>--}}
                            {{--</div>--}}
                            {{--<div class="nav-menu__right">--}}
                                {{--<i class="fa fa-fw fa-angle-right arrow"></i>--}}
                            {{--</div>--}}
                        {{--</a>--}}
                        {{--<ul class="nav nav-menu__second collapse">--}}
                            {{--<li>--}}
                                {{--<a href="#">Second 1</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Second 2</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#">Second 3</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        {{--</ul>--}}
</div>