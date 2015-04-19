<?php

use ToniPeric\Oib;

class OibTest extends PHPUnit_Framework_TestCase
 {
     /**
      * @test
      */
     function it_validates_a_single_oib()
     {
         $this->assertEquals(true, Oib::validate(71481280786));
     }

    /**
     * @test
     */
    function it_invalidates_a_single_oib()
    {
        $this->assertEquals(false, Oib::validate('foo'));
    }

    /**
     * @test
     */
    public function it_validates_an_array_of_oibs()
    {
        $oibs = array(71481280786, 64217529143, 'foo');

        $this->assertEquals(array($oibs[0] => true, $oibs[1] => true, $oibs[2] => false), Oib::validate($oibs));
    }
 }
