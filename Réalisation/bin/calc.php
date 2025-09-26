<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Calculator;
use App\Converter;
use App\OutputHandler;


try {
    $options = getopt('', ['json']);

    if (count($argv) < 3) {
        throw new InvalidArgumentException("Veuillez fournir deux nombres, exemple: php bin/calc.php 5 3");
    }

    $numberA = (int) $argv[1];
    $numberB = (int) $argv[2];

    $converterA = new Converter($numberA);
    $converterB = new Converter($numberB);
    
    $calculator = new Calculator($numberA, $numberB);

    $results = [
        'A' => $numberA,
        'B' => $numberB,
        'binaryA' => $converterA->toBinary(),
        'binaryB' => $converterB->toBinary(),
        'AND' => $calculator->and(),
        'OR' => $calculator->or(),
        'XOR' => $calculator->xor(),
        'NOT A' => $calculator->notA(),
    ];

    $outputHandler = new OutputHandler($results);

    if (isset($options['json'])) {
        $outputHandler->saveJson();
    } else {
        $outputHandler->display();
    }
    
} catch (Throwable $e) {
    fwrite(STDERR, "Erreur: " . $e->getMessage() . "\n");
    exit(1);
}