<?php if(Session::has('primary-message')): ?>
    <div class="alert alert-primary alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-comment"></i>
        <em> <?php echo session('primary-message'); ?></em>
    </div>
<?php endif; ?>

<?php if(Session::has('secondary-message')): ?>
    <div class="alert alert-secondary alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-comment-alt"></i>
        <em> <?php echo session('secondary-message'); ?></em>
    </div>
<?php endif; ?>

<?php if(Session::has('success-message')): ?>
    <div class="alert alert-success alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-check"></i>
        <em> <?php echo session('success-message'); ?></em>
    </div>
<?php endif; ?>

<?php if(Session::has('danger-message')): ?>
    <div class="alert alert-danger alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-times-circle"></i>
        <em> <?php echo session('danger-message'); ?></em>
    </div>
<?php endif; ?>

<?php if(Session::has('warning-message')): ?>
    <div class="alert alert-warning alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-bell"></i>
        <em> <?php echo session('warning-message'); ?></em>
    </div>
<?php endif; ?>

<?php if(Session::has('info-message')): ?>
<div class="alert alert-info alert-dismissible fade show tosti" role="alert">
    <i class="fas fa-lightbulb"></i>
    <em> <?php echo session('info-message'); ?></em>
</div>
<?php endif; ?>

<?php if(Session::has('light-message')): ?>
    <div class="alert alert-light alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-comments"></i>
        <em> <?php echo session('light-message'); ?></em>
    </div>
<?php endif; ?>

<?php if(Session::has('dark-message')): ?>
    <div class="alert alert-dark alert-dismissible fade show tosti" role="alert">
        <i class="fas fa-comments"></i>
        <em> <?php echo session('dark-message'); ?></em>
    </div>
<?php endif; ?>

<?php if($errors->has('email')): ?>

    <div id="alert" class="alert alert-danger alert-dismissible fade show tosti" role="alert">
        <?php echo e($errors->first('email')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php endif; ?>

<?php if($errors->has('password')): ?>

    <div id="alert" class="alert alert-danger alert-dismissible fade show tosti" role="alert">
        <?php echo e($errors->first('password')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php endif; ?>

<?php if($errors->has('password_confirmation')): ?>

    <div id="alert" class="alert alert-danger alert-dismissible fade show tosti" role="alert">
        <?php echo e($errors->first('password_confirmation')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php endif; ?>