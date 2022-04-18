<!-- object based MySQL connection -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // create connection
    $conn = new mysqli($servername, $username, $password);

    // check connection
    if($conn -> connect_error){
        die("Connection Failed: ". $conn -> connect_error);
    }else {
        echo "Connection Successful";
    }
?>