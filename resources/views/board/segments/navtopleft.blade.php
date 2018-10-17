<ul class="nav navbar-nav navbar-left">
    <li><a href="{{ route('bootstrap/right/index') }}"><span>Dashboard</span></a></li>
    <li><a href="{{ route('bootstrap/right/inbox') }}"><span>Mailbox</span></a></li>
    <li class="dropdown active"><a class="dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>Pages&nbsp;<i class="caret"></i></span></a>
        <ul class="dropdown-menu">
            <li><a href="{{ route('bootstrap/right/products') }}"><span>Products</span></a></li>
            <li><a href="{{ route('bootstrap/right/orders') }}"><span>Orders</span></a></li>
            <li><a href="{{ route('bootstrap/right/users') }}"><span>Users</span></a></li>
            <li class="divider" role="separator"></li>
            <li><a href="{{ route('bootstrap/right/login') }}">Login</a></li>
            <li class="active"><a href="{{ route('bootstrap/right/blank') }}">Blank</a></li>
        </ul>
    </li>
</ul>