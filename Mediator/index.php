<?php
/**
 * Посредник (Mediator)
 *
 * Поведенческий шаблон
 *
 * Шаблон посредник подразумевает добавление стороннего объекта (посредника)
 * для управления взаимодействием между двумя объектами (коллегами).
 * Шаблон помогает уменьшить связанность (coupling) классов,
 * общающихся друг с другом, ведь теперь они не должны знать о реализациях своих собеседников.
 */

use Mediator\ChatRoom;
use Mediator\User;

include "../spl_autoloader.php";

echo "Посредник (Mediator)<br>";

$mediator = new ChatRoom();

$john = new User('John Doe', $mediator);
$jane = new User('Jane Doe', $mediator);

$john->send('Привет!');
$jane->send('Привет!');

// Вывод
// Feb 14, 10:58 [John]: Привет!
// Feb 14, 10:58 [Jane]: Привет!