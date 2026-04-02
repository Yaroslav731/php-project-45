<?php

declare(strict_types=1);

namespace Hexlet\Code;

function findGcd(): void
{
        $description = 'Find the greatest common divisor of given numbers.';
        $rounds = [];
    for ($i = 0; $i < 3; $i++) {
                $num1 = random_int(1, 50);
                $num2 = random_int(1, 50);
                $findGcd = gmp_gcd($num1, $num2);
                $gcd = gmp_strval($findGcd);
                $rounds[] = ['question' => "{$num1} {$num2}", 'answer' => $gcd];
    }
    runGame($description, $rounds);
}
