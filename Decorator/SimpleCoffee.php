<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 27.08.2019
 * Time: 15:24
 */

namespace Decorator;


class SimpleCoffee implements Coffee
{

    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        return 'Простой кофе';
    }
}