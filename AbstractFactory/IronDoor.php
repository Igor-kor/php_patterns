<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 16:44
 */

namespace AbstractFactory;

class IronDoor implements DoorInterface
{

    public function getDescription()
    {
        echo 'Я железная дверь';
    }
}