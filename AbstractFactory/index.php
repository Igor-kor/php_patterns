<?php
/**
 * Абстрактная фабрика (Abstract Factory)
 *
 * Порождающий шаблон
 *
 * Когда есть взаимосвязанные зависимости с не очень простой логикой создания.
 */
include "../spl_autoloader.php";

use AbstractFactory\IronDoorFactory;
use AbstractFactory\WoodenDoorFactory;

echo "Абстрактная фабрика (Abstract Factory)<br>";

$woodenFactory = new WoodenDoorFactory();

$door = $woodenFactory->makeDoor();
$expert = $woodenFactory->makeFittingExpert();

$door->getDescription();  // Вывод: Я деревянная дверь
$expert->getDescription(); // Вывод: Я работаю только с деревянными дверями

// Аналогично для железной двери
$ironFactory = new IronDoorFactory();

$door = $ironFactory->makeDoor();
$expert = $ironFactory->makeFittingExpert();

$door->getDescription();  // Вывод: Я железная дверь
$expert->getDescription(); // Вывод: Я работаю только с железными дверями

