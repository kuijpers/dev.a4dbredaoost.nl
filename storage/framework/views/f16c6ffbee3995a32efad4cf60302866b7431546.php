<div class="section-a row">
    <div class="jumbotron">
        <div class="col-sm-8 mx-auto jumbofill">
            <p>
            <h1 class="text-success">
                <?php echo app('translator')->getFromJson('main::main/page.title_spotlight'); ?>
                <i class="fas fa-sun fa-spin text-warning"></i>
            </h1>
            <h3 class="text-a4dbo"><?php echo e($spotlight->title); ?></h3>
            <p class="text-a4dbo">
                <?php echo str_limit($main_latestnews->content, 600); ?>

            </p>
            <p>
                <a class="btn btn-success" href="<?php echo e($url = route('main.spotlight.index', ['slug' => $spotlight->slug])); ?>" role="button"><?php echo app('translator')->getFromJson('main::main/page.button_more_info'); ?> &raquo;</a>

                
                    
                
            </p>
            </p>
        </div>
    </div>
</div>