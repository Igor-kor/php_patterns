<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 28.08.2019
 * Time: 14:24
 */

namespace Observer;


class JobPost
{
    protected $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }
}