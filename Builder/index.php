<?php
/**
 * Строитель (Builder)
 *
 * Порождающий шаблон
 *
 * Когда может быть несколько видов объекта и надо избежать «телескопического конструктора».
 * Главное отличие от «фабрики» — это то, что она используется, когда создание занимает один шаг,
 * а «строитель» применяется при множестве шагов.
 */

use Builder\BurgerBuilder;

include "../spl_autoloader.php";

echo "Строитель (Builder)<br>";

$burger = (new BurgerBuilder(14))
    ->addPepperoni()
    ->addLettuce()
    ->addTomato()
    ->build();
$burger->getBurger();
