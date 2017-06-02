<?php
    require_once("conn.php");

    $selects = $_GET['selects'];
    $searchbox = $_GET['searchbox'];
    $searchbox2 = "%". $searchbox ."%";

    $sql = "SELECT * FROM profile WHERE $selects LIKE :searchbox";

    $stmt2 = $conn->prepare($sql);
    $stmt2->bindParam(":searchbox", $searchbox2, PDO::PARAM_STR);
    $stmt2->execute();
    $stmt2->setFetchMode(PDO::FETCH_ASSOC);
    if( $res2 = $stmt2->fetchAll()){
        echo '<table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Div.</th>
                        <th>Dept.</th>
                        <th>Process</th>
                        <th>Position</th>
                        <th>Shift</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tbody>';
        foreach( $res2 as $row2 ){
            echo '<tr>
            <th>' . $row2["id"] . '</th>
            <td>' . $row2["name"] . '</td>
            <td>' . $row2["division"] . '</td>
            <td>' . $row2["dept"] . '</td>
            <td>' . $row2["process"] . '</td>
            <td>' . $row2["position"] . '</td>
            <td>' . $row2["shift"] . '</td>
            <td>' . $row2["level"] . '</td></tr>';
        }
        echo '</tbody></table>';
    }else{
        echo '<div class="alert alert-danger">Not found</div>';
    }
?>