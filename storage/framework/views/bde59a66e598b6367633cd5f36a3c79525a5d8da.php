<div class="section-c row info-block bg-success pt-5">

    <div class="col-md-12">
        <div class="card-deck">

            <div class="card">
                <h4 class="card-header bg-success text-white"><?php echo app('translator')->getFromJson('main::main/page.title_latest_news'); ?></h4>
                <div class="card-body">
                    <?php if(isset($main_latestnews)): ?>
                    <h5 class="card-title text-success"><?php echo e($main_latestnews->title); ?></h5>
                    <p class="text-muted text-success">
                        <small>
                            <?php echo e(Carbon\Carbon::parse($main_latestnews->publish_date_start)->format('d-m-Y H:i:s')); ?>

                        </small>
                    </p>
                    <p class="card-text text-a4dbo">
                        <?php echo str_limit($main_latestnews->content, 500); ?>

                    </p>

                    <?php else: ?>
                        <h5 class="card-title text-success">
                            <?php echo app('translator')->getFromJson('main::main/page.message_no_news_data'); ?>
                        </h5>
                    <?php endif; ?>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="<?php echo e($url = route('main.news.post', ['slug' => $main_latestnews->slug])); ?>" class="btn btn-success"><?php echo app('translator')->getFromJson('main::main/page.button_news_message'); ?></a>
                </div>
            </div>

            <div class="card">
                <h4 class="card-header bg-success text-white"><?php echo app('translator')->getFromJson('main::main/page.title_whats_happening'); ?></h4>
                <div class="card-body">
                    <?php if(isset($main_event)): ?>
                        <h5 class="card-title text-success">
                            <?php echo e($main_event->title); ?>

                        </h5>
                        <p class="text-muted text-success">
                            <small>
                                <?php echo e(Carbon\Carbon::parse($main_event->start)->format('d-m-Y H:i')); ?>

                            </small>
                        </p>
                        <p class="card-text text-a4dbo">
                            <?php echo $main_event->content; ?>

                        </p>

                        <?php else: ?>
                        <h5 class="card-title text-success">
                            <?php echo app('translator')->getFromJson('main::main/page.message_no_calendar_data'); ?>
                        </h5>
                    <?php endif; ?>

            </div>
            <div class="card-footer bg-white border-0">
                <a href="<?php echo e(route('main.calendar.index')); ?>" class="btn btn-success">
                    <?php echo app('translator')->getFromJson('main::main/page.button_more_dates'); ?>
                </a>
            </div>
            </div>

            <div class="card">
                <h4 class="card-header bg-success text-white">
                    <?php echo app('translator')->getFromJson('main::main/page.title_didyouknow'); ?>
                </h4>
                <div class="card-body">
                    <h5 class="card-title text-success"><?php echo $main_didyouknow->question; ?></h5>
                    <p class="card-text text-a4dbo">
                        <?php echo $main_didyouknow->answer; ?>

                    </p>
                </div>
                <div class="card-footer bg-white border-0">
                    <a href="<?php echo e(route('main.didyouknow.index')); ?>" class="btn btn-success">
                        <?php echo app('translator')->getFromJson('main::main/page.button_more_didyouknow'); ?>
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>