<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 20:34
 */
namespace Bridge;

interface WebPage
{
    public function __construct(Theme $theme);
    public function getContent();
}