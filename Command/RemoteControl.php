<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 28.08.2019
 * Time: 12:42
 */

namespace Command;


class RemoteControl
{
    public function submit(Command $command)
    {
        $command->execute();
    }
}