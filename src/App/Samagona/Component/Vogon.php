<?php

namespace App\Samagona\Component;
 

class Vogon
{
    private $drova;
    public function __construct(){}

    public function palite($drova)
    {
        /*
         * 1kg = 2527.2 kcal
         * Q = D * PCI / Q = kcal/h, D = consumo de combustivel por hora / PCI = 2.600 kcal/kg ou Kcal/m3
         */
        //$drov = $drova * 2527.2;
        $this->drova = $drova;
        $pci = $this->drova * 2527.2;
        //$d = '';
        //$Q = $d * $pci;
        return $pci;
    }
}
