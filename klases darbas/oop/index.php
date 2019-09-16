<?php
require __DIR__ . '/vendor/autoload.php';

use RA\Entity\Car;
use RA\Entity\Student;

$automobilis = new Car();
$automobilis->spalva = 'raudona';
$automobilis->greitis = '50km/h';
//$automobilis->bakas = '140l';
try {
    echo $automobilis->gautiSpalva() . "<br>"; // raudona
    $automobilis->vaziuoti(); // Automobilis važiuoja 50km/h greičiu
    $automobilis->vaziuoti(); // Automobilis važiuoja 50km/h greičiu


    $studentai = [
        ['vardas' => 'Vardenis0', 'pavarde' => 'Pavardenis0', 'grupe' => 'KCS21V', 'gimimoData' => '1980-01-01'],
        ['vardas' => 'Vardenis1', 'pavarde' => 'Pavardenis1', 'grupe' => 'KCS21V', 'gimimoData' => '1980-01-02'],
        ['vardas' => 'Vardenis2', 'pavarde' => 'Pavardenis2', 'grupe' => 'KCS21V', 'gimimoData' => '1980-01-03'],
        ['vardas' => 'Vardenis3', 'pavarde' => 'Pavardenis3', 'grupe' => 'KCS21V', 'gimimoData' => '1980-01-04'],
        ['vardas' => 'Vardenis4', 'pavarde' => 'Pavardenis4', 'grupe' => 'KCS20V', 'gimimoData' => '1980-01-04'],
        ['vardas' => 'Vardenis5', 'pavarde' => 'Pavardenis5', 'grupe' => 'KCS20V', 'gimimoData' => '1980-01-04'],
    ];
    $naujaGrupe = pildytiStudentus($studentai) ?? [];
    //lektoriaus githubeeeee
    spausdintiStudentus($naujaGrupe)

    foreach ($studentai as $studentas) {
        $student = new Student();
        $student->setFirstName($studentas['vardas']);
        $student->setLastName($studentas['pavarde']);
        $student->setGroup($studentas['grupę']);
        $student->setBirthDate($studentas['gimimoData']);
        $naujaGrupe[] = $student;
    }
} catch (\Exception $exception) {
    echo 'Oii.. nutiko gyvenimas ir įvyko klaida :P :D';
}

$automobilis->keistibakodydi("100l");

echo "<br>Bakas: ", $automobilis->gautiBakoDydi();



