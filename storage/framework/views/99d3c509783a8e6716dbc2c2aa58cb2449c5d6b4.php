<div class="tab-pane" id="new" role="tabpanel">
    <form id="new_sponsor_form" action="<?php echo e(route('board.sponsors.create')); ?>" method="POST" enctype="multipart/form-data">

        <?php echo e(csrf_field()); ?>


        <div class="row">

            <div class="form-group  col-md-10 col-md-offset-1">
                <label for="title">
                    <strong>Naam van de sponsor</strong>
                </label>
                <input id="title" name="title" type="text" class="form-control" placeholder="Sponsornaam komt hier.........">
            </div>

            <div class="form-group  col-md-10 col-md-offset-1">
                <label for="sponsor_package">
                    <strong>Soort pakket</strong>
                </label>
                <select id="sponsor_package" class="selectpicker form-control" name="sponsor_package">
                    <option>Maak een keuze</option>
                    <?php $__currentLoopData = $packages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $package): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($package->id); ?>" <?php if($package->name == 'Full 1000'): ?> selected <?php endif; ?>><?php echo e($package->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <div class="form-group  col-md-10 col-md-offset-1">
                <label for="sponsor_link">
                    <strong>Link naar de web pagina</strong>
                </label>
                <div class="input-group">
                    
                    <input type="text" name="sponsor_link" class="form-control" id="sponsor_link" placeholder="http(s):// Website link">
                </div>
                
            </div>


            <div class="form-group  col-md-10 col-md-offset-1">
                <div class="input-group">

                    

                    <label class="input-group-btn">
                    <span class="btn btn-default">
                        Select Logo <input type="file" name="sponsor_logo"  style="display: none;">
                    </span>
                    </label>
                    <input id="new_draft_logo" type="text" class="form-control input-file" readonly placeholder="Upload logo...." >

                </div>
            </div>



        </div>

        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <hr>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-md-10 col-md-offset-1">
                <label for="new_article"><strong>De informatie komt hier...</strong></label>

                <textarea id="new_article" name="body" class="form-control summernote" placeholder="De informatie komt hier ......." rows="10"></textarea>

            </div>
        </div>

        <div class="row">

            <div class="col-md-12">
                <hr>
            </div>

        </div>

        <div class="row margin-bottom-lg">

            <div class="col-md-10 col-md-offset-1">

                <div class='col-sm-5 col-md-offset-1'>
                    <label for="start_date">
                        Start date
                    </label>
                    <div class="form-group">
                        <div class='input-group date' id='start_date'>
                            <input name="publish_date_start" type='text' class="form-control" data-format="yyyy-MM-dd hh:mm:ss">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>

                <div class='col-sm-5 col-md-offset-1'>
                    <label for="end_date">
                        End date
                    </label>
                    <div class="form-group">
                        <div class='input-group date' id='end_date'>
                            <input name="publish_date_end" type='text' class="form-control" data-format="yyyy-MM-dd hh:mm:ss">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="form-group  col-md-10 col-md-offset-1">

                <div class="row">
                    

                    <div class="col-md-4">

                        <label>
                            <input class="bs-switch approved" type="checkbox"
                                   name="create_new_author_approved"
                                   id="create_new_author_approved"
                                   data-size="mini"
                                   data-on-color="success"
                                   data-off-color="danger"
                                   data-on-text="Ja"
                                   data-off-text="Nee"
                            >
                            Goedkeuring van auteur
                        </label>

                    </div>
                    <div class="col-md-4">

                        <label>
                            <input class="bs-switch approved" type="checkbox"
                                   name="create_new_editor_approved"
                                   id="create_new_editor_approved"
                                   data-size="mini"
                                   data-on-color="success"
                                   data-off-color="danger"
                                   data-on-text="Ja"
                                   data-off-text="Nee"
                            >
                            Goedkeuring van editor
                        </label>

                    </div>
                </div>
            </div>




        </div>

        <div class="row">

            <div class="col-md-12">
                <hr>
            </div>

        </div>
        <div class="row">
            <div class="form-group col-md-10 col-md-offset-1">
                <button id="submit_new" type="submit" class="btn btn-success">
                    <?php echo app('translator')->getFromJson('sponsors::board/buttons.modal_button_submit'); ?>
                </button>
            </div>
        </div>
    </form>
</div>