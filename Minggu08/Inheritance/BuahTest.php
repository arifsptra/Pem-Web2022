<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buah</title>
</head>
<body>
    <?php
    include "BuahHard.php";
    include "BuahSoft.php";

    $pear = new BuahHard("Pear", "Putih");
    $pear->message();
    $pear->intro();
    echo "<br />";

    $pache = new BuahSoft("Pache", "PutihHitam");
    $pache->message();
    $pache->intro();
    echo "<br />";

    // Error Karena hanya dapat diakses oleh class itu sendiri
    // $pear->printManfaat();
    // $pache->printManfaat();

    ?>
</body>
</html>