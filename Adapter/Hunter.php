<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 20:06
 */

namespace Adapter;


class Hunter
{
    public function hunt(Lion $lion)
    {
        $lion->roar();
    }
}