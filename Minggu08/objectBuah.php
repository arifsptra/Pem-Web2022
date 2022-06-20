<?php
include "classBuah.php";

$apel = new Buah();
$mangga = new Buah();

$apel->setNama('Apel');
$mangga->setNama('Mangga');

echo $apel->getNama();
echo "<br";
echo $mangga->getNama();
?>