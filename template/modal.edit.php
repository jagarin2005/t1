<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editLabel">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="edit" method="post">
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">ID</label>
                        <div class="col-sm-9">
                            <p class="form-control-static" id="id"></p>
                            <input id="hid" type="hidden" value="">
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
                            <input type="date" class="form-control" id="name" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Basic SSS</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="name" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Budget Cont.</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="name" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Coaching</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="name" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Leadership</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="name" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id" class="col-sm-3 form-control-label">Maizouskin</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="name" name="name" value="">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="editBtn" value="true" form="edit">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php

?>

<script>
    $('#editModal').on('show.bs.modal', function (event) {
        var btn = $(event.relatedTarget)
        var id = btn.data('whatever')

        var modal = $(this)
        modal.find('.modal-title').text('Edit data ID ' + id)
        modal.find('.modal-body p#id').text(id)
        modal.find('.modal-body input#hid').val(id)
    });
</script>