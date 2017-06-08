<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="edit" name="edit" method="post">
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">ID</label>
                        <div class="col-sm-9">
                            <p class="form-control-static" id="id"></p>
                            <input id="hid" name="id" type="hidden" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="name" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Division</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="division" name="division" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Dept</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="dept" name="dept" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Process</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="process" name="process" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Position</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="position" name="position" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Shift</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="shift" name="shift" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Level</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="level" name="level" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Analytical skill</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tr01" name="tr01" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Basic SSS</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tr02" name="tr02" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Budget Cont.</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tr03" name="tr03" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Coaching</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tr04" name="tr04" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Leadership</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tr05" name="tr05" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Maizouskin</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="tr06" name="tr06" value="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="btnEdit" value="true" form="edit">Edit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="delLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="delLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Are you sure to delete data <span id="did"></span> ?</p>
            </div>
            <div class="modal-footer">
                <form method="post">
                    <button type="submit" class="btn btn-danger" name="btnDel" id="btnDel" value="">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#editModal').on('show.bs.modal', function (event) {
        var btn = $(event.relatedTarget)
        var id = btn.data('id')
        var name = btn.data('name')
        var division = btn.data('division')
        var dept = btn.data('dept')
        var process = btn.data('process')
        var position = btn.data('position')
        var shift = btn.data('shift')
        var level = btn.data('level')
        var tr01 = btn.data('tr01')
        var tr02 = btn.data('tr02')
        var tr03 = btn.data('tr03')
        var tr04 = btn.data('tr04')
        var tr05 = btn.data('tr05')
        var tr06 = btn.data('tr06')

        var modal = $(this)
        modal.find('.modal-title#editLabel').text('Edit data ID ' + id)
        modal.find('.modal-body p#id').text(id)
        modal.find('.modal-body input#hid').val(id)
        modal.find('.modal-body input#name').val(name)
        modal.find('.modal-body input#division').val(division)
        modal.find('.modal-body input#dept').val(dept)
        modal.find('.modal-body input#process').val(process)
        modal.find('.modal-body input#position').val(position)
        modal.find('.modal-body input#shift').val(shift)
        modal.find('.modal-body input#level').val(level)
        modal.find('.modal-body input#tr01').val(tr01)
        modal.find('.modal-body input#tr02').val(tr02)
        modal.find('.modal-body input#tr03').val(tr03)
        modal.find('.modal-body input#tr04').val(tr04)
        modal.find('.modal-body input#tr05').val(tr05)
        modal.find('.modal-body input#tr06').val(tr06)
    })

    $('#delModal').on('show.bs.modal', function (event) {
        var btn = $(event.relatedTarget)
        var id = btn.data('id')

        var modal = $(this)
        modal.find('.modal-header .modal-title#delLabel').text('Delete data ID '+id)
        modal.find('span#did').text(id)
        modal.find('.modal-footer #btnDel').val(id)

    })
</script>