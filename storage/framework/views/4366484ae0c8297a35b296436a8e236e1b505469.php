


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author'])): ?>
    <script src="<?php echo e(Module::asset('sponsors:js/modals/sponsors/personal_drafts.js')); ?>"></script>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'publisher'])): ?>
    <script src="<?php echo e(Module::asset('sponsors:js/modals/sponsors/author_drafts.js')); ?>"></script>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'editor'])): ?>
    <script src="<?php echo e(Module::asset('sponsors:js/modals/sponsors/author_approved.js')); ?>"></script>
<?php endif; ?>


<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'editor' , 'treasurer'])): ?>
    <script src="<?php echo e(Module::asset('sponsors:js/modals/sponsors/treasurer_unpaid.js')); ?>"></script>
<?php endif; ?>



    <script src="<?php echo e(Module::asset('sponsors:js/modals/sponsors/editor_approved.js')); ?>"></script>




    




    




    




    



<?php if($rpc->CanAccessAs(['webmaster' , 'admin' , 'author'])): ?>
    <script src="<?php echo e(Module::asset('sponsors:js/modals/sponsors/new_article.js')); ?>"></script>
<?php endif; ?>



<script src="<?php echo e(Module::asset('sponsors:js/modals/sponsors/modal_helpers.js')); ?>"></script>
