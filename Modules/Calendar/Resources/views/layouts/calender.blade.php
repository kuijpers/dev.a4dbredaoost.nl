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


<body class=" calender">
@component('layouts.main.components.session-alert')
@endcomponent
<div class="container container-fluid">
    <main role="main">

        @yield('content')

    </main>


</div>

    @include('layouts.main.segments.jsbottom')

    <!-- Custom js for this page -->
    @yield('jsbottom')

</body>
</html>
