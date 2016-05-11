<?php

namespace App\Samagona\Component;
 

class Butilka
{
    private $result;
    public function __construct()
    {
        //$this->result; 
    }

    public function zberigate_samagona($result)
    {
        $this->result = $result;
        return $this->result;
    }
}
