<div class="modal fade" id="modal_password_reset">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update your password</h4>
            </div>
            <form id="modal-update-password" method="post" action="{{route('board.password.change')}}">
                {{ csrf_field() }}
                <div class="modal-body">

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="current_password" placeholder="Insert current password" name="current_password" required>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" onclick="toggleCurrentPassword()">
                                    <i class="fa fa-unlock" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                    <hr>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="new_password" placeholder="Insert new password" name="new_password" required>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" onclick="toggleNewPassword()">
                                    <i class="fa fa-unlock" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="repeat_new_password" placeholder="Repeat insert new password" name="repeat_new_password" required>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" onclick="toggleRepeatNewPassword()">
                                    <i class="fa fa-unlock" aria-hidden="true"></i>
                                </button>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>