<?php

namespace App\Samagona\Component;
 

class Truba
{
    private $diametr, $para;
    public function __construct(){}

    public function condesator($diametr, $para)
    {
        $this->diametr = $diametr;
        $this->para = $para / 100;
        
        $result = $this->para / $this->diametr;
        //$samagon = $result{1};
        return $result;
    }
}
