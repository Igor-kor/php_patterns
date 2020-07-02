<?php
/**
 * Прототип (Prototype)
 *
 * Порождающий шаблон
 *
 * Когда необходим объект, похожий на существующий объект,
 * либо когда создание будет дороже клонирования.
 */

use Prototype\Sheep;

include "../spl_autoloader.php";

echo "Прототип (Prototype)<br>";

$original = new Sheep('Джолли');
echo $original->getName()."<br>"; // Джолли
echo $original->getCategory()."<br>"; // Горная овечка
echo $original->getLifetime()."<br>"; // Продолжительность жизни

// Клонируем и модифицируем то что нужно
$cloned = clone $original;
$cloned->setName('Долли');
echo $cloned->getName()."<br>"; // Долли
echo $cloned->getCategory()."<br>"; // Горная овечка
echo $cloned->getLifetime()."<br>"; // Продолжительность жизни