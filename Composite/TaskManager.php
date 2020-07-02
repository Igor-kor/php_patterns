<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 27.08.2019
 * Time: 14:08
 */

namespace Composite;
use Exception;

class TaskManager
{
    private $assignees;

    public function __construct($assignees)
    {
        $this->assignees = $assignees;
    }

    /**
     * @param $task
     * @throws Exception
     */
    public function performTask($task) {
        /** @var $assignee Assignee*/
        foreach ($this->assignees as $assignee) {
            if ($assignee->canHandleTask($task)) {
                $assignee->takeTask($task);
                return;
            }
        }

        echo 'Cannot handle the task: '.$task.' - please hire more people<br>';
    }
}