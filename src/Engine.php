<?php

declare(strict_types=1);

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

function runGame(string $description, array $rounds)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    line("{$description}");
    foreach ($rounds as $round) {
        line("Question: {$round['question']}");
        $userAnswer = prompt('Your answer');
        if ($userAnswer !== (string) $round['answer']) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$round['answer']}'.
				Let's try again, {$name}!");
            return;
        }
        line('Correct!');
    }
        line("Congratulations, {$name}!");
}
