<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Cart</title>
</head>
<body>
    <?php
    if(!empty($_SESSION['cart'])){
        echo "<p>Jumlah Data: ". sizeof($_SESSION['cart']['arrCart']). "<br><a href=cart-remove.php>Kosongkan Cart</a></p><br>";

        $max = sizeof($_SESSION['cart']['arrCart']);
        for($i = 0; $i < $max; $i++){
            while (list ($key, $val) = each ($_SESSION['cart']['arrCart'][$i])) { 
                echo "$key -> $val &nbsp"; 
            }    
            echo "<br>";
        }
    }else {
        echo "<p>Cart Kosong</p>";
    }
    ?>
</body>
</html>