<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 28.08.2019
 * Time: 12:41
 */

namespace Command;


class Bulb
{
    public function turnOn()
    {
        echo "Лампочка загорелась!<br>";
    }

    public function turnOff()
    {
        echo "Темнота!<br>";
    }
}