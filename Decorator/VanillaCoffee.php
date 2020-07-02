<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 27.08.2019
 * Time: 15:26
 */

namespace Decorator;


class VanillaCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 3;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', ваниль';
    }
}