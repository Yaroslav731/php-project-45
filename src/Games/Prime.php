<?php

declare(strict_types=1);

namespace Hexlet\Code\Games;

function isPrime(int $n): bool
{
    if ($n <= 1) {
        return false;
    } elseif ($n <= 3) {
        return true;
    } elseif ($n % 2 == 0 || $n % 3 == 0) {
        return false;
    }
    for ($i = 5; $i * $i <= $n; $i += 6) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) {
                 return false;
        }
    }
    return true;
}

function playPrime(): void
{
        $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
        $rounds = [];
    for ($i = 0; $i < 3; $i++) {
        $num = random_int(1, 30);
        $correctionAnswer = isPrime($num) ? 'yes' : 'no';
        $rounds[] = ['question' => $num, 'answer' => $correctionAnswer];
    }
    runGame($description, $rounds);
}
