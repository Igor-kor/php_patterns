<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 28.08.2019
 * Time: 14:24
 */

namespace Observer;


class JobSeeker //implements Observer
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function onJobPosted(JobPost $job)
    {
        // Делаем что-то с публикациями вакансий
        echo 'Привет ' . $this->name . '! Появилась новая работа: '. $job->getTitle();
    }
}