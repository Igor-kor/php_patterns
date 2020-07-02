<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 27.08.2019
 * Time: 18:24
 */

namespace Flyweight;


class TeaMaker
{
    protected $availableTea = [];

    public function make($preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new KarakTea();
        }

        return $this->availableTea[$preference];
    }
}