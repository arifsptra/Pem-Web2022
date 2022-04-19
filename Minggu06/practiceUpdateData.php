<!-- update data -->
<?php
    // include file connection to database
    include "connect2.php";

    // sql to update data
    $sql = "UPDATE item SET price=20000 WHERE id='1'";
    
    if($conn->query($sql) === TRUE){
        echo "Record updated successfully";
    }else {
        echo "Error: ". $sql . "<br />" . $conn->error;
    }
    $conn -> close();
?>