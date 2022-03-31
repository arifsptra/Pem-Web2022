<?php
    if(isset($_POST['nama'])){
        $nama = $_POST['nama'];
        $hobi = $_POST['hobi'];
        $age = $_POST['age'];
        echo "Hallo, ", $nama, "<br/>";
        echo "Hobi anda ", $hobi, "<br/>";
        echo "anda sekarang sudah berusia ", $age;
    }
?>