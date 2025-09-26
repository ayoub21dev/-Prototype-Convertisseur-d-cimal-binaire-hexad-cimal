<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Calculator;
use App\OutputHandler;


try {
    $input = trim(file_get_contents(__DIR__ . '/../samples/input.txt'));
    $args = explode(' ', $input);

    if (count($args) < 2 || empty($input)) {

    throw new InvalidArgumentException("Veuillez fournir deux nombres");

    }

    $numberA = (int) $args[0];
    $numberB = (int) $args[1];

    $calculator = new Calculator($numberA, $numberB);

    $results = [
        'A' => $numberA,
        'B' => $numberB,
        'AND' => $calculator->and(),
        'OR' => $calculator->or(),
        'XOR' => $calculator->xor(),
        'NOT A' => $calculator->notA(),
    ];

    $outputHandler = new OutputHandler($results);
    $outputHandler->saveJson();
    
} catch (Throwable $e) {
    fwrite(STDERR, "Erreur: " . $e->getMessage() . "\n");
    exit(1);
}