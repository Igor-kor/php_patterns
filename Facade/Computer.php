<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 27.08.2019
 * Time: 16:42
 */

namespace Facade;


class Computer
{
    public function getElectricShock()
    {
        echo "Ай!";
    }

    public function makeSound()
    {
        echo "Бип-бип!";
    }

    public function showLoadingScreen()
    {
        echo "Загрузка..";
    }

    public function bam()
    {
        echo "Готов к использованию!";
    }

    public function closeEverything()
    {
        echo "Буп-буп-буп-бззз!";
    }

    public function sooth()
    {
        echo "Zzzzz";
    }

    public function pullCurrent()
    {
        echo "Аах!";
    }
}