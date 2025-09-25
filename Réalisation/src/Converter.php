<?php 

namespace APP;
class Converter{
            private int $number;
            public function __construct(int $number)
                                                {
               $this->number = $number;
             }
             public function toBinary(){
                return decbin($this->number);
             }
             public function toHexa(){
                return dechex($this->number);
             }
  

}