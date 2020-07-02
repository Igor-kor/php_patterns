<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 15:47
 */
namespace FabricMethod;

abstract class HiringManager
{
    // Фабричный метод
    abstract public function makeInterviewer(): InterviewerInterface;

    public function takeInterview()
    {
        $interviewer = $this->makeInterviewer();
        $interviewer->askQuestions();
    }
}