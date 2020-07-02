<?php
/**
 * Приспособленец (Flyweight)
 *
 * Cтруктурный шаблон
 *
 * Приспособленец используется для минимизации использования памяти
 * или вычислительной стоимости путем разделения ресурсов с наибольшим количеством похожих объектов.
 */

use Flyweight\TeaMaker;
use Flyweight\TeaShop;

include "../spl_autoloader.php";

echo "Приспособленец (Flyweight)<br>";

$teaMaker = new TeaMaker();
$shop = new TeaShop($teaMaker);

$shop->takeOrder('меньше сахара', 1);
$shop->takeOrder('больше молока', 2);
$shop->takeOrder('без сахара', 5);

$shop->serve();
// Подаем чай на первый стол
// Подаем чай на второй стол
// Подаем чай на пятый стол