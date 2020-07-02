<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 15:45
 */

namespace FabricMethod;

class Developer implements InterviewerInterface
{
    public function askQuestions()
    {
        echo 'Спрашивает про шаблоны проектирования!';
    }
}