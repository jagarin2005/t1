<?php
    require_once("conn.php");

    if(isset($_POST['btnDel'])){
        $id = $_POST['btnDel'];

        $sql = "DELETE FROM profile 
                WHERE id = :id;
                DELETE FROM learning
                WHERE id in (:id)";

        $eStmt = $conn->prepare($sql);
        $eStmt->bindParam(":id", $id, PDO::PARAM_STR);
        if($eStmt->execute()){
            echo '<div class="alert alert-success">Delete data is Success</div>';
            $eStmt = "";
        }
    }
?>