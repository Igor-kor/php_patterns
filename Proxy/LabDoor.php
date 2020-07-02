<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 27.08.2019
 * Time: 18:49
 */

namespace Proxy;


class LabDoor implements Door
{
    public function open()
    {
        echo "Открытие двери лаборатории";
    }

    public function close()
    {
        echo "Закрытие двери лаборатории";
    }
}