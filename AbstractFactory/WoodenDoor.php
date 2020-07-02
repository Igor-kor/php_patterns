<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 15:28
 */
namespace AbstractFactory;

class WoodenDoor implements DoorInterface
{
    public function getDescription()
    {
        echo 'Я деревянная дверь';
    }
}