<?php
/**
 * Одиночка (Singleton)
 *
 * Порождающий шаблон
 *
 * Гарангирует единственный экземпляр обьекта
 * Антипоттерн)
 */

use Singleton\President;

include "../spl_autoloader.php";

echo "Одиночка (Singleton)<br>";

$president1 = President::getInstance();
$president2 = President::getInstance();

var_dump($president1 === $president2); // true