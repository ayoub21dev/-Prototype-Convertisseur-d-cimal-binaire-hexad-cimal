<?php
namespace App;
class calculator{
 private int $numberA;
 private int $numberB;
    public function __construct(int $number1,int $number2)
    {
        $this->numberA = $number1;
        $this->numberB = $number2;
    }

   public function and(): int
    {
        return $this->numberA & $this->numberB;
    }

    public function or(): int
    {
        return $this->numberA | $this->numberB;
    }

    public function xor(): int
    {
        return $this->numberA ^ $this->numberB;
    }

    public function notA(): int
    {
        return ~$this->numberA;
    }




}