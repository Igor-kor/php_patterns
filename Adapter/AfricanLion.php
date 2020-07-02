<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 20:05
 */

namespace Adapter;


class AfricanLion implements Lion
{
    public function roar()
    {
        echo "Аррррр!";
    }
}