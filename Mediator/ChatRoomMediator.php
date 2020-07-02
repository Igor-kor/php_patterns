<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 28.08.2019
 * Time: 13:03
 */

namespace Mediator;


interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}