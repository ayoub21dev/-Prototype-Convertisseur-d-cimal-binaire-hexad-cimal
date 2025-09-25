<?php 

namespace App;
use App\ConverterInterface;

class Converter implements ConverterInterface {

            private int $number;
            public function __construct(int $number)
                                                {
               $this->number = $number;
             }
             public function toBinary():string{
                return decbin($this->number);
             }
             public function toHexa():string{
                return dechex($this->number);
             }
  

};