<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 15:27
 */

namespace SimpleFactory;

class FactoryDoor
{
    public static function makeWoodenDoor($width, $height){
        return new WoodenDoor($width,$height);
    }
}