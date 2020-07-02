<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 20:37
 */

namespace Bridge;


class AquaTheme implements Theme
{
    public function getColor()
    {
        return 'голубой теме';
    }
}