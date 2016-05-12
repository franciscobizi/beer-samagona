<?php
namespace tests;
use PHPUnit_Framework_TestCase;
use App\Samagona\Component\Misca;
use App\Samagona\Component\Truba;
use App\Samagona\Component\Butilka;
use App\Samagona\Component\Braga;

class Test extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */

    public function CLASS_Misca()
    {
        
        $tank = new Misca();
        $actual = $tank->Kipitite('1', '1');
        $expected = 100;

        $this->assertEquals($expected,$actual);
    }
    /**
     * @test
     */
    public function CLASS_Braga()
    {
        
        $braga = new Braga();
        $actual = $braga->braga_ingr(1, 1);
        $expected = 2;

        $this->assertEquals($expected,$actual);
    }
    /**
     * @test
     */
    public function CLASS_Butika()
    {
        
        $butilka = new Butilka();
        $actual = $butilka->zberigate_samagona(1);
        $expected = 100;

        $this->assertEquals($expected,$actual);
    }
    /**
     * @test
     */
    public function CLASS_Truba()
    {
        
        $truba = new Truba();
        $actual = $truba->condesator(2, 4);
        $expected = 100;

        $this->assertEquals($expected,$actual);
    }
}

