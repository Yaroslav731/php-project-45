<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

function greeting()
{
	line('Welcome to the Brain Games!');
	line('May I have your name?');
	
        $name = trim(fgets(STDIN));

	sleep(1);
	line("Привет, друзья! - {$name}!");

        sleep(1);
	line("Надеюсь у вас все - Слава Богу?)");

        sleep(2);
	line("Хочу пожелать вам благословеного дня! :)");

        sleep(3);
        line("Не забывайте про общение с Бoгом! а также... До встречи на домашечки в четверг! :)");
}
