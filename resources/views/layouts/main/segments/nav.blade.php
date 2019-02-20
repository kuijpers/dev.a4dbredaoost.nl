<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand" href="{{ route('main.main.index') }}">
        <img src="{{ asset('img/logo-a4d.png') }}" width="35" height="35" class="d-inline-block align-top" alt="">
        A4D Breda Oost
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('main.main.index') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownWieZijnWij" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wie zijn wij</a>
                <div class="dropdown-menu" aria-labelledby="dropdownWieZijnWij">
                    <a class="dropdown-item" href="{{ route('main.organisation.index') }}">De organisatie</a>
                    <a class="dropdown-item" href="{{ route('main.board.index') }}">Het bestuur</a>
                    {{--<a class="dropdown-item" href="{{ route('main.timeline.index') }}">Tijdlijn</a>--}}
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('main.sponsors.index') }}">Sponsors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('main.news.index') }}">Nieuws</a>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('main.calendar.index') }}">Kalender</a>--}}
            {{--</li>--}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('main.didyouknow.index') }}">Wist u dat?</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownContact" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
                <div class="dropdown-menu" aria-labelledby="dropdownContact">
                    <a class="dropdown-item" href="{{ route('main.contact.index') }}">Mail ons</a>
                    <a class="dropdown-item" href="{{ route('main.faq.index') }}">Veelgestelde vragen</a>
                    <a class="dropdown-item" href="{{ route('main.privacy.index') }}">Privacyverklaring</a>
                </div>
            </li>
            {{--<li class="nav-item dropdown">--}}
                {{--<a class="nav-link dropdown-toggle" href="#" id="search-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zoeken</a>--}}
                {{--<div class="dropdown-menu search-drop" aria-labelledby="search-drop">--}}
                    {{--<form class="form-inline" method="POST" action="{{ route('main.search.index') }}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<input name="search" class="form-control mx-2 my-1" type="text" placeholder="Zoek op!">--}}
                        {{--<button type="submit" class="btn btn-light mx-2 my-1">Zoeken</button>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</li>--}}
        </ul>

        <ul class="nav navbar-nav justify-content-end">
            @if (Auth::check())
                <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('user.logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>

            @else
            {{--<li class="nav-item dropdown signin">--}}
                {{--<a class="nav-link dropdown-toggle" href="#" id="search-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inloggen</a>--}}
                {{--<div class="dropdown-menu dropdown-menu-right search-drop" aria-labelledby="search-drop">--}}
                    {{--<form class="form-signin" method="POST" action="{{ route('login') }}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--<h1 class="h3 mb-3 font-weight-normal text-center">Inloggen</h1>--}}

                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="sr-only">E-Mail Address</label>--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email adres" required autofocus>--}}


                            {{--<label for="login-password" class="sr-only">Password</label>--}}

                                {{--<input id="login-password" type="password" class="form-control" name="password" placeholder="Wachtwoord" required>--}}

                        {{--</div>--}}

                        {{--<div class="checkbox mb-3">--}}
                            {{--<label>--}}
                                {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                            {{--</label>--}}
                        {{--</div>--}}
                        {{--<button class="btn btn-lg btn-success btn-block" type="submit">Inloggen</button>--}}
                    {{--</form>--}}
                    {{--<div class="col-4 offset-2 text-center">--}}
                        {{--<button type="button" class="btn btn-link nav-link text-center" data-toggle="modal" data-target="#password_reset">Wachtwoord vergeten?</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<button type="button" class="btn btn-link nav-link" data-toggle="modal" data-target="#register">Registreren</button>--}}

            {{--</li>--}}
            @endif
        </ul>
    </div>
</nav>
