<!-- PDO connection – Object based MySQL -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $myDB = "db_practice";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection Successful";
    }catch(PDOException $e){
        echo "Connection Failed: ". $e->getMessage();
    }
?>