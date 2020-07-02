<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 28.08.2019
 * Time: 13:04
 */

namespace Mediator;


class ChatRoom implements ChatRoomMediator
{
    public function showMessage(User $user, string $message)
    {
        $time = date('M d, y H:i');
        $sender = $user->getName();

        echo $time . '[' . $sender . ']:' . $message;
    }
}