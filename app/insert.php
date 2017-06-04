<?php
    require_once("conn.php");

    $alert = "";

    if(isset($_POST['a_id']) && !isset($_POST['logout'])){

        $sid = $_POST['a_id'];
        $sname = $_POST['a_name'];
        $sdiv = $_POST['a_div'];
        $sdept = $_POST['a_dept'];
        $sproc = $_POST['a_proc'];
        $spos = $_POST['a_pos'];
        $shift = $_POST['a_shift'];
        $slevel = $_POST['a_level'];

        $sql = "INSERT INTO profile (id, name, division, dept, process, position, shift, level) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        try{
            $stmt2 = $conn->prepare($sql);
            $stmt2->bindParam(1, $sid, PDO::PARAM_STR);
            $stmt2->bindParam(2, $sname, PDO::PARAM_STR);
            $stmt2->bindParam(3, $sdiv, PDO::PARAM_STR);
            $stmt2->bindParam(4, $sdept, PDO::PARAM_STR);
            $stmt2->bindParam(5, $sproc, PDO::PARAM_STR);
            $stmt2->bindParam(6, $spos, PDO::PARAM_STR);
            $stmt2->bindParam(7, $shift, PDO::PARAM_STR);
            $stmt2->bindParam(8, $slevel, PDO::PARAM_INT);
            
            if( $stmt2->execute() ){
                $alert = '<div role="alert" class="alert alert-success alert-dismissible fade show mt-3"> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong> <i class="fa fa-check-circle"></i> Success </strong> Insert data id ' . $sid . ' to database is complete </div>';
                $stmt2 = null;
            }else{
                $alert = '<div role="alert" class="alert alert-danger alert-dismissible fade show mt-3">
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong> <i class="fa fa-exclamation-circle"></i> Error! </strong> Cannot insert these data to database Please check your data </div>';
                echo '<script>console.log("This cannot execute your data please contact Webmaster")</script>';
            }
        }catch(PDOException $e){
            $alert = '<div role="alert" class="alert alert-danger alert-dismissible fade show mt-3">
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong> <i class="fa fa-exclamation-circle"></i> Error! </strong> Cannot insert these data to database Please check your data </div>';
        }catch(Exception $e){
            $alert = '<div role="alert" class="alert alert-danger alert-dismissible fade show mt-3">
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong> <i class="fa fa-exclamation-circle"></i> Error! </strong> Cannot insert these data to database Please check your data </div>';
        }
    }
?>