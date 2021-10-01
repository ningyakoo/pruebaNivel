<?php

namespace App\Classes;


use App\Classes\User;
use App\Providers\SmtpProvider;

class NotificationService {

    private $provider;

    public function __construct(SmtpProvider $provider)
    {
        $this->provider = $provider;
    }

    public function notify(User $user, $message)
    {
        return $this->provider->send($user->getEmail(), $message);
    }

}

?>