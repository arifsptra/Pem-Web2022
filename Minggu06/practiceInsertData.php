<!-- insert data -->
<?php
    // include file connection to database
    include "connect2.php";

    // sql to insert data
    $sql = "INSERT INTO item(id, names, price, total) VALUES (1, 'Beras Putih Pulen', 15000, 1)";

    if($conn->query($sql) === TRUE){
        echo "New record added successfully";
    }else {
        echo "Error: ". $sql . "<br />" .$conn->error;
    }
    $conn -> close();
?>