<?php

declare(strict_types=1);

namespace Hexlet\Code;

function parityGame()
{
    $description = ('Answer "yes" if the number is even, otherwise answer "no".');
    $rounds = [];
    for ($i = 0; $i < 3; $i++) {
        $num = random_int(1, 100);
        $rounds[] = [
                'question' => $num,
                'answer' => ($num % 2 === 0) ?  'yes' : 'no'
        ];
    }
    runGame($description, $rounds);
}
