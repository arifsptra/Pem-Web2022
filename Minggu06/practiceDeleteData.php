<!-- delete data -->
<?php
    // include file connection to database
    include "connect2.php";

    // sql to delete data
    $sql = "DELETE FROM item WHERE id='2'";

    if($conn->query($sql) === TRUE){
        echo "Delete data successfully";
    }else {
        echo "Error: ". $sql . "<br />" . $conn->error;
    }
    $conn -> close();
?>