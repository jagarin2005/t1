<?php
    $server = "localhost";
    $dbname = "t1";
    $username ="root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("set names utf8");
    }
    catch(PDOException $e){
        echo "Connection Failed: " . $e->getMessage();
    }

?>