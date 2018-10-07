<!doctype html>
<html lang="en">
<head>

    @include('layouts.main.segments.meta')

    @include('layouts.main.segments.css')

    @include('layouts.main.segments.jstop')

    <!-- Custom styles for this page -->
    @yield('css')

    <!-- Custom js for this page -->
    @yield('jstop')

    <title>@yield('title')</title>

</head>


{{-- Include modals--}}

@include('main.modals.register')

@include('main.modals.password_reset')

<body>
@component('layouts.main.components.session-alert')
@endcomponent
<header>

    @include('layouts.main.segments.nav')

</header>

<div class="container-fluid">
    <main role="main">

        @yield('content')

    </main>


    <footer class="footer">

        @include('layouts.main.segments.footer')

    </footer>
</div>

    @include('layouts.main.segments.jsbottom')

    <!-- Custom js for this page -->
    @yield('jsbottom')

</body>
</html>
