<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 16:53
 */

namespace AbstractFactory;


interface DoorFactory
{
    public function makeDoor(): DoorInterface;
    public function makeFittingExpert(): DoorFittingExpert;
}