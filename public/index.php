<?php
    session_start();
    require_once("../app/conn.php");
    require_once("../app/login.php");
    $_SESSION["title"] = "Login";
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("../template/head.php"); ?>
    <body>
        <div class="container">
            <div class="card row">
                <div class="card-block">
                    <h4 class="card-title">Login</h4>
                    <form method="post">
                        <?php if(isset($user_err)){ echo $user_err; } ?>
                        <?php if(isset($pass_err)){ echo $pass_err; } ?>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-outline-primary">Login</button>
                            </div>
                        </div>
                            <?php if(isset($err)){ echo $err; } ?>
                            <?php if(isset($_SESSION["login_err"])){ echo $_SESSION["login_err"]; session_unset($_SESSION["login_err"]); } ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    $conn = null;
?>