<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
</head>
<body>
    <?php
    session_start();
    if(empty($_SESSION['cart']['arrCart'])){
        $_SESSION['cart']['arrCart'] = array();
    }
    ?>
    <table>
        <tr>
            <td>
                <a href="addCart.php?brg=padi&hrg=10000&jml=1">Produk1</a> : 5000 
            </td>
        </tr>
    </table>
</body>
</html>