<?php

namespace App;
interface ConverterInterface 
{
    public function toBinary(): string;
    public function toHexa(): string;
}