<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "db_practice2";
    $connect = new mysqli($servername, $username, $password, $dbName);
    if($connect->connect_error){
        die("Connection Failed: " . $connect->connect_error);
    }
?>