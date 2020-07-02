<?php
/**
 * Фабричный метод (Fabric Method)
 *
 * Порождающий шаблон
 *
 * Полезен, когда есть некоторая общая обработка в классе,
 * но необходимый подкласс динамически определяется во время выполнения.
 * Иными словами, когда клиент не знает, какой именно подкласс ему может понадобиться.
 */

use FabricMethod\DevelopmentManager;
use FabricMethod\MarketingManager;

include "../spl_autoloader.php";

echo "Фабричный метод (Fabric Method)<br>";

$devManager = new DevelopmentManager();
$devManager->takeInterview(); // Вывод: Спрашивает о шаблонах проектирования!

$marketingManager = new MarketingManager();
$marketingManager->takeInterview(); // Вывод: Спрашивает о работе с сообществом