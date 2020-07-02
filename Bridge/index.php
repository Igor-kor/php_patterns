<?php
/**
 * Мост (Bridge)
 *
 * Cтруктурный шаблон
 *
 * Шаблон мост — это предпочтение композиции над наследованием.
 * Детали реализации передаются из одной иерархии в другой объект с отдельной иерархией.
 */

use Bridge\About;
use Bridge\Careers;
use Bridge\DarkTheme;

include "../spl_autoloader.php";

echo "Мост (Bridge)<br>";

$darkTheme = new DarkTheme();

$about = new About($darkTheme);
$careers = new Careers($darkTheme);

echo $about->getContent(); // "Страница информации в темной теме";
echo $careers->getContent(); // "Страница карьеры в темной теме";

