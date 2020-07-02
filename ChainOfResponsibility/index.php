<?php
/**
 * Цепочка обязанностей (Chain of Responsibility)
 *
 * Поведенческий шаблон
 *
 * цепочка обязанностей помогает строить цепочки объектов.
 * Запрос входит с одного конца и проходит через каждый объект,
 * пока не найдет подходящий обработчик.
 */


use ChainOfResponsibility\Bank;
use ChainOfResponsibility\Bitcoin;
use ChainOfResponsibility\Paypal;

include "../spl_autoloader.php";

echo "Цепочка обязанностей (Chain of Responsibility)<br>";

// Подготовим цепь
//      $bank->$paypal->$bitcoin
//
// Первый по приоритету банк
//      Если нельзя через банк, то Paypal
//      Если нельзя через Paypal, то Bitcoin

$bank = new Bank(100);          // Банк с балансом 100
$paypal = new Paypal(200);      // Paypal с балансом 200
$bitcoin = new Bitcoin(300);    // Bitcoin с балансом 300

$bank->setNext($paypal);
$paypal->setNext($bitcoin);

// Попробуем оплатить через банк
try {
    $bank->pay(259);
} catch (Exception $e) {
    echo "Error:" . $e;
}

// Вывод
// ==============
// Нельзя заплатить, используя Банк. Обработка ..
// Нельзя заплатить, используя Paypal. Обработка ..:
// Оплата 259, используя Bitcoin!