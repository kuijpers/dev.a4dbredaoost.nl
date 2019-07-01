<?php
	Carbon\Carbon::setLocale(config('app.locale'))
?>


<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('news::main/lang.index_web_title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('modules/news/css/main.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('jstop'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('jsbottom'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    
    <?php echo e($news_items); ?>


    

    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="my-4">
                    <?php echo app('translator')->getFromJson('news::main/lang.index_page_title'); ?>
                </h1>
                <hr>
                <?php $__currentLoopData = $news_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <!-- Blog Post -->
                <div class="card mb-4">

                        
                        
                    <?php if(isset($news_item->images()->first()->name)): ?>
                    <figure>
                        <img class="card-img-top" src="<?php echo e(asset('modules/news/album/'.$news_item->images()->first()->name )); ?>" alt="Card image cap" style="width:100%">
                        <figcaption style="padding: 10px 0 10px 10px;">
                            <span class="text-muted">
                                <?php echo app('translator')->getFromJson('news::main/lang.index_photo_courtesy'); ?>
                            </span>
                            <i>
                                <?php echo e($news_item->images()->first()->photographer); ?>

                            </i>
                        </figcaption>
                    </figure>
                    <?php endif; ?>


                    <div class="card-body">
                        <h2 class="card-title"><?php echo e($news_item->title); ?></h2>
                        <h6 class="text-muted">
                            <?php echo app('translator')->getFromJson('news::main/lang.category'); ?>:
                            <span class="text-muted text-success">
                                <a href="<?php echo e($url = route('main.news.categorie', ['slug' => $news_item->categorie()->first()->slug])); ?>" class="text-success">
                                    <?php echo e($news_item->categorie()->first()->name); ?>

                                </a>
                            </span>
                        </h6>
                        <p>

                            <?php $__currentLoopData = $news_item->tags()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news_tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($url = route('main.news.tag', ['slug' => $news_tag->slug])); ?>" class="badge badge-pill badge-success"><?php echo e($news_tag->name); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </p>
                        <p class="card-text">

                            <?php echo str_limit($news_item->content, 600); ?>


                        </p>
                        <a href="<?php echo e($url = route('main.news.post', ['slug' => $news_item->slug])); ?>" class="btn btn-success">
                            <?php echo app('translator')->getFromJson('news::main/lang.index_button_read_more'); ?> &rarr;
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        <?php echo app('translator')->getFromJson('news::main/lang.index_posted_on'); ?>
                        <?php echo e(Carbon\Carbon::parse($news_item->publish_date_start)->format('l d F Y H:i:s')); ?>

                        <?php echo app('translator')->getFromJson('news::main/lang.index_made_by'); ?>

                        <a href="<?php echo e(route('main.news.author', [$news_item->getAuthorSlug($news_item->author_group)])); ?>" class="text-success">
                            <?php echo e($news_item->getAuthorName($news_item->author_group)); ?>

                        </a>

                    </div>
                </div>


                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                <!-- Pagination -->

                <?php echo $__env->make('main.includes.custom_pagination', ['paginator' => $news_items], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            </div>

            <!-- Sidebar Widgets Column -->
            <div class="col-md-4 pt-5">

                <!-- Search Widget -->
                <?php if(\Modules\News\Http\Controllers\Main\NewsController::show_on_page('search')): ?>

                    <!-- Categories Widget -->
                    <?php echo $__env->make('news::includes.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php endif; ?>

                <?php if(\Modules\News\Http\Controllers\Main\NewsController::show_on_page('categories')): ?>

                    <!-- Categories Widget -->
                    <?php echo $__env->make('news::includes.categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php endif; ?>

                <?php if(\Modules\News\Http\Controllers\Main\NewsController::show_on_page('tags')): ?>

                    <!-- Categories Widget -->
                    <?php echo $__env->make('news::includes.tags', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php endif; ?>

                <?php if(\Modules\News\Http\Controllers\Main\NewsController::show_on_page('archives')): ?>

                    <!-- Categories Widget -->
                    <?php echo $__env->make('news::includes.archives', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php endif; ?>


            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


    

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.main.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>