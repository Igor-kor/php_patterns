<?php
/**
 * Итератор (Iterator)
 *
 * Поведенческий шаблон
 *
 * Представляет способ доступа к элементам объекта без показа базового представления.
 */

use Iterator\RadioStation;
use Iterator\StationList;

include "../spl_autoloader.php";

echo "Итератор (Iterator)<br>";

$stationList = new StationList();

// Добавление станций
$stationList->addStation(new RadioStation(89));
$stationList->addStation(new RadioStation(101));
$stationList->addStation(new RadioStation(102));
$stationList->addStation(new RadioStation(103.2));

foreach($stationList as $station) {
    echo $station->getFrequency() . PHP_EOL;
}

$stationList->removeStation(new RadioStation(89)); // Удалит 89 станцию