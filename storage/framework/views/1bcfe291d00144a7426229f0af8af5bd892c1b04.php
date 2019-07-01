<!DOCTYPE html>
<html lang="en">
<!-- Start including header -->
<?php echo $__env->make('board.segments.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- End including header-->
<?php echo $__env->make('board.components.session-alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<body class="framed main-scrollable">


<div class="wrapper">
    <nav class="navbar navbar-static-top header-navbar">
        <!-- Start include Mobile Navigation -->
    <?php echo $__env->make('board.segments.navmobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- End include Mobile Navigation -->

        <!-- Start include Brand Navigation -->
    <?php echo $__env->make('board.segments.navbrand', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- End include Brand Navigation -->

        <div class="topnavbar">

            <!-- Start include Top Navigation Left-->
        <?php echo $__env->make('board.segments.navtopleft', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- End include Top Navigation Left -->

            <!-- Start include Top Navigation Right -->
        <?php echo $__env->make('board.segments.navtopright', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                <?php echo $__env->make('board.segments.sidemenupages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- End include Side Menu Pages -->

                    <!-- Start include Side Menu Mail -->
                <?php echo $__env->make('board.segments.sidemenumail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- End include Side Menu Mail -->

                    <!-- Start include Side Menu Messages -->
                <?php echo $__env->make('board.segments.sidemenumessages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- End include Side Menu Messages -->

                    <!-- Start include Side Menu Activity -->
                <?php echo $__env->make('board.segments.sidemenuactivity', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- End include Side Menu Activity -->

                    <!-- Start include Side Menu Settings -->
                <?php echo $__env->make('board.segments.sidemenusettings', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
                        <?php echo $__env->make('board.segments.breadcrumb', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!-- End include Breadcrumb -->

                        </div>
                        <div class="main-filter">
                            <!-- Start include Search -->
                        <?php echo $__env->make('board.segments.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!-- End include Search -->

                        </div>
                    </div>

                    <?php echo $__env->yieldContent('content'); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start include Footer -->
<?php echo $__env->make('board.segments.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- End include Footer -->

</body>
</html>