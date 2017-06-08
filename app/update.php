<?php
    require_once("conn.php");

        if(isset($_POST['btnEdit'])){
            $id = $_POST['id'];
            $name = $_POST['name'];
            $div = $_POST['division'];
            $dept = $_POST['dept'];
            $proc = $_POST['process'];
            $pos = $_POST['position'];
            $shift = $_POST['shift'];
            $level = $_POST['level'];
            $tr01 = (isset($_POST['tr01']))?$_POST['tr01']:NULL;
            $tr02 = (isset($_POST['tr02']))?$_POST['tr02']:NULL;
            $tr03 = (isset($_POST['tr03']))?$_POST['tr03']:NULL;
            $tr04 = (isset($_POST['tr04']))?$_POST['tr04']:NULL;
            $tr05 = (isset($_POST['tr05']))?$_POST['tr05']:NULL;
            $tr06 = (isset($_POST['tr06']))?$_POST['tr06']:NULL;

            $sql = "DELETE FROM profile WHERE id = :id;
                    DELETE FROM learning WHERE id = :id;
                    INSERT INTO profile (id,name,division,dept,process,position,shift,level)
                    VALUES (:id,:name,:div,:dept,:proc,:pos,:shift,:level);
                    INSERT INTO learning (id,idc,date)
                    VALUES (:id,'tr_001',:tr01),
                            (:id,'tr_002',:tr02),
                            (:id,'tr_003',:tr03),
                            (:id,'tr_004',:tr04),
                            (:id,'tr_005',:tr05),
                            (:id,'tr_006',:tr06);";

                $eStmt = $conn->prepare($sql);
                $eStmt->bindParam(":id", $id, PDO::PARAM_STR);
                $eStmt->bindParam(":name", $name, PDO::PARAM_STR);
                $eStmt->bindParam(":div", $div, PDO::PARAM_STR);
                $eStmt->bindParam(":dept", $dept, PDO::PARAM_STR);
                $eStmt->bindParam(":proc", $proc, PDO::PARAM_STR);
                $eStmt->bindParam(":pos", $pos, PDO::PARAM_STR);
                $eStmt->bindParam(":shift", $shift, PDO::PARAM_STR);
                $eStmt->bindParam(":level", $level, PDO::PARAM_INT);
                if($tr01!=null){
                    $eStmt->bindParam(":tr01", $tr01, PDO::PARAM_STR);
                }else{
                    $tr01 = null;
                    $eStmt->bindParam(":tr01", $tr01, PDO::PARAM_NULL);
                }
                if($tr02!=null){
                    $eStmt->bindParam(":tr02", $tr02, PDO::PARAM_STR);
                }else{
                    $tr02 = null;
                    $eStmt->bindParam(":tr02", $tr02, PDO::PARAM_NULL);
                }
                if($tr03!=null){
                    $eStmt->bindParam(":tr03", $tr03, PDO::PARAM_STR);
                }else{
                    $tr03 = null;
                    $eStmt->bindParam(":tr03", $tr03, PDO::PARAM_NULL);
                }
                if($tr04!=null){
                    $eStmt->bindParam(":tr04", $tr04, PDO::PARAM_STR);
                }else{
                    $tr04 = null;
                    $eStmt->bindParam(":tr04", $tr04, PDO::PARAM_NULL);
                }
                if($tr05!=null){
                    $eStmt->bindParam(":tr05", $tr05, PDO::PARAM_STR);
                }else{
                    $tr05 = null;
                    $eStmt->bindParam(":tr05", $tr05, PDO::PARAM_NULL);
                }
                if($tr06!=null){
                    $eStmt->bindParam(":tr06", $tr06, PDO::PARAM_STR);
                }else{
                    $tr06 = null;
                    $eStmt->bindParam(":tr06", $tr06, PDO::PARAM_NULL);
                }
                if($eStmt->execute()){
                    echo '<div class="alert alert-success">Edit data is Success</div>';
                }
            }
        
    
?>