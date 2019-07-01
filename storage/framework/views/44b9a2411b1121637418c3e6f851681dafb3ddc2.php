<ul class="userbar nav navbar-nav">
    <li class="dropdown">
        <a class="userbar__settings dropdown-toggle" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user-circle"></i>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            <div class="sidebar__utitle"><?php echo e(Auth::user()->name); ?></div>
            <li>
                <a href="<?php echo e(route('board.member.profile')); ?>">
                    <i class="fa fa-user-circle-o"></i>
                    &nbsp; <?php echo e(__('nav_overall.board_member_profile_nav')); ?>

                </a>
            </li>
            <li>
                <a href="<?php echo e(route('board.member.settings')); ?>">
                    <i class="fa fa-cogs"></i>
                    &nbsp;  <?php echo e(__('nav_overall.board_member_settings_nav')); ?>

                </a>
            </li>
            <li>
                <a href="<?php echo e(route('board.logout')); ?>"onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>
                    &nbsp;  <?php echo e(__('nav_overall.board_member_logout_nav')); ?>

                </a>
                <form id="logout-form" action="<?php echo e(route('board.logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
            </li>

        </ul>
    </li>
</ul>