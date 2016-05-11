<?php

namespace App\Controller;

use App\Samagona\Samagona;

class SAController
{
    public function SAMAGON($water,$sugar,$fire,$pipe)
    {
       
        /*
         * Create each object of the components 
         */
        $drova = Samagona::Gotovk_samagona('Vogon');
        $braga = Samagona::Gotovk_samagona('Braga');
        $misca = Samagona::Gotovk_samagona('Misca');
        $butilka = Samagona::Gotovk_samagona('Butilka');
        $truba = Samagona::Gotovk_samagona('Truba');
        /*
         * Calling methods of each components
         */
        $pci = $drova->palite($fire);
        $m = $braga->braga_ingr($sugar, $water);
        $Q = $misca->Kipitite($m, $pci);
        $c = $truba->condesator($pipe, $Q);
        $samagon = $butilka->zberigate_samagona($c);
        
        return $samagon;
        
        
    }
    
}

