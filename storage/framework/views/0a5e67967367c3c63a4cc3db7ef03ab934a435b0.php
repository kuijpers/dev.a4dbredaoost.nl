<?php $__currentLoopData = $sponsor_information; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $information): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="col-md-8 offset-md-2 border-bottom">
        <h1><?php echo e($information->title); ?></h1>
    </div>

    <div class="col-md-8 offset-md-2 my-2">
    <?php echo $information->body; ?>

    </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>