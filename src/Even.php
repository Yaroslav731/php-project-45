<?php

declare(strict_types=1);

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function parityGame()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $count = 0;
    while ($count < 3) {
        $randomNumber = random_int(1, 100);
        line("Question: {$randomNumber}");
        $answerUser = prompt('Your answer');
        $correctAnswer = isEven($randomNumber) ? 'yes' : 'no';
        if ($answerUser !== $correctAnswer) {
            line("'yes' is wrong answer ;(. Correct answer was 'no'. Let's try again, {$name}!");
            return;
        }
        line('Correct!');
        $count += 1;
    }
    line("Congratulations, {$name}!");
}
