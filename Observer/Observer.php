<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 28.08.2019
 * Time: 14:27
 */

namespace Observer;

//интерфейс, с помощью которого наблюдатель получает оповещение;
interface Observer
{
    public function onJobPosted(JobPost $job);
}