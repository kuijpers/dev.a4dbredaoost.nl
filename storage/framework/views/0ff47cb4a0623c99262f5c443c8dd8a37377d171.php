
<div class="modal fade" id="password_reset" tabindex="-1" role="dialog" aria-labelledby="password_resetTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="password_resetTitle">Herstel wachtwoord.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-horizontal" method="POST" action="<?php echo e(route('password.email')); ?>">
                <div class="modal-body">
                    <?php echo e(csrf_field()); ?>


                    <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                        <label for="email" class="col-md-12 control-label">E-Mail Adres</label>

                        <div class="col-md-12">
                            <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuleren</button>
                    <button type="submit" class="btn btn-success">Verstuur herstel link.</button>
                </div>
            </form>
    </div>
</div>
</div>


