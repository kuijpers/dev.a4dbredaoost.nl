<div class="card my-5">
    <h5 class="card-header bg-success text-white"><?php echo app('translator')->getFromJson('news::main/lang.categories_header'); ?></h5>
    <div class="card-body">
        <div class="row">

            <?php $__currentLoopData = $news_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(\Modules\News\Entities\Models\Main\NewsCategorie::count_cat_items($news_categorie->id)): ?>
                <div class="col-lg-6">
                        <a href="<?php echo e($url = route('main.news.categorie', ['slug' => $news_categorie->slug])); ?>" class="text-success">
                            <?php echo e($news_categorie->name); ?>

                        </a>
                        <span class="badge badge-success float-right">
                                <?php echo e(\Modules\News\Entities\Models\Main\NewsCategorie::count_cat_items($news_categorie->id)); ?>

                        </span>

                </div>
                <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>