<?php
    session_start();
    require_once("../app/conn.php");
    require_once("../app/logout2.php");
    //require_once("../app/equipmentRec.php");
?>
<!DOCTYPE html>
<html lang="en">
    <?php require_once("../template/head2.php"); ?>
    <body>
        <?php require_once("../template/navbar2.php"); ?>
        <div class="container-fluid">
            <div class="col-12" style="margin-top: 100px;">
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    <?php require_once("../app/equipmentRec.php"); ?>
                    <div class="card">
                        <div class="card-header" role="tab" id="equipment2">
                            <h5 class="mb-0">
                                <a class="collapsed" href="#collapse_e2" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">
                                    e2
                                </a>
                            </h5>
                        </div>
                        <div id="collapse_e2" class="collapse" role="tabpanel" aria-labelledby="equipment2">
                            <div class="card-block">
                                content e2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php $conn = null; ?>