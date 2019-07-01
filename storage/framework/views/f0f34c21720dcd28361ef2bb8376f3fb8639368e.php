<?php if(Session::has('success-message')): ?>
    <div class="alert alert-success alert-dismissible tosti" role="alert">
        <i class="fa fa-check" aria-hidden="true"></i>
        <strong> <?php echo session('success-message'); ?></strong>
    </div>
<?php endif; ?>

<?php if(\Session::has('danger-message')): ?>
    <div class="alert alert-danger alert-dismissible tosti" role="alert">
        <i class="fa fa-times-circle"></i>
        <em> <?php echo session('danger-message'); ?></em>
    </div>
<?php endif; ?>

<?php if(Session::has('warning-message')): ?>
    <div class="alert alert-warning alert-dismissible tosti" role="alert">
        <i class="fa fa-bell" aria-hidden="true"></i>
        <em> <?php echo session('warning-message'); ?></em>
    </div>
<?php endif; ?>

<?php if(Session::has('info-message')): ?>
    <div class="alert alert-info alert-dismissible tosti" role="alert">
        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
        <em> <?php echo session('info-message'); ?></em>
    </div>
<?php endif; ?>


<?php if(isset($errors)): ?>
    <?php if($errors->any() ): ?>

    <div class="alert alert-danger alert-dismissible tosti" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>

    <?php endif; ?>
<?php endif; ?>








<?php if($errors->has('email')): ?>

    <div id="alert" class="alert alert-danger alert-dismissible tosti" role="alert">
        <?php echo e($errors->first('email')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php endif; ?>

<?php if($errors->has('password')): ?>

    <div id="alert" class="alert alert-danger alert-dismissible tosti" role="alert">
        <?php echo e($errors->first('password')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php endif; ?>

<?php if($errors->has('password_confirmation')): ?>

    <div id="alert" class="alert alert-danger alert-dismissible tosti" role="alert">
        <?php echo e($errors->first('password_confirmation')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

<?php endif; ?>



    
    
    
    
    





    
    
    
    
    

