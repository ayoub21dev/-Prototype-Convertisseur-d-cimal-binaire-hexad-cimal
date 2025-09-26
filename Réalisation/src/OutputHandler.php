<?php

namespace App;

class OutputHandler
{
    private array $results;

    public function __construct(array $results)
    {
        $this->results = $results;
    }

    public function display(): void
    {
        echo "Entrée A : " . $this->results['A'] . " (" . $this->results['binaryA'] . ")\n";
        echo "Entrée B : " . $this->results['B'] . " (" . $this->results['binaryB'] . ")\n";
        echo "A ET B : " . $this->results['AND'] . " (" . decbin($this->results['AND']) . ")\n";
        echo "A OU B : " . $this->results['OR'] . " (" . decbin($this->results['OR']) . ")\n";
        echo "A XOR B: " . $this->results['XOR'] . " (" . decbin($this->results['XOR']) . ")\n";
        echo "NON A  : " . $this->results['NOT A'] . " (" . decbin($this->results['NOT A']) . ")\n";
    }

    public function saveJson(): void
    {
        echo json_encode($this->results, JSON_PRETTY_PRINT);
    }
}