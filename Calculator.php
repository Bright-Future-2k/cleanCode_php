<?php
const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';
class Calculator
{
    public $expected;
    public $result;

    public function calculate($firstOperator, $secondOparand, $Oparand) {
        switch ($Oparand) {
            case 'ADDITION':
                return $firstOperator + $secondOparand;
            case 'SUBTRACTION ':
                return $firstOperator - $secondOparand;
            case 'MULTIPLICATION':
                return $firstOperator * $secondOparand;
            case 'DIVISION':
                if ($secondOparand != 0) {
                    return $firstOperator / $secondOparand;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo ("Unsupported operation");
        }
    }
    public function assertEquals($expected,$result)
    {
        return $this->expected =$expected . ' ' . $this->result =$result;
    }
}