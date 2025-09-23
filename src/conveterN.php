<?php

namespace App;

use InvalidArgumentException;

class Converter
{
    /**
     * @return array<string, int|string>
     */
    public static function convert(int $number): array
    {
        if ($number < 0) {
            throw new InvalidArgumentException("Le nombre doit être positif.");
        }

        return [
            'decimal' => $number,
            'binary' => decbin($number),
            'hexa' => dechex($number)
        ];
    }
}