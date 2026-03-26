<?php

declare(strict_types=1);

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

function calculatorGame(): void
{
        $name = greeting();
        line('What is the result of the expression?');
        $rounds = [];
        $operators = ['+', '-', '*'];
        $randomKey = array_rand($operators);
for ($i = 0; $i < 3; $i++) {
                $num1 = random_int(1, 100);
                $num2 = random_int(1, 60);
                $operator = $operators[$randomKey];
                $question = "{$num1} {$operator} {$num2}";
                $correctAnswer = 0;
    switch ($operator) {
        case '+':
            $correctAnswer = $num1 + $num2;
            break;
        case '-':
            $correctAnswer = $num1 - $num2;
            break;
        case '*':
            $correctAnswer = $num1 * $num2;
    }
                line("Question: $question");
                    $userAnswer = prompt('Your answer');
    if ((int)$userAnswer === $correctAnswer) {
	    line('Correct!');	    
    } else {
                line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.
                Let's try again, {$name}!");
                   return;
    }
}
line("Congratulations, {$name}!");
}
