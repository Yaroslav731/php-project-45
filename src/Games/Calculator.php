<?php

declare(strict_types=1);

namespace Hexlet\Code\Games;

use function Hexlet\Code\runGame;

function calculatorGame(): void
{
        $description = ('What is the result of the expression?');
        $rounds = [];
        $operators = ['+', '-', '*'];
    for ($i = 0; $i < 3; $i++) {
                $num1 = random_int(1, 100);
                $num2 = random_int(1, 15);
                $operator = $operators[array_rand($operators)];
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
            $rounds[] = ['question' => $question, 'answer' => (string) $correctAnswer];
    }
    runGame($description, $rounds);
}
