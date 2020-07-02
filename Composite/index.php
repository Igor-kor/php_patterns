<?php
/**
 * Компоновщик (Composite)
 *
 * Cтруктурный шаблон
 *
 * Шаблон компоновщик позволяет клиентам работать с индивидуальными объектами в едином стиле.
 */

use Composite\Employee;
use Composite\TaskManager;
use Composite\Team;

include "../spl_autoloader.php";

echo "Декоратор (Decorator)<br>";



$employee1 = new Employee("Вася");
$employee2 = new Employee("Петя");
$employee3 = new Employee("Вова");
$employee4 = new Employee("Дима");
$team1 = new Team([$employee3, $employee4]);

// ВНИМАНИЕ: передаем команду в taskManager как единый композит.
// Сам taskManager не знает, что это команда и работает с ней без модификации своей логики.
$taskManager = new TaskManager([$employee1, $employee2, $team1]);
$taskManager->performTask("Задача1");
$taskManager->performTask("Задача2");
$taskManager->performTask("Задача3");
$taskManager->performTask("Задача4");