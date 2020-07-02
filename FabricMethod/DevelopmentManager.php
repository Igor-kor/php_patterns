<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 15:49
 */

namespace FabricMethod;

class DevelopmentManager extends HiringManager
{
    public function makeInterviewer(): InterviewerInterface
    {
        return new Developer();
    }
}