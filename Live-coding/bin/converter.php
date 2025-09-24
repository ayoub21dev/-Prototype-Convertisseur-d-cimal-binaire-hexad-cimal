<?php

require __DIR__ . '/../vendor/autoload.php';

use App\NumberConverter;
use InvalidArgumentException;
use Throwable;

try {
    $options = getopt('', [
        'and:', 'or:', 'xor:', 'not', 'shift-left:', 'shift-right:',
    ]);
    
    $number = (int) ($argv[1] ?? null);

    if (!is_numeric($number) || empty($number)) {
        throw new InvalidArgumentException("Veuillez fournir un nombre valide.");
    }

    $converter = new NumberConverter($number);
    
    echo $converter->format("Decimal", $converter->toDecimal());
    echo $converter->format("Binary", $converter->toBinary());
    echo $converter->format("Hexa", $converter->toHexa());

    if (isset($options['and'])) {
        echo $converter->format("AND", $converter->BitwiseAnd((int)$options['and']));
    }
    if (isset($options['or'])) {
        echo $converter->format("OR", $converter->BitwiseOr((int)$options['or']));
    }
    if (isset($options['xor'])) {
        echo $converter->format("XOR", $converter->BitwiseXor((int)$options['xor']));
    }
    if (isset($options['not'])) {
        echo $converter->format("NOT", $converter->BitwiseNot());
    }
    if (isset($options['shift-left'])) {
        echo $converter->format("Shift Left", $converter->ShiftLeft((int)$options['shift-left']));
    }
    if (isset($options['shift-right'])) {
        echo $converter->format("Shift Right", $converter->ShiftRight((int)$options['shift-right']));
    }

} catch (Throwable $e) {
    fwrite(STDERR, "Erreur: " . $e->getMessage() . PHP_EOL);
    exit(1);
}