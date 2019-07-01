<?php if(!empty($breadcrumbles)): ?>

    <ol class="breadcrumb">

		<?php
		$breadcrumb = new App\Http\Controllers\BreadcrumbController;

		$link = $breadcrumb->build($breadcrumbles);
		?>

        <?php echo $link; ?>

    </ol>
<?php else: ?>
    <div class="alert alert-warning" role="alert">
        <i class="alert-ico fa fa-fw fa-ban"></i><strong>Oh snap!&thinsp;</strong>No breadcrumbs are set for this page
    </div>


<?php endif; ?>