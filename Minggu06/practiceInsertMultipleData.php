<!-- insert multiple data -->
<!-- insert data -->
<?php
    // include file connection to database
    include "connect2.php";

    // sql to insert data
    $sql = "INSERT INTO item(id, names, price, total) VALUES (2, 'Jagung Manis', 5000, 2);";
    $sql .= "INSERT INTO item(id, names, price, total) VALUES (3, 'Ketan Hitam', 20000, 1);";

    if($conn->multi_query($sql) === TRUE){
        echo "New record added successfully";
    }else {
        echo "Error: ". $sql . "<br />" .$conn->error;
    }
    $conn -> close();
?>