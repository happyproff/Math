<?php



use happyproff\Math\Calc;



class MathTest extends PHPUnit_Framework_TestCase {



    public function testCalcInstanceCreation () {

        $calc = new Calc;
        $this->assertInstanceOf('happyproff\Math\Calc', $calc);

    }



    /**
     * @expectedException InvalidArgumentException
     */
    public function testCalcStrictInvalid () {

        $calc = new Calc;
        $calc->setStrict(1);

    }



    public function testCalcStrict () {

        $calc = new Calc;

        $calc->setStrict(true);
        $this->assertEquals(true, $calc->getStrict());

        $calc->setStrict(false);
        $this->assertEquals(false, $calc->getStrict());

    }



    public function testPlus () {

        $calc = new Calc;

        $result = $calc->plus(1, 5);
        $this->assertEquals(6, $result);

        $result = $calc->plus(1, "5");
        $this->assertEquals(6, $result);

    }



    /**
     * @expectedException InvalidArgumentException
     */
    public function testPlusStrict () {

        $calc = new Calc;
        $calc->setStrict(true);

        $calc->plus(1, "5");

    }



    public function testMinus () {

        $calc = new Calc;

        $result = $calc->minus(5, 1);
        $this->assertEquals(4, $result);

        $result = $calc->minus("5", 1);
        $this->assertEquals(4, $result);

    }



    /**
     * @expectedException InvalidArgumentException
     */
    public function testMinusStrict () {

        $calc = new Calc;
        $calc->setStrict(true);

        $calc->minus("5", 1);

    }



}
