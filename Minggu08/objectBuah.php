<?php
include "classBuah.php";

// $apel = new Buah();
// $mangga = new Buah();

// $apel->setNama('Apel');
// $mangga->setNama('Mangga');

$apel = new Buah("Apel");
$mangga = new Buah("Mangga");

echo $apel->getNama();
echo "<br";
echo $mangga->getNama();
?>