<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 28.08.2019
 * Time: 12:41
 */

namespace Command;


interface Command
{
    public function execute();
    public function undo();
    public function redo();
}