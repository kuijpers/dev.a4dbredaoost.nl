<?php if($paginator->lastPage() > 1): ?>
    <ul class="pagination justify-content-center mb-4">

        <li class="page-item <?php echo e(($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : ''); ?>">
            <a class="page-link<?php echo e(($paginator->currentPage() == $paginator->lastPage()) ? '' : ' text-success'); ?>"  href="<?php echo e($paginator->url($paginator->currentPage()+1)); ?>" >&larr; Older</a>
        </li>

        <li class="page-item <?php echo e(($paginator->currentPage() == 1) ? ' disabled' : ''); ?>">
            <a class="page-link <?php echo e(($paginator->currentPage() > 1) ? ' text-success' : ''); ?>" href="<?php echo e($paginator->url(1)); ?>">Newer &rarr;</a>
        </li>

    </ul>
<?php endif; ?>