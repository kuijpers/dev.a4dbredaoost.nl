<div class="sidebar__menu">
    <div class="sidebar__utitle">Pages</div>
    <ul class="nav nav-menu">
        <li><a href="{{ route('bootstrap/right/index') }}">
                <div class="nav-menu__ico"><i class="fa fa-fw fa-star"></i></div>
                <div class="nav-menu__text"><span>Dashboard</span></div></a></li>
        <li><a href="{{ route('bootstrap/right/products') }}">
                <div class="nav-menu__ico"><i class="fa fa-fw fa-cube"></i></div>
                <div class="nav-menu__text"><span>Products</span></div></a></li>
        <li><a href="#">
                <div class="nav-menu__ico"><i class="fa fa-fw fa-envelope"></i></div>
                <div class="nav-menu__text"><span>Mailbox</span></div>
                <div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>
            <ul class="nav nav-menu__second collapse">
                <li><a href="{{ route('bootstrap/right/inbox') }}">Inbox</a></li>
                <li><a href="{{ route('bootstrap/right/sent') }}">Sent</a></li>
                <li><a href="{{ route('bootstrap/right/compose') }}">Compose</a></li>
            </ul>
        </li>
        <li><a href="{{ route('bootstrap/right/orders') }}">
                <div class="nav-menu__ico"><i class="fa fa-fw fa-truck"></i></div>
                <div class="nav-menu__text"><span>Orders</span></div>
                <div class="nav-menu__right"><i class="badge badge-default">2</i></div></a></li>
        <li><a href="{{ route('bootstrap/right/users') }}">
                <div class="nav-menu__ico"><i class="fa fa-fw fa-user"></i></div>
                <div class="nav-menu__text"><span>Users</span></div></a></li>
        <li class="active opened"><a href="#">
                <div class="nav-menu__ico"><i class="fa fa-fw fa-folder-o"></i></div>
                <div class="nav-menu__text"><span>Other</span></div>
                <div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>
            <ul class="nav nav-menu__second collapse in">
                <li class="active"><a href="{{ route('bootstrap/right/blank') }}">Blank</a></li>
                <li><a href="{{ route('bootstrap/right/login') }}">Login</a></li>
            </ul>
        </li>
    </ul>
    <div class="sidebar__utitle">Template</div>
    <ul class="nav nav-menu">
        <li><a href="#">
                <div class="nav-menu__ico"><i class="fa fa-fw fa-th-large"></i></div>
                <div class="nav-menu__text"><span>UI Elements</span></div>
                <div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>
            <ul class="nav nav-menu__second collapse">
                <li><a href="{{ route('bootstrap/right/general') }}">General</a></li>
                <li><a href="{{ route('bootstrap/right/panels') }}">Panels</a></li>
                <li><a href="{{ route('bootstrap/right/tabs') }}">Tabs</a></li>
                <li><a href="{{ route('bootstrap/right/modals') }}">Modals</a></li>
                <li><a href="{{ route('bootstrap/right/buttons') }}">Buttons</a></li>
            </ul>
        </li>
        <li><a href="#">
                <div class="nav-menu__ico"><i class="fa fa-fw fa-clone"></i></div>
                <div class="nav-menu__text"><span>Forms</span></div>
                <div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>
            <ul class="nav nav-menu__second collapse">
                <li><a href="{{ route('bootstrap/right/controls') }}">Controls</a></li>
                <li><a href="{{ route('bootstrap/right/validation') }}">Validation</a></li>
                <li><a href="{{ route('bootstrap/right/texteditor') }}">Text Editor</a></li>
            </ul>
        </li>
        <li><a href="#">
                <div class="nav-menu__ico"><i class="fa fa-fw fa-table"></i></div>
                <div class="nav-menu__text"><span>Tables</span></div>
                <div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>
            <ul class="nav nav-menu__second collapse">
                <li><a href="{{ route('bootstrap/right/table_static') }}">Static</a></li>
                <li><a href="{{ route('bootstrap/right/table_sortable') }}">Sortable</a></li>
                <li><a href="{{ route('bootstrap/right/table_data') }}">DataTable</a></li>
            </ul>
        </li>
        <li><a href="{{ route('bootstrap/right/charts') }}">
                <div class="nav-menu__ico"><i class="fa fa-fw fa-pie-chart"></i></div>
                <div class="nav-menu__text"><span>Charts</span></div></a>
        </li>
    </ul>
    <div class="sidebar__utitle">Navigation</div>
    <ul class="nav nav-menu">
        <li><a href="#">
                <div class="nav-menu__ico"><i class="fa fa-fw fa-table"></i></div>
                <div class="nav-menu__text"><span>Multilevel 1</span></div>
                <div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>
            <ul class="nav nav-menu__second collapse">
                <li><a href="#">Normal 1</a></li>
                <li><a href="#">Normal 2</a></li>
                <li><a href="#">Normal 3</a></li>
                <li><a href="#">
                        <div class="nav-menu__ico"><i class="fa fa-fw fa-table"></i></div>
                        <div class="nav-menu__text"><span>Multilevel 2</span></div>
                        <div class="nav-menu__right"><i class="fa fa-fw fa-angle-right arrow"></i></div></a>
                    <ul class="nav nav-menu__second collapse">
                        <li><a href="#">Second 1</a></li>
                        <li><a href="#">Second 2</a></li>
                        <li><a href="#">Second 3</a></li>
                    </ul>
                </li>
                </li>
            </ul>

    </ul>
</div>