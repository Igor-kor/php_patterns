<?php
/**
 * Команда (Command)
 *
 * Поведенческий шаблон
 *
 * Позволяет вам инкапсулировать действия в объекты.
 * Основная идея, стоящая за шаблоном — это предоставление средств,
 * для разделения клиента и получателя.
 */

use Command\Bulb;
use Command\RemoteControl;
use Command\TurnOff;
use Command\TurnOn;

include "../spl_autoloader.php";

echo "Команда (Command)<br>";

$bulb = new Bulb();

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$remote = new RemoteControl();
$remote->submit($turnOn); // Лампочка загорелась!
$remote->submit($turnOff); // Темнота!