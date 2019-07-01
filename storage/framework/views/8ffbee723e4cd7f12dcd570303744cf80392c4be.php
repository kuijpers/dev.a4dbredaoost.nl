<div class="card my-5">
    <h5 class="card-header bg-success text-white"><?php echo app('translator')->getFromJson('news::main/lang.tags_header'); ?></h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">

                <?php $__currentLoopData = $news_tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($url = route('main.news.tag', ['slug' => $news_tag->slug])); ?>" class="badge badge-pill badge-success"><?php echo e($news_tag->name); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>