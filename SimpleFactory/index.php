<?php
/**
 * Простая фабрика (Simple Factory)
 *
 * Порождающий шаблон
 *
 * Когда создание объекта — это не просто несколько присвоений,
 * а какая-то логика, тогда имеет смысл создать отдельную
 * фабрику вместо повторения одного и того же кода повсюду.
 */

use SimpleFactory\FactoryDoor;

include "../spl_autoloader.php";

echo "Простая фабрика (Simple Factory)<br>";

$door = FactoryDoor::makeWoodenDoor(100, 200);
echo 'Width: ' . $door->getWidth();
echo 'Height: ' . $door->getHeight();

