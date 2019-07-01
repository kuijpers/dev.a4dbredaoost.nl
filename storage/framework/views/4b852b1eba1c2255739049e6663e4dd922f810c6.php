


<div id="social_media_section" class="section-b row bg-success">
    <div class="social-media col-md-8 offset-md-2">
        <div class="card bg-success">
            <p class="card-text">
                <?php $__currentLoopData = $social_media_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social_media_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <a href="<?php echo e(route('main.socialmedia.click', $social_media_item->slug)); ?>"
                       class="text-a4dbo card-link" title="Link naar <?php echo e($social_media_item->name); ?>"
                    style="text-decoration: none;" target="_blank">
                        <i class="<?php echo e($social_media_item->fa_class); ?>"></i>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </p>
        </div>
    </div>
</div>
