<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 27.08.2019
 * Time: 14:03
 */

namespace Composite;


interface Assignee
{
    public function canHandleTask($task): bool;
    public function takeTask($task);
}