<?php
    session_start();
    require_once("../app/conn.php");
    require_once("../app/logout.php");
    require_once("../app/insert.php");
    $_SESSION["title"]="Add Data";
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("../template/head.php"); ?>
    <body>
        <?php require_once("../template/navbar.php"); ?>
        <div class="container-fluid">
            <div class="row">
                <main class="col-sm-12 pt-5" style="background-color: #fff;">
                    <h1 class="py-4"><i class="fa fa-plus"></i> Add</h1>
                </main>
            </div>
            <div class="row">
                <?php //if(isset($alert)){ echo $alert; }
                echo $alert; ?>
            </div>
            <div class="card row" style="margin-top: 1.25rem!important;">
                <div class="card-block">
                    <h4 class="card-title">Profile Form</h4>
                    <hr>
                    <form method="post">
                        <div class="form-group row">
                            <label for="a_id" class="col-3 col-form-label">ID</label>
                            <div class="col-9">
                                <input type="text" name="a_id" value="" class="form-control" autofocus required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="a_name" class="col-3 col-form-label">Name</label>
                            <div class="col-9">
                                <input type="text" name="a_name" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="a_div" class="col-3 col-form-label">Division</label>
                            <div class="col-9">
                                <input type="text" name="a_div" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="a_dept" class="col-3 col-form-label">Department</label>
                            <div class="col-9">
                                <input type="text" name="a_dept" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="a_proc" class="col-3 col-form-label">Process</label>
                            <div class="col-9">
                                <input type="text" name="a_proc" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="a_pos" class="col-3 col-form-label">Position</label>
                            <div class="col-9">
                                <input type="text" name="a_pos" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="a_shift" class="col-3 col-form-label">Shift</label>
                            <div class="col-9">
                                <input type="text" name="a_shift" value="" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="a_level" class="col-3 col-form-label">Level</label>
                            <div class="col-9">
                                <input type="text" name="a_level" value="" class="form-control">
                            </div>
                        </div>
                        <div class="offset-4 col-4">
                            <button type="submit" class="btn btn-primary" style="cursor: pointer;"><i class="fa fa-check"></i> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
<?php $conn = null; ?>