<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 28.08.2019
 * Time: 12:42
 */

namespace Command;


class TurnOff implements Command
{
    protected $bulb;

    public function __construct(Bulb $bulb)
    {
        $this->bulb = $bulb;
    }

    public function execute()
    {
        $this->bulb->turnOff();
    }

    public function undo()
    {
        $this->bulb->turnOn();
    }

    public function redo()
    {
        $this->execute();
    }
}