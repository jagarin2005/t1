<?php
    session_start();
    require_once("../app/conn.php");
    require_once("../app/logout.php");
    $_SESSION["title"]="Welcome to WorkSpace";
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("../template/head.php"); ?>
    <body>
        <?php require_once("../template/navbar.php"); ?>
        <div class="container-fluid">
            <div class="row">
                <main class="col-sm-12 pt-5" style="background-color: #fff;">
                    <h1 class="py-4"><i class="fa fa-search"></i> Search</h1>
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
                        <!--<div class="form-check px-2">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="cpid" value="" id="cpid" checked>
                                ID
                            </label>
                        </div>
                        <div class="form-check px-2">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="cpname" value="" id="cpname" checked>
                                Name
                            </label>
                        </div>
                        <div class="form-check px-2">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="cpdivision" value="" id="cpdivision" checked>
                                Division
                            </label>
                        </div>
                        <div class="form-check px-2">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="cpdept" value="" id="cpdept" checked>
                                Dept.
                            </label>
                        </div>
                        <div class="form-check px-2">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="cpprocess" value="" id="cpprocess" checked>
                                Process
                            </label>
                        </div>
                        <div class="form-check px-2">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="cpposition" value="" id="cpposition" checked>
                                Position
                            </label>
                        </div>
                        <div class="form-check px-2">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="cpshift" value="" id="cpshift" checked>
                                Shift
                            </label>
                        </div>
                        <div class="form-check px-2">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="cplevel" value="" id="cplevel" checked>
                                Level
                            </label>
                        </div>-->
                    </form>
                    <div class="col-sm-12 p-3" id="showsearch"></div>
                </main>
            </div>
        </div>
    </body>
</html>
<script src="js/searchFunction.js"></script>
<?php $conn = null; ?>