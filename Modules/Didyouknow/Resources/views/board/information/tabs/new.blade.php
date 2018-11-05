<div class="tab-pane" id="new" role="tabpanel">

    <form class="form-group">
        <div class="row">
            <div class="form-group col-md-8">
                <label for="didyouknow">De titel.</label>
                <input type="text" class="form-control" placeholder="Hier een titel.">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <label for="exampleInputPassword1">Dan hier de informatie....</label>
                <textarea class="form-control" placeholder="En zo is het" rows="7"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8 text-right">
                <br>
                <button type="submit" class="btn btn-warning btn-sm">Live preview</button>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <label>
                            <input type="checkbox" id="selectall_approved"> Check all
                        </label>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-unstyled">
                            <li>
                                <label>
                                    <input class="approved" type="checkbox" name="approve[]"> Draft
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="approved" type="checkbox" name="approve[]"> Author Approval
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-unstyled">
                            <li>
                                <label>
                                    <input class="approved" type="checkbox" name="approve[]"> Editor Approval.
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input class="approved" type="checkbox" name="approve[]"> Publisher Approval
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
</div>