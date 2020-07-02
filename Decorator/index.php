<?php
/**
 * Декоратор (Decorator)
 *
 * Cтруктурный шаблон
 *
 * Шаблон декоратор позволяет вам динамически изменять поведение объекта во время работы, оборачивая их в объект класса декоратора.
 */

use Decorator\MilkCoffee;
use Decorator\SimpleCoffee;
use Decorator\VanillaCoffee;
use Decorator\WhipCoffee;

include "../spl_autoloader.php";

echo "Декоратор (Decorator)<br>";

$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost(); // 10
echo $someCoffee->getDescription() ."<br>"; // Простой кофе

$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getCost(); // 12
echo $someCoffee->getDescription()."<br>"; // Простой кофе, молоко

$someCoffee = new WhipCoffee($someCoffee);
echo $someCoffee->getCost(); // 17
echo $someCoffee->getDescription()."<br>"; // Простой кофе, молоко, сливки

$someCoffee = new VanillaCoffee($someCoffee);
echo $someCoffee->getCost(); // 20
echo $someCoffee->getDescription()."<br>"; // Простой кофе, молоко, сливки, ваниль