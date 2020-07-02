<?php
/**
 * Адаптер(Adapter)
 *
 * Cтруктурный шаблон
 *
 * Шаблон позволяет обернуть несовместимые объекты в адаптер,
 * чтобы сделать их совместимыми с другим классом.
 */

use Adapter\AfricanLion;
use Adapter\AsianLion;
use Adapter\Hunter;
use Adapter\WildDog;
use Adapter\WildDogAdapter;

include "../spl_autoloader.php";

echo "Адаптер(Adapter)<br>";

$wildDog = new WildDog();
$wildDogAdapter = new WildDogAdapter($wildDog);

$hunter = new Hunter();
$hunter->hunt($wildDogAdapter);
$hunter->hunt(new AfricanLion());
$hunter->hunt(new AsianLion());
