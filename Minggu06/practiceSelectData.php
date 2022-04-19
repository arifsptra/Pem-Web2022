<!-- select data -->
<?php
    // include file connection to database
    include "connect2.php";

    // sql to select data
    $sql = "SELECT * FROM item";
    $result = $conn ->  query($sql);

    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "<br />". $row["names"]. " ". $row["price"];
        }
    }else {
        echo "<p>Total is Zero</p>";
    }
    $conn->close();
?>