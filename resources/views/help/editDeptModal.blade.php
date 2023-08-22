<div class="modal fade" id="department_model" tabindex="-1" role="dialog" aria-labelledby="updateDepartment"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-block">
                    <form>
                        <input type="hidden" name="hiddenDeptId" id="hiddenDeptId">
                        <div class="form-group" <label="" for="department">Department
                            <input type="text" class="form-control" id="department" name="department"
                                placeholder="department" required="">
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10 mt-2">
                                <input class="ml-2" type="radio" id="ticket_status_open" name="deptStatus" value="1">
                                Enable
                                <input class="ml-2" type="radio" id="ticket_status_open" name="deptStatus" value="0">
                                Disable
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary  btn-radius-10" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary updateDept">Save</button>
            </div>
        </div>
    </div>