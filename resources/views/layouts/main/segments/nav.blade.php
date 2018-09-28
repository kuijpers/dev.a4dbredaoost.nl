<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/logo-a4d.png') }}" width="35" height="35" class="d-inline-block align-top" alt="">
        A4D Breda Oost
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdownWieZijnWij" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Wie zijn wij</a>
                <div class="dropdown-menu" aria-labelledby="dropdownWieZijnWij">
                    <a class="dropdown-item" href="#">De organisatie</a>
                    <a class="dropdown-item" href="#">Het bestuur</a>
                    <a class="dropdown-item" href="#">Tijdlijn</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sponsors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Nieuws</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kalender</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Wist u dat?</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownContact" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact</a>
                <div class="dropdown-menu" aria-labelledby="dropdownContact">
                    <a class="dropdown-item" href="#">Mail ons</a>
                    <a class="dropdown-item" href="#">Veelgestelde vragen</a>
                    <a class="dropdown-item" href="#">Privacyverklaring</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="search-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zoeken</a>
                <div class="dropdown-menu search-drop" aria-labelledby="search-drop">
                    <form class="form-inline" method="POST" action="#">
                        {{ csrf_field() }}
                        <input name="search" class="form-control mx-2 my-1" type="text" placeholder="Zoek op!">
                        <button type="submit" class="btn btn-light mx-2 my-1">Zoeken</button>
                    </form>
                </div>
            </li>
        </ul>

        <ul class="nav navbar-nav justify-content-end">
            <li class="nav-item dropdown signin">
                <a class="nav-link dropdown-toggle" href="#" id="search-drop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inloggen</a>
                <div class="dropdown-menu dropdown-menu-right search-drop" aria-labelledby="search-drop">
                    <form class="form-signin">
                        <h1 class="h3 mb-3 font-weight-normal text-center">Inloggen</h1>
                        <label for="inputEmail" class="sr-only">Email adres</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email adres" required autofocus>
                        <label for="inputPassword" class="sr-only">Wachtwoord</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Wachtwoord" required>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Onthouden
                            </label>
                        </div>
                        <button class="btn btn-lg btn-success btn-block" type="submit">Inloggen</button>
                    </form>
                    <div class="col-4 offset-2 text-center">
                        <button type="button" class="btn btn-link nav-link text-center" data-toggle="modal" data-target="#password_reset">Wachtwoord vergeten?</button>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-link nav-link" data-toggle="modal" data-target="#register">Registreren</button>

            </li>
        </ul>
    </div>
</nav>