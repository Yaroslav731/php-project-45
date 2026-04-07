<?php

declare(strict_types=1);

namespace Hexlet\Code\Games;

use function Hexlet\Code\runGame;

function playProgression(): void
{
        $description = 'What number is missing in the progression?';
        $rounds = [];
    for ($i = 0; $i < 3; $i++) {
            $start = random_int(1, 20);
            $step = random_int(1, 10);
            $length = 10;
            $progression = [];
        for ($j = 0; $j < $length; $j++) {
                 $progression[] = $start + ($step * $j);
        }
            $randomIndex = rand(0, $length - 1);
            $correctAnswer = $progression[$randomIndex];
            $progression[$randomIndex] = '..';
            $rounds[] = ['question' => implode(' ', $progression), 'answer' => (string) $correctAnswer];
    }
    runGame($description, $rounds);
}
