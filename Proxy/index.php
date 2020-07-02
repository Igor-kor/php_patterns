<?php
/**
 * Заместитель (Proxy)
 *
 * Структурный шаблон
 *
 * Используя шаблон заместитель, класс отображает функциональность другого класса.
 */

use Proxy\LabDoor;
use Proxy\Security;

include "../spl_autoloader.php";

echo "Заместитель (Proxy)<br>";

$door = new Security(new LabDoor());
$door->open('invalid'); // Нет! Это невозможно.

$door->open('$ecr@t'); // Открытие двери лаборатории
$door->close(); // Закрытие двери лаборатории