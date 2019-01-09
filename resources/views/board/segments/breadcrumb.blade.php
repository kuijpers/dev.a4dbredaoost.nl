@if(!empty($breadcrumbles))

    <ol class="breadcrumb">

		<?php
		$breadcrumb = new App\Http\Controllers\BreadcrumbController;

		$link = $breadcrumb->build($breadcrumbles);
		?>

        {!! $link !!}
    </ol>
@else
    <div class="alert alert-warning" role="alert">
        <i class="alert-ico fa fa-fw fa-ban"></i><strong>Oh snap!&thinsp;</strong>No breadcrumbs are set for this page
    </div>


@endif