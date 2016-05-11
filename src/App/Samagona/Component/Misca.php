<?php

namespace App\Samagona\Component;
 

class Misca
{
    private $braga, $vogon;
    public function __construct(){}

    public function Kipitite($braga,$vogon)
    {
        $this->braga = $braga;
        $this->vogon = $vogon;
        $Q = $this->braga * $this->vogon * 100;
        return $Q;
    }
}
