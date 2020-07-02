<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 16:54
 */

namespace AbstractFactory;

// Деревянная фабрика вернет деревянную дверь и столяра
class WoodenDoorFactory implements DoorFactory
{

    public function makeDoor(): DoorInterface
    {
        return new WoodenDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Carpenter();
    }
}