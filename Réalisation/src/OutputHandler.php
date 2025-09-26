<?php

namespace App;

class OutputHandler
{
    private array $results;

    public function __construct(array $results)
    {
        $this->results = $results;
    }


    public function saveJson(): void
    {
        echo json_encode($this->results, JSON_PRETTY_PRINT);
    }
}