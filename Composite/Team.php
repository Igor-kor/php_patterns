<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 27.08.2019
 * Time: 14:04
 */

namespace Composite;


class Team implements Assignee
{

    /** @var Assignee[] */
    private $assignees;

    public function __construct($assignees)
    {
        if(is_array($assignees)){
            $this->assignees = $assignees;
        }else{
            $this->assignees = array($assignees);
        }
    }

    // вспомогательные методы для управления композитом:
    public function add($assignee){
        array_push($assignees,$assignee);

    }
    public function remove($assignee){
        unset ($this->assignees[ array_search($assignee,$this->assignees)]);
    }

    // метода интерфейса Employee

    public function canHandleTask($task): bool
    {
        foreach ($this->assignees as $assignee) if ($assignee->canHandleTask($task)) return true;
        return false;
    }

    public function takeTask($task)
    {
        // может быть разная имплементация - допустим, некоторые задания требуют нескольких человек из команды одновременно
        // в простейшем случае берем первого незанятого работника среди this->assignees
        foreach ($this->assignees as $assignee) if ($assignee->canHandleTask($task)) $assignee->takeTask($task);
    }
}