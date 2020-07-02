<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 27.08.2019
 * Time: 14:04
 */

namespace Composite;

// работник
class Employee implements Assignee
{
    private $name;
    private $task;

    /**
     * Employee constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @param $task
     * @return bool
     */
    public function canHandleTask($task): bool
    {
        return $this->task == null;
    }

    /**
     * @param $task
     * @throws \Exception
     */
    public function takeTask($task)
    {
        $this->task = $task;
        echo $this->name . " take task ". $task . "<br>";
    }
}