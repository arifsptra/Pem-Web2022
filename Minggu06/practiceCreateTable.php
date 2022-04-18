<?php
    // create table
    // include file connection to database
    include "connect2.php";
    
    // sql to create table
    $sql = "CREATE TABLE item(
        id int(11) NOT NULL,
        names varchar(40) DEFAULT NULL,
        price double DEFAULT NULL,
        total int(11) DEFAULT NULL,
        PRIMARY KEY(id)
    )";

    if($conn->query($sql) === TRUE){
        echo "Table user created successfully";
    }else {
        echo "Error creating table: ". $conn->error;
    }
    $conn->close();
?>