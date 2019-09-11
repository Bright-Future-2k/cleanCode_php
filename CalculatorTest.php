<?php

require __DIR__ . "Calculator.php";


class CalculatorTest extends Calculator
{
    public function testCalculateAdd()
    {
        $firstNum = 1;
        $secondNum = 1;
        $oparand = 'ADDITION';

        $expected = 2;

        $calculator = new Calculator();
        $result = $calculator->calculate($firstNum, $secondNum, $oparand);
        $this->assertEquals($expected, $result);
    }



}