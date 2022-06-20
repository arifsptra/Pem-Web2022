<?php 
    $servername = "localhost";
    $username = "root";
    $password = "S3cur3@$";
    $myDB="kutani";
    $conn = new mysqli($servername, $username, $password,$myDB);
    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }
?>