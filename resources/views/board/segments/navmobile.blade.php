<div class="header-navbar-mobile">
    <div class="header-navbar-mobile__menu">
        <button class="btn" type="button"><i class="fa fa-bars"></i></button>
    </div>

    <div class="header-navbar-mobile__title"><span>@yield('title')</span></div>
    <div class="header-navbar-mobile__settings dropdown"><a class="btn dropdown-toggle" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li>
                <a href="{{ route('board.member.profile') }}">
                    <i class="fa fa-user-circle-o"></i>
                    {{ __('nav_overall.board_member_profile_nav') }}
                </a>
            </li>

            <li><a href="{{ route('board.member.settings') }}">
                    <i class="fa fa-cogs"></i>
                    &nbsp; {{ __('nav_overall.board_member_settings_nav') }}
                </a>
            </li>
            <li>
                <a href="{{ route('board.logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>
                    &nbsp; {{ __('nav_overall.board_member_logout_nav') }}
                </a>
                <form id="logout-form" action="{{ route('board.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

        </ul>
    </div>
</div>