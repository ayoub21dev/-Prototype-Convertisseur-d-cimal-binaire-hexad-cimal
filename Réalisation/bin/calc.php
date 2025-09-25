<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Calculator;
use App\Converter;


try {
    if (count($argv) < 3) {
        throw new InvalidArgumentException("Veuillez fournir deux nombres, exemple: php bin/calc.php 5 3");
    }

    $numberA = (int) $argv[1];
    $numberB = (int) $argv[2];

    $converterA = new Converter($numberA);
    $converterB = new Converter($numberB);
    
    $calculator = new Calculator($numberA, $numberB);

    echo "Entrée A : " . $numberA . " (" . $converterA->toBinary() . ")\n";
    echo "Entrée B : " . $numberB . " (" . $converterB->toBinary() . ")\n";
    
    echo "A ET B : " . $calculator->and() . " (" . decbin($calculator->and()) . ")\n";
    echo "A OU B : " . $calculator->or() . " (" . decbin($calculator->or()) . ")\n";
    echo "A XOR B: " . $calculator->xor() . " (" . decbin($calculator->xor()) . ")\n";
    echo "NON A  : " . $calculator->notA() . " (" . decbin($calculator->notA()) . ")\n";
    
} catch (Throwable $e) {
    fwrite(STDERR, "Erreur: " . $e->getMessage() . "\n");
    exit(1);
}