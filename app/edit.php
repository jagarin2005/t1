<?php
    require_once("conn.php");

    $selects = $_GET['selects'];
    $searchbox = $_GET['searchbox'];
    $searchbox2 = "%". $searchbox ."%";

    $sql = "SELECT profile.id, profile.name, profile.division, profile.dept, profile.process, profile.position, profile.shift, profile.level, 
            DATE_FORMAT(SUM(IF(course.idc='tr_001',learning.date,NULL)),'%d/%m/%y') AS tr01,
            DATE_FORMAT(SUM(IF(course.idc='tr_002',learning.date,NULL)),'%d/%m/%y') AS tr02,
            DATE_FORMAT(SUM(IF(course.idc='tr_003',learning.date,NULL)),'%d/%m/%y') AS tr03,
            DATE_FORMAT(SUM(IF(course.idc='tr_004',learning.date,NULL)),'%d/%m/%y') AS tr04,
            DATE_FORMAT(SUM(IF(course.idc='tr_005',learning.date,NULL)),'%d/%m/%y') AS tr05,
            DATE_FORMAT(SUM(IF(course.idc='tr_006',learning.date,NULL)),'%d/%m/%y') AS tr06 
            FROM profile 
            LEFT JOIN learning ON profile.id = learning.id 
            LEFT JOIN course ON learning.idc = course.idc 
            WHERE $selects LIKE :searchbox 
            GROUP BY profile.id";

    $stmt2 = $conn->prepare($sql);
    $stmt2->bindParam(":searchbox", $searchbox2, PDO::PARAM_STR);
    $stmt2->execute();
    $stmt2->setFetchMode(PDO::FETCH_ASSOC);
    if( $res2 = $stmt2->fetchAll()){
        echo '<table class="table table-reponsive table-hover">
                <thead>
                    <tr>';  
                        echo '<th>ID</th>
                                <th>Name</th>
                                <th>Division</th>
                                <th>Dept</th>
                                <th>Process</th>
                                <th>Position</th>
                                <th>Shift</th>
                                <th>Level</th>';
                        echo '<th>Analytical skill</th>
                        <th>Basic SSS</th>
                        <th>Budget Cont.</th>
                        <th>Coaching</th>
                        <th>Leadership</th>
                        <th>Maizouskin</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>';
        foreach( $res2 as $row2 ){
            echo '<tr><th>' . $row2["id"] . '</th>
                    <td>' . $row2["division"] . '</td>
                    <td>' . $row2["name"] . '</td>
                    <td>' . $row2["dept"] . '</td>
                    <td>' . $row2["process"] . '</td>
                    <td>' . $row2["position"] . '</td>
                    <td>' . $row2["shift"] . '</td>
                    <td>' . $row2["level"] . '</td>';

            echo '<td>' . $row2["tr01"] . '</td>
            <td>' . $row2["tr02"] . '</td>
            <td>' . $row2["tr03"] . '</td>
            <td>' . $row2["tr04"] . '</td>
            <td>' . $row2["tr05"] . '</td>
            <td>' . $row2["tr06"] . '</td>
            <td><button class="btn btn-secondary" data-toggle="modal" data-target="#editModal" data-whatever="'.$row2["id"].'" style="cursor:pointer;"><i class="fa fa-edit"></i></button></td></tr>';
        }
        echo '</tbody></table>';
    }else{
        echo '<div class="alert alert-danger">Not found</div>';
    }
?>