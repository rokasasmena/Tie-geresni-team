<?php

namespace RA\Entity;

Class Car
{
    public $spalva;
    public $greitis;
    private $rida;
    private $bakas;


    public function vaziuoti()
    {
        echo "Automobilis važiuoja" . $this->greitis . "greičiu";
        $this->rida += (int)$this->greitis;
    }

    public function gautiSpalva()
    {
        return $this->spalva;
    }

    public function gautiRida()
    {
        return $this->rida;
    }

    public function gautiBakoDydi()
    {
        return $this->bakas;
    }

    public function keistibakodydi(string $string)
    {
        $this->bakas = $string;

    }
}


