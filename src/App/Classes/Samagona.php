<?php

namespace App\Classes;

/**
* Samagona Class to make Samagona
* Author : Francisco Bizi, <taylorsoft28@gmail.com> 
*
* PHP 7
* Using chained methods
* Methods : wood, boil, condesator, converToliter and save
*
* Return : number of liters does were made
*/

class Samagona
{
    private $water, $sugar, $fire, $pipe, $condesator, $braga, $wood, $tank;

    public function __construct($water, $sugar, $fire, $pipe)
    {
        $this->water = $water; 
        $this->sugar = $sugar;
        $this->fire = $fire;
        $this->pipe = $pipe;
    }

    // As Wood object
    public function wood(){

        /*
         * 1kg = 2527.2 kcal
         * Q = D * PCI / Q = kcal/h, D = consumo de combustivel por hora / PCI = 2.600 kcal/kg ou Kcal/m3
         */
        //$drov = $drova * 2527.2;
        $this->wood = $this->fire * 2527.2;
        //$d = '';
        //$Q = $d * $pci;
        return $this;
    }

    // As Fire object
    public function boil(){

        $this->condesator =  $this->braga * $this->wood * 100;
        return $this;
    }

    // As Braga object
    public function braga(){

        $this->braga = $this->sugar +  $this->water;

        return $this;
        
    }
    // As pipe object
    public function condesator(){
        
        /*
         *  C = (Vapor/100*C)/ d
         */
        
        $this->condesator = $this->condesator / 100;
        $this->condesator = $this->condesator / $this->pipe;
        $this->condesator = $this->converToliter($this->condesator);

        $this->tank = $this->condesator;
        return $this;
    }

    /**  
     * method to converteConverte kg/m3 to liter
     * @param int $result
     * @return int $rev 
     */
    private function converToliter($result)
    {
        $actual = strrev($result);
        $rev = substr($actual, -1);
        
        return strrev($rev);
    }

    // Save the final result and print it
    public final function save(){
        
        return "It was made $this->tank liter(s) of samagon";
    }


}
