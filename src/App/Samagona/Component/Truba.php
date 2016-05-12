<?php

namespace App\Samagona\Component;
 

class Truba
{
    private $diametr, $para;
    public function __construct(){}

    public function condesator($diametr, $para)
    {
        /*
         *  C = (Vapor/100*C)/ d
         */
        $this->diametr = $diametr;
        $this->para = $para / 100;
        
        $result = $this->para / $this->diametr;
        $samagon = $this->converToliter($result);
        return $samagon;
    }
    /*
     * Converte kg/m3 to liter
     */
    private function converToliter($result)
    {
        $actual = strrev($result);
        $rev = substr($actual, -1);
        
        return strrev($rev);
    }
}
