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
                </main>
            </div>
        </div>
    </body>
</html>
<?php $conn = null; ?>