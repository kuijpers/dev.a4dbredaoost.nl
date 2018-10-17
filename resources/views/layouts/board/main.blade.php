<!DOCTYPE html>
<html lang="en">
<!-- Start including header -->
@include('board.segments.header')
<!-- End including header-->


<body class="framed main-scrollable">
<div class="wrapper">
    <nav class="navbar navbar-static-top header-navbar">
        <!-- Start include Mobile Navigation -->
    @include('board.segments.navmobile')
    <!-- End include Mobile Navigation -->

        <!-- Start include Brand Navigation -->
    @include('board.segments.navbrand')
    <!-- End include Brand Navigation -->

        <div class="topnavbar">

            <!-- Start include Top Navigation Left-->
        @include('board.segments.navtopleft')
        <!-- End include Top Navigation Left -->

            <!-- Start include Top Navigation Right -->
        @include('board.segments.navtopright')
        <!-- End include Top Navigation Right -->

        </div>
    </nav>
    <div class="dashboard">
        <div class="sidebar">
            <div class="quickmenu">
                <div class="quickmenu__cont">
                    <div class="quickmenu__list">
                        <div class="quickmenu__item active">
                            <div class="fa fa-fw fa-home"></div>
                        </div>
                        <div class="quickmenu__item">
                            <div class="fa fa-fw fa-envelope-o"></div>
                        </div>
                        <div class="quickmenu__item new">
                            <div class="fa fa-fw fa-comments-o"></div>
                        </div>
                        <div class="quickmenu__item">
                            <div class="fa fa-fw fa-feed"></div>
                        </div>
                        <div class="quickmenu__item">
                            <div class="fa fa-fw fa-cog"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="scrollable scrollbar-macosx">
                <div class="sidebar__cont">
                    <!-- Start include Side Menu Pages -->
                @include('board.segments.sidemenupages')
                <!-- End include Side Menu Pages -->

                    <!-- Start include Side Menu Mail -->
                @include('board.segments.sidemenumail')
                <!-- End include Side Menu Mail -->

                    <!-- Start include Side Menu Messages -->
                @include('board.segments.sidemenumessages')
                <!-- End include Side Menu Messages -->

                    <!-- Start include Side Menu Activity -->
                @include('board.segments.sidemenuactivity')
                <!-- End include Side Menu Activity -->

                    <!-- Start include Side Menu Settings -->
                @include('board.segments.sidemenusettings')
                <!-- End include Side Menu Settings -->

                </div>
            </div>
        </div>
        <div class="main">
            <div class="main__scroll scrollbar-macosx">
                <div class="main__cont">
                    <div class="main-heading">
                        <div class="main-title">
                            <!-- Start include Breadcrumb -->
                        @include('board.segments.breadcrumb')
                        <!-- End include Breadcrumb -->

                        </div>
                        <div class="main-filter">
                            <!-- Start include Search -->
                        @include('board.segments.search')
                        <!-- End include Search -->

                        </div>
                    </div>

                    @yield('content')

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start include Footer -->
@include('board.segments.footer')
<!-- End include Footer -->

</body>
</html>