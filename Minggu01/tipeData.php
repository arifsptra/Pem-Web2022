<!DOCTYPE html>
<html>
    <body>
    <!-- String Data Type -->
    <?php
    $aku = "Arif Saputra";
    $kamu = "Fajriah Uswatun Hasanah";

    echo "<p>Aku <strong>$aku</strong> dan Kamu <strong>$kamu</strong></p>";
    var_dump($aku);
    var_dump($kamu);
    ?>

    <!-- Integer Data Type -->
    <?php
    $no1 = 11;
    $no2 = 30;
    $hasil = $no1 + $no2;

    echo "<br><br>Hasil $no1 + $no2 = $hasil<br><br>";
    var_dump($hasil);
    ?>

    <!-- Float Data Type -->
    <?php
    $floatVar = 30.11;

    echo "<br><br>$floatVar<br><br>";
    var_dump($floatVar);
    ?>

    <!-- Boolean Data Type -->
    <?php
    $benar = true;
    $salah = false;

    echo "<p>Antara $benar dan $salah </p>";
    var_dump($benar);
    var_dump($salah);
    ?>
    </body>
</html>