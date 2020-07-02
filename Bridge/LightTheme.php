<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 20:37
 */

namespace Bridge;


class LightTheme implements Theme
{
    public function getColor()
    {
        return 'светлой теме';
    }
}