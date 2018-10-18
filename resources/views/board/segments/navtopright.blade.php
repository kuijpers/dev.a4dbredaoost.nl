<ul class="userbar nav navbar-nav">
    <li class="dropdown">
        <a class="userbar__settings dropdown-toggle" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            <div class="sidebar__utitle">{{ Auth::user()->name }}</div>
            <li><a href="#"><i class="fa fa-user-circle-o"></i>&nbsp; Profile</a></li>
            <li><a href="#"><i class="fa fa-cogs"></i>&nbsp; Settings</a></li>
            <li>
                <a href="{{ route('volunteer.logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>&nbsp; Log Out
                </a>
                <form id="logout-form" action="{{ route('board.logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
</ul>