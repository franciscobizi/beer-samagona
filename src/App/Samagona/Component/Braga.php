<?php

namespace App\Samagona\Component;
 

class Braga
{
    private $sugar, $voda;
    
    public function __construct(){}

    public function braga_ingr($sugar, $voda)
    {
        $this->sugar = $sugar;
        $this->voda = $voda;
        $braga = $this->sugar +  $this->voda;
        return $braga;
    }
    
    
}
