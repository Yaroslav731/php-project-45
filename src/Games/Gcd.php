<?php

declare(strict_types=1);

namespace Hexlet\Code\Games;

use function Hexlet\Code\runGame;

function calculateGcd(int $a, int $b): int
{
    while ($b !== 0) {
        $remainder = $a % $b;
        $a = $b;
        $b = $remainder;
    }
        return $a;
}

function findGcd(): void
{
        $description = 'Find the greatest common divisor of given numbers.';
        $rounds = [];
    for ($i = 0; $i < 3; $i++) {
                $num1 = random_int(1, 50);
                $num2 = random_int(1, 50);
                $gcd = calculateGcd($num1, $num2);
                $rounds[] = ['question' => "{$num1} {$num2}", 'answer' => (string) $gcd];
    }
    runGame($description, $rounds);
}
