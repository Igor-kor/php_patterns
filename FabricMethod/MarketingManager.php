<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 15:50
 */
namespace FabricMethod;

class MarketingManager extends HiringManager
{
    public function makeInterviewer(): InterviewerInterface
    {
        return new CommunityExecutive();
    }
}