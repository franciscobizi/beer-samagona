<?php

namespace App\Samagona;
use App\Samagona\Component\Vogon;
use App\Samagona\Component\Braga;
use App\Samagona\Component\Butilka;
use App\Samagona\Component\Misca;
use App\Samagona\Component\Truba;

class Samagona
{
    
    public function __construct()
    {
        echo 'Gotovemo Samagona...<br>';
    }

    public static function Gotovk_samagona($type = '')
    {
        $class = $type;
        
        switch($class)
        {
            case 'Vogon':
                return new Vogon();
                break;
            case 'Braga':
                return new Braga();
                break;
            case 'Truba':
                return new Truba();
                break;
            case 'Butilka':
                return new Butilka();
                break;
            case 'Misca':
                return new Misca();
                break;
            
            default:
                
        }
    }
}
