<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 18:43
 */

namespace Builder;


class Burger
{
    protected $size;

    protected $cheese = false;
    protected $pepperoni = false;
    protected $lettuce = false;
    protected $tomato = false;

    public function __construct(BurgerBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->lettuce = $builder->lettuce;
        $this->tomato = $builder->tomato;
    }

    public function getBurger()
    {
        echo "<style>body{font-size: ".$this->size."}</style>";
        echo "булка<br>";
        if ($this->cheese) {
            echo "Сыр<br>";
        }
        if ($this->pepperoni) {
            echo "пеперони<br>";
        }
        if ($this->lettuce) {
            echo "салат<br>";
        }
        if ($this->tomato) {
            echo "помидор<br>";
        }
        echo "булка<br>";
    }
}
