<div class="section-d row">

    <div class="col-md-4">
        <h4 class="text-success"><?php echo app('translator')->getFromJson('main::main/page.title_volunteers'); ?></h4>
        <p class="text-a4dbo">
            <?php if($ty_volunteers->isEmpty()): ?>
                <?php echo app('translator')->getFromJson('main::main/page.message_no_data'); ?>
            <?php else: ?>

                <?php $__currentLoopData = $ty_volunteers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ty_volunteer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($ty_volunteer->title); ?>

                    <?php echo $ty_volunteer->content; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>
        </p>
    </div>

    <div class="col-md-4">
        <h4 class="text-success"><?php echo app('translator')->getFromJson('main::main/page.title_participants'); ?></h4>
        <p class="text-a4dbo">
            <?php if($ty_participants->isEmpty()): ?>
                <?php echo app('translator')->getFromJson('main::main/page.message_no_data'); ?>
            <?php else: ?>

                <?php $__currentLoopData = $ty_participants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ty_participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($ty_participant->title); ?>

                    <?php echo $ty_participant->content; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>
        </p>
    </div>

    <div class="col-md-4">
        <h4 class="text-success"><?php echo app('translator')->getFromJson('main::main/page.title_sponsors'); ?></h4>
        <p class="text-a4dbo">
            <?php if($ty_sponsors->isEmpty()): ?>
                <?php echo app('translator')->getFromJson('main::main/page.message_no_data'); ?>
            <?php else: ?>

                <?php $__currentLoopData = $ty_sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ty_sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($ty_sponsor->title); ?>

                    <?php echo $ty_sponsor->content; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php endif; ?>
        </p>
    </div>

</div>