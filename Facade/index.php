<?php
/**
 * Фасад (Facade)
 *
 * Cтруктурный шаблон
 *
 * Шаблон фасад предоставляет упрощенный интерфейс для сложной системы.
 */

include "../spl_autoloader.php";

echo "Фасад (Facade)<br>";

use Facade\Computer;
use Facade\ComputerFacade;

$computer = new ComputerFacade(new Computer());
$computer->turnOn(); // Ай! Бип-бип! Загрузка.. Готов к использованию!
$computer->turnOff(); // Буп-буп-буп-бззз! Аах! Zzzzz