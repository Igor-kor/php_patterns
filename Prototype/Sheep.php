<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 19:08
 */

namespace Prototype;


class Sheep
{
    protected $name;
    protected $category;
    protected $lifetime;

    public function __construct(string $name, string $category = 'Горная овечка', $lifetime = 5)
    {
        $this->name = $name;
        $this->category = $category;
        $this->lifetime = $lifetime;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setCategory(string $category)
    {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getLifetime()
    {
        return $this->lifetime;
    }

    public function setLifetime($lifetime)
    {
        $this->lifetime = $lifetime;
    }

    public function __clone()
    {
        $this->lifetime -= 4;
    }


}