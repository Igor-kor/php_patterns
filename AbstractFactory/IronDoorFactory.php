<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 16:55
 */

namespace AbstractFactory;

// Железная фабрика вернет железную дверь и сварщика
class IronDoorFactory implements DoorFactory
{

    public function makeDoor(): DoorInterface
    {
        return new IronDoor();
    }

    public function makeFittingExpert(): DoorFittingExpert
    {
        return new Welder();
    }
}