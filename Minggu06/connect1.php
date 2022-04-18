<!-- procedural based MySQL connection -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // create connection
    $conn = mysqli_connect($servername, $username, $password);

    // check connection
    if ($conn){
        echo "Connection Success!";
    }else {
        die("Connection Failed: ". mysqli_connect_error());
    }
?>