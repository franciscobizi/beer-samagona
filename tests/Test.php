<?php
namespace tests;
//use PHPUnit_Framework_TestCase;
use PHPUnit\Framework\TestCase;
use App\Classes\Builder;
/*  
* ./vendor/bin/phpunit --bootstrap ./vendor/autoload.php --testdox tests
*/
final class BuilderTest extends TestCase
{
    /**
     * @test
     */

    public function testCanBeUsedAsBuilder()
    {
        
        $actual = Builder::create()
               ->setIngredients(1, 1, 1, 1)
               ->build()
               ->wood()
               ->braga()
               ->boil()
               ->condesator()
               ->save();
        $expected = 100;

        $this->assertEquals($expected,$actual);
    }

  
}

