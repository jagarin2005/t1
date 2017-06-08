<?php
    require_once("conn.php");

    $sql = "SELECT e.id,e.name,e.model,e.number,e.manu,e.stat,p.id AS id,p.name AS name,bd.borrow_date,bd.return_date 
    FROM equipment AS e 
    INNER JOIN bdate AS bd ON e.id = bd.ide 
    INNER JOIN profile AS p ON bd.id = p.id 
    WHERE e.id = 't_01'";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    if($res = $stmt->fetchAll()){
        echo '<div class="card">
            <div class="card-header" role="tab" id="equipment1">
                <h5 class="mb-0">
                    <a class="collapsed" href="#collapse_e1" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
                        High Impedance Contacting, 820, PCAL 40045, TREK
                    </a>
                </h5>
            </div>
            <div id="collapse_e1" class="collapse" role="tabpanel" aria-labelledby="equipment1">
                <div class="card-block"><table class="table">
                <thead>
                    <th>รหัสพนักงาน</th>
                    <th>ชื่อพนักงาน</th>
                    <th>วันที่ยืม</th>
                    <th>วันที่คืน</th>
                </thead>
            <tbody>
                ';
    }
    foreach($res as $row){
        echo '
                <tr>
                <th scope="row">'.$row["id"].'</th>
                <td>'.$row["name"].'</td>
                <td>'.$row["borrow_date"].'</td>
                <td>'.$row["return_date"].'</td>
                </tr>
            ';
                }
                echo '</tbody>
            </table></div>
            </div>
        </div>'
    
?>