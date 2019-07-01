<?php if(Auth::guard('web')->check()): ?>
    <p class="text-success">
        You are Logged in as a <strong>USER</strong>.
    </p>
<?php else: ?>
    <p class="text-danger">
        You are Logged out as a <strong>USER</strong>.
    </p>
<?php endif; ?>

<?php if(Auth::guard('volunteer')->check()): ?>
    <p class="text-success">
        You are Logged in as a <strong>VOLUNTEER</strong>.
    </p>
<?php else: ?>
    <p class="text-danger">
        You are Logged out as a <strong>VOLUNTEER</strong>.
    </p>
<?php endif; ?>

<?php if(Auth::guard('boardmember')->check()): ?>
    <p class="text-success">
        You are Logged in as a <strong>BOARDMEMBER</strong>.
        <?php echo e(Auth::guard('boardmember')->user()->name); ?>

    </p>
<?php else: ?>
    <p class="text-danger">
        You are Logged out as a <strong>BOARDMEMBER</strong>.
    </p>
<?php endif; ?>

