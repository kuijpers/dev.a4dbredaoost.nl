<div class="modal fade" id="modal_about_me">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Update about me</h4>
            </div>
            <form id="modal-update-about-me" method="post" action="{{route('board.member.aboutme.update')}}">
                <div class="modal-body">
                        {{ csrf_field() }}

                        <textarea name="body" class="form-control summernote" rows="10" id="about_me">{!! $user->about_me !!}</textarea>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>