<div class="modal fade" id="view_archive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">

			<div class="row">

				<div class="col-md-10 col-lg-offset-1">
					<div class="modal-header">
						<h4 class="modal-title text-danger">
							@lang('didyouknow::board/modals.modal_view_title_archived')
						</h4>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-md-10 col-lg-offset-1">
					<div class="modal-title-message">
						<h5 class="text-primary">
							@lang('didyouknow::board/modals.modal_view_announcement')
						</h5>
					</div>
				</div>

			</div>

			<div class="row">

				<div class="col-md-10 col-lg-offset-1">
					<div class="modal-body">

						<div class="col-md-12 text-primary">
							<h5>
								@lang('didyouknow::board/modals.modal_view_information_title')
							</h5>
						</div>

						<div class="col-md-12 view_archived_title">
							Hier komt de tekst te staan van de titel en
							deze word door JS aangepast en is dus niet zichtbaar op de pagina.
							<hr>
						</div>

						<div class="col-md-12 text-primary">
							<h5>
								@lang('didyouknow::board/modals.modal_view_information_body')
							</h5>
						</div>

						<div class="col-md-12 view_archived_body">
							Hier komt de tekst te staan van de info die bij de titel hoort en
							deze word door JS aangepast en is dus niet zichtbaar op de pagina.
						</div>

						<div class="col-md-12">
							<hr>
						</div>

						<div class="col-md-12">
							<div class="col-md-4 text-primary">
								@lang('didyouknow::board/modals.modal_view_approved_author')
							</div>
							<div class="col-md-4 view_archived_author">
								Hier komt de naam van de auteur te staan en
								deze word door JS aangepast en is dus niet zichtbaar op de pagina.
							</div>
						</div>

						<div class="col-md-12">
							<div class="col-md-4 text-primary">
								@lang('didyouknow::board/modals.modal_view_approved_editor')
							</div>
							<div class="col-md-4 view_archived_editor">
								Hier komt de naam van de editor te staan en
								deze word door JS aangepast en is dus niet zichtbaar op de pagina.
							</div>
						</div>

						<div class="col-md-12">
							<div class="col-md-4 text-primary">
								@lang('didyouknow::board/modals.modal_view_approved_publisher')
							</div>
							<div class="col-md-4 view_archived_publisher">
								Hier komt de naam van de publisher te staan en
								deze word door JS aangepast en is dus niet zichtbaar op de pagina.
							</div>
						</div>

						<div class="col-md-12">
							<hr>
						</div>

						<div class="col-md-12">
							<div class="col-md-4 text-primary">
								@lang('didyouknow::board/modals.modal_view_publish_from'):
							</div>
							<div class="col-md-4 view_archived_start">
								Hier komt de start datum van dit artikel te staan
							</div>
						</div>

						<div class="col-md-12">
							<div class="col-md-4 text-primary">
								@lang('didyouknow::board/modals.modal_view_publish_till'):
							</div>
							<div class="col-md-4 view_archived_end">
								Hier komt de eind datum van dit artikel te staan
							</div>
						</div>


					</div>
				</div>
				<div class="col-md-10 col-lg-offset-1">
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">
							@lang('didyouknow::board/buttons.modal_button_close')
						</button>
					</div>
				</div>

			</div>


		</div>
	</div>
</div>