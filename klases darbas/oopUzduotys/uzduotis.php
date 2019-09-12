<?php

$ceu = [
    "Italy " => "Rome",
    "Luxembourg " => "Luxembourg",
    "Belgium " => "Brussels",
    "Denmark " => "Copenhagen",
    "Finland " => "Helsinki",
    "France " => "Paris",
    "Slovakia " => "Bratislava",
    "Slovenia " => "Ljubljana",
    "Germany " => "Berlin",
    "Greece " => "Athens",
    "Ireland " => "Dublin",
    "Netherlands " => "Amsterdam",
    "Portugal " => "Lisbon",
    "Spain " => "Madrid",
    "Sweden " => "Stockholm",
    "United Kingdom " => "London",
    "Cyprus " => "Nicosia",
    "Lithuania " => "Vilnius",
    "Czech Republic " => "Prague",
    "Estonia " => "Tallin",
    "Hungary " => "Budapest",
    "Latvia " => "Riga",
    "Malta " => "Valetta",
    "Austria " => "Vienna",
    "Poland " => "Warsaw",

];

echo "<br>";

echo "1. Išrinktos valstybės ir sostinės";

echo "<br>";
echo "<br>";

foreach ($ceu as $country => $capital) {
    echo $country . 'sostinė yra ' . $capital . '<br>';
}

echo "<br>";
echo "<br>";

echo "2. Išrinktos valstybės ir sostinės abecelės tvarka";

echo "<br>";
echo "<br>";

ksort($ceu);
foreach ($ceu as $country => $capital) {
    echo $country . 'sostinė yra ' . $capital . '<br>';
}

echo "<br>";
echo "<br>";

echo "3. Išrinkta kas penkta valstybė ir sostinė";

echo "<br>";
echo "<br>";

$result = array();
$i = 1;
$x = 4;
foreach ($ceu as $key => $value) {
    if ($i++ % $x == 0) {
        $result[] = $key;
        $value;
        echo $key . ' yra sostinė ' . $value . '<br>';
    }
}
