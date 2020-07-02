<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 15:47
 */

namespace FabricMethod;

class CommunityExecutive implements InterviewerInterface
{

    public function askQuestions()
    {
        echo 'Спрашивает о работе с сообществом';
    }
}