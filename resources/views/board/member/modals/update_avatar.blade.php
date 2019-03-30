<div class="modal fade" id="modal_avatar_renew">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update avatar</h4>
            </div>
            <form id="modal-update-avatar"  method="POST" enctype="multipart/form-data" action="{{route('board.member.avatar.update')}}" >
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div id="AvatarHolder" class="hidden-xs">
                                    <div class="col-md-6 col-md-offset-3">
                                        <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <label>
                                    <input id="AvatarUpload" type="file" name="avatar">

                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="close_avatar" class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>