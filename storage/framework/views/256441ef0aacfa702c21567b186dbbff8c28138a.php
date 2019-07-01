
<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.modals.view_personal_drafts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('sponsors::Board.sponsors.modals.edit_personal_drafts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.modals.view_author_drafts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'editor'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.modals.view_author_approved', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('sponsors::Board.sponsors.modals.edit_author_approved', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher' , 'treasurer'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.modals.view_treasurer_unpaid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('sponsors::Board.sponsors.modals.edit_treasurer_unpaid', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher'])): ?>
    <?php echo $__env->make('sponsors::Board.sponsors.modals.view_editor_approved', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('sponsors::Board.sponsors.modals.edit_editor_approved', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher'])): ?>
    
    
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin'])): ?>
    
    
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author' , 'editor' , 'publisher'])): ?>
    
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin'])): ?>
    
<?php endif; ?>