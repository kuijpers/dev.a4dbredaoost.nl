<div id="demo" class="carousel slide carousel-fade" data-ride="carousel" style="padding-right:3px; padding-top: 3px; display:inline-block; max-width:300px; height:210px; float:right;">

    <!-- Indicators -->

    <ul class="carousel-indicators">
        <?php for($i = 0; $i < $spotlight->images()->count(); $i++): ?>
            <li data-target="#demo" data-slide-to="<?php echo e($i); ?>" <?php if($i == 0): ?> class="active"<?php endif; ?>></li>

        <?php endfor; ?>
    </ul>

    <div class="carousel-inner">
		<?php
		$count = 0;
		?>
        <?php $__currentLoopData = $spotlight->images()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php $count++; ?>

            <div class="carousel-item <?php if($count == 1): ?> active <?php endif; ?>">
                <a href="<?php echo e(asset('modules/main/album/'.$image->name )); ?>"
                               data-toggle="lightbox" data-gallery="<?php echo e($spotlight->title); ?>"
                               data-title="<?php echo e($image->content); ?>"
                               data-footer="<?php echo app('translator')->getFromJson('main::main/lang.carousel_photo_courtesy'); ?> <?php echo e($spotlight->images()->first()->photographer); ?>">
                    <img src="<?php echo e(asset('modules/main/album/'.$image->name )); ?>" class="img-fluid rounded" alt="<?php echo e($image->description); ?>">
                </a>
                
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>