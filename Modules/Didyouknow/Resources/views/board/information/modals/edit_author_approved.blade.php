    <div class="modal fade" id="edit_author_approved" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="row">

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-header">
                            <h4 class="modal-title text-danger">Deze kan nu aangepast worden. Author approved</h4>
                        </div>
                    </div>

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-title-message">
                            <h5 class="text-primary">Hieronder vindt u de titel en de informatie die erbij hoort.</h5>
                        </div>
                    </div>

                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-body">

                            <div class="col-md-12 text-primary">
                                <h5>De titel van de informatie</h5>
                            </div>
                            <div class="col-md-12 author_approved_title">
                                <input name="author_approved_title" type="text" class="form-control span6" id="author_approved_title">
                                <hr>
                            </div>
                            <div class="col-md-12 text-primary">
                                <h5>Hier hoort de volgende tekst bij</h5>
                            </div>
                            <div class="col-md-12 author_approved_body">
                                <textarea name="author_approved_body" class="form-control" rows="10" id="author_approved_body"></textarea>
                                <hr>
                            </div>
                            <div class="col-md-12 text-primary">
                                <div class="row">
                                    <div class="col-md-4">
                                        Mag deze naar de editor?
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="bs-switch" type="checkbox" checked="checked" data-size="mini" data-on-color="success" data-off-color="danger" disabled>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        Mag deze naar de publisher?
                                        <br>
                                        <br>
                                    </div>
                                    <div class="col-md-3">
                                        <input class="bs-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="danger">
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-md-10 col-lg-offset-1">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success">Save</button>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>




