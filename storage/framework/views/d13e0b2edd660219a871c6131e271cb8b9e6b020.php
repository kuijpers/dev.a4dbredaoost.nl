

<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.tabs.draft', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.tabs.author', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'editor'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.tabs.editor', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher' , 'treasurer'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.tabs.treasurer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.tabs.publisher', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.tabs.published', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.tabs.garbage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.tabs.archive', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.tabs.new', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>