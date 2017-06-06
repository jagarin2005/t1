<?php
    session_start();
    require_once("../app/conn.php");
    require_once("../app/logout.php");
    $_SESSION["title"]="Delete Data";
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("../template/head.php"); ?>
    <body>
        <?php require_once("../template/navbar.php"); ?>
        <div class="container-fluid">
            <div class="row">
                <main class="col-sm-12 pt-5" style="background-color: #fff;">
                    <h1 class="py-4"><i class="fa fa-minus"></i> Delete</h1>
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
        </div>
    </body>
</html>
<?php $conn = null; ?>