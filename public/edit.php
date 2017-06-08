<?php
    session_start();
    require_once("../app/conn.php");
    require_once("../app/logout.php");
    $_SESSION["title"]="Edit Data";
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("../template/head.php"); ?>
    <body>
        <?php require_once("../template/navbar.php"); ?>
        <div class="container-fluid">
            <div class="row">
                <main class="col-sm-12 pt-5" style="background-color: #fff;">
                    <h1 class="py-4"><i class="fa fa-pencil-square-o"></i> Edit</h1>
                    <form class="form-inline" action="javascript:void(0);">
                        <div class="form-group px-1">
                            <select class="form-control" name="selects" id="selects">
                                <option value="profile.id">ID</option>
                                <option value="profile.name">Name</option>
                                <option value="profile.division">Div.</option>
                                <option value="profile.dept">Dept.</option>
                                <option value="profile.process">Process</option>
                                <option value="profile.position">Position</option>
                                <option value="profile.shift">Shift</option>
                                <option value="profile.level">Level</option>
                            </select>
                        </div>
                        <div class="form-group px-1">
                            <input type="search" name="searchbox" value="" placeholder="Search..." class="form-control" id="searchbox" onkeyup="showSearch();">                        
                        </div>
                    </form>
                    <div class="col-sm-12 p-3" id="showsearch"></div>
                </main>
            </div>
            <?php require_once("../template/modal.edit.php"); ?>
            <?php require_once('../app/update.php') ?>
            <?php require_once('../app/delete.php') ?>
        </div>
    </body>
</html>
<script src="js/editFunction.js"></script>
<?php $conn = null; ?>