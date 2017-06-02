<?php
    if(!isset($_SESSION["user"]) && !isset($_SESSION["name"])){
        $_SESSION["login_err"] = '<div class="form-group">
                        <div class="col-sm-12">
                            <div class="alert alert-warning" role="alert"><strong>Warning!</strong> Please login </div>
                        </div>
                    </div>';
        header("location: index");
    }

    $logout1 = (isset($_POST["logout"]) ? $_POST["logout"]  : null );
    $logout2 = (isset($_POST["logout2"]) ? $_POST["logout2"]  : null );

    if($logout1 == true || $logout2 == true){
        session_destroy();
        header("location: index");
    }
?>