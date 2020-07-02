<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 16:52
 */

namespace AbstractFactory;


class Welder implements DoorFittingExpert
{

    public function getDescription()
    {
        echo 'Я работаю только с железными дверьми';
    }
}