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
                <?php //require_once("../template/sidebar.php"); ?>
                <main class="col-sm-12 pt-5" style="background-color: #fff;">
                    <h1 class="py-4"><i class="fa fa-search"></i> Search</h1>
                    <form class="form-inline" action="javascript:void(0);">
                        <div class="form-group px-1">
                            <select class="form-control" name="selects" id="selects">
                                <option value="id">ID</option>
                                <option value="name">Name</option>
                                <option value="division">Div.</option>
                                <option value="dept">Dept.</option>
                                <option value="process">Process</option>
                                <option value="position">Position</option>
                                <option value="shift">Shift</option>
                                <option value="level">Level</option>
                            </select>
                        </div>
                        <div class="form-group px-1">
                            <input type="search" name="searchbox" value="" placeholder="Search..." class="form-control" id="searchbox" onkeyup="showSearch();">                        
                        </div>
                    </form>
                    <div class="col-sm-12 p-3" id="showsearch">
                        
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
<script src="js/searchFunction.js"></script>
<?php $conn = null; ?>