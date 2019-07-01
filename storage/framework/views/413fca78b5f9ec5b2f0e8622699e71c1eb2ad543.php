<div class="col-md-12 my-5 p-3" style="background-color:#6acf05; border:1px solid #28a745; border-radius: 25px;">
    <div class="card-columns">

        
            
            
            
            
            
        

        <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card text-center">

            

            <?php if($sponsor->with_package()->image_field): ?>
                <?php if($sponsor->with_package()->linked_image): ?>
                    <a href="<?php echo e(route('main.sponsors.click', $sponsor->with_link()->slug)); ?>" target="_blank">
                        
                        <img class="card-img-top img-thumbnail" src="<?php echo e(asset('storage/'.$sponsor->with_image()->name)); ?>" alt="<?php echo e($sponsor->description); ?>" >
                    </a>
                <?php else: ?>
                    <img class="card-img-top img-thumbnail" src="<?php echo e(asset('modules/sponsors/img/httpwwwweilustnl1539476413.jpg')); ?>" alt="<?php echo e($sponsor->description); ?>" >
                <?php endif; ?>

            <?php endif; ?>

            <div class="card-body">

                <?php if($sponsor->with_package()->title_field): ?>

                    <?php if($sponsor->with_package()->linked_title): ?>
                        <h5 class="card-title">
                            <a href="<?php echo e(route('main.sponsors.click', $sponsor->with_link()->slug)); ?>" target="_blank"><?php echo e($sponsor->title); ?></a>
                        </h5>
                    <?php else: ?>
                        <h5 class="card-title"><?php echo e($sponsor->title); ?></h5>
                    <?php endif; ?>

                <?php endif; ?>

                <?php if($sponsor->with_package()->text_field): ?>
                    <p class="card-text">
                        <?php echo $sponsor->body; ?>

                    </p>
                <?php endif; ?>



            </div>

            <?php if($sponsor->with_package()->footer_field): ?>

                <div class="card-footer">
                    <p class="card-text">
                        <?php if($sponsor->with_package()->linked_footer): ?>
                            <a href="<?php echo e(route('main.sponsors.click', $sponsor->with_link()->slug)); ?>" target="_blank"><?php echo e($sponsor->title); ?></a>
                        <?php else: ?>
                            <?php echo e($sponsor->title); ?>

                        <?php endif; ?>
                    </p>
                </div>

            <?php endif; ?>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





        
            
                
            

            
                
                
                    
                    
                    
                
                
                    
                
            
        

        
            
                
                
                    
                    
                    
                    
                    
                
            
        

        
            
                
            

            
                
                
                    
                    
                    
                    
                    
                    
                    
                    
                
                
                    
                
            
        

        
            
                
            

            
                
                
                    
                    
                    
                
                
                    
                
            
        

        
            
                
                
                    
                
                
                    
                
            
        

        
            
                
            
            
                
            
        

        
            
                
            

            
                
                
                    
                    
                    
                    
                    
                
                
                    
                
            
        

        
            
                
            
            
                
            
        

        
            
                
            

            
                
                
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                        
                    
                
                
                    
                
            
        

        
            
                
            

            
                
                
                    
                    
                    
                    
                
                
                    
                
            
        

        
            
                
            

            
                
                
                    
                    
                    
                
                
                    
                
            
        

        
            
                
            

            
                
                
                    
                
            
        

        
            
                
            

            
                
                
                    
                    
                    
                    
                    
                    
                    
                
                
                    
                
            
        

        
            
                
            

            
                
                
                    
                    
                    
                    
                    
                    
                    
                    
                
                
                    
                
            
        

        
            
                
            
            
                
            
        

        
            
                
            

            
                
                
                    
                    
                    
                    
                    
                    
                    
                
                
                    
                
            
        

        
            
                
            

            
                
                
                    
                
            
        

    </div>
</div>