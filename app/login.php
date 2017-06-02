<?php
    $err = "";
    $user_err = '<div class="form-group">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-12">
                                <input type="text" name="user" value="" class="form-control" placeholder="Username" autofocus>
                            </div>
                        </div>';
    $pass_err = '<div class="form-group">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-12">
                                <input type="password" name="pwd" value="" class="form-control" placeholder="Password">
                            </div>
                        </div>';
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $stmt = $conn->prepare("SELECT * FROM user WHERE username LIKE :user AND password LIKE :pass");
        $stmt->bindParam(':user', $_POST["user"], PDO::PARAM_STR);
        $stmt->bindParam(':pass', $_POST["pwd"], PDO::PARAM_STR);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        if($res = $stmt->fetch()){
            header("location: home");
            $_SESSION["user"] = $res["username"];
            $_SESSION["name"] = $res["name"];
        }else{
            $err = '<div class="form-group">
                        <div class="col-sm-12">
                            <div class="alert alert-danger" role="alert"><strong>Failed</strong> Username or Password wrong </div>
                        </div>
                    </div>';
            $user_err = '<div class="form-group has-danger">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-12">
                                <input type="text" name="user" value="" class="form-control form-control-danger" placeholder="Username" autofocus>
                            </div>
                        </div>';
            $pass_err = '<div class="form-group has-danger">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-12">
                                <input type="password" name="pwd" value="" class="form-control form-control-danger" placeholder="Password">
                            </div>
                        </div>';
        }
    }
?>