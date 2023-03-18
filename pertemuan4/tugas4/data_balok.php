<?php

require_once 'class_balok.php';

$balok1 = new class_balok(29, 16, 7);
$balok2 = new class_balok(22, 8, 4);
$balok3 = new class_balok(29, 11, 4);
$balok4 = new class_balok(9, 4, 4);

echo "Balok 1 memiliki luas = " . $balok1->getLuas() . ", keliling = " . $balok1->getKeliling() . ", dan volume = " . $balok1->getVolume() . "<br>";
echo "Balok 2 memiliki luas = " . $balok2->getLuas() . ", keliling = " . $balok2->getKeliling() . ", dan volume = " . $balok2->getVolume() . "<br>";
echo "Balok 3 memiliki luas = " . $balok3->getLuas() . ", keliling = " . $balok3->getKeliling() . ", dan volume = " . $balok3->getVolume() . "<br>";
echo "Balok 4 memiliki luas = " . $balok4->getLuas() . ", keliling = " . $balok4->getKeliling() . ", dan volume = " . $balok4->getVolume() . "<br>";

?>
