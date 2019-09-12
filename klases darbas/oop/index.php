<?php
include 'Car.php';
$automobilis = new Car();
$automobilis->spalva = 'raudona';
$automobilis->greitis = '50km/h';

echo $automobilis->gautiSpalva() . "<br>"; // raudona
$automobilis->vaziuoti(); // Automobilis važiuoja 50km/h greičiu
$automobilis->vaziuoti(); // Automobilis važiuoja 50km/h greičiu

echo "<br>Rida:  ", $automobilis->gautiRida();