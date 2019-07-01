
<div id="footer-address" class="row footer-contact bg-success p-3">

    <div class="col-md-4 offset-md-1">
        <address>
            <strong>
                <div class="text-white">
                    <?php echo e($organisation->value_text); ?>

                </div>
            </strong>
            <br>
            <strong>
                <u>
                    Secretariaat
                </u>
            </strong>
            <br>
            <br>
            <strong><?php echo e($secretary->name); ?></strong>
            <br>
            <?php if($secretary->show_address): ?>
                <?php if(isset($secretary->address)): ?>
                    <?php echo e($secretary->address); ?>

                    <br>
                <?php endif; ?>
                <?php if(isset($secretary->postcode)): ?>
                    <?php echo e($secretary->postcode); ?>

                    <?php if(isset($secretary->city)): ?>
                        ,
                    <?php endif; ?>
                <?php endif; ?>
                <?php if(isset($secretary->city)): ?>
                    <?php echo e($secretary->city); ?>

                    <br>
                <?php endif; ?>
            <?php endif; ?>
            <?php if($secretary->show_phone): ?>
                <?php if(isset($secretary->phone)): ?>
                    <abbr title="Telefoon">T:</abbr> <?php echo e($secretary->phone); ?>

                    <br>
                <?php endif; ?>
            <?php endif; ?>
            <?php if($secretary->show_phone): ?>
                <?php if(isset($secretary->phone)): ?>
                    <abbr title="Telefoon">T:</abbr> <?php echo e($secretary->phone); ?>

                    <br>
                <?php endif; ?>
            <?php endif; ?>
        </address>

        <address>
            <a href="mailto:<?php echo e($secretary->email); ?>"><?php echo e($secretary->email); ?></a>
        </address>
    </div>


</div>

<div id="footer-copyright" class="row footer-copyright bg-success p-3">
    <div class="col-md-8 offset-md-2">
        De website is beschermd door copyright.
        <br>
        &copy; <?php echo e($founded); ?> - <?php echo e($curr_year); ?> <?php echo e($organisation->value_text); ?>

        <br>
        <br>
        <a href="<?php echo e(route('main.credits.index')); ?>" class="text-white">Credits</a>
    </div>
</div>