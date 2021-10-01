<?php

namespace App\Http\Controllers;

use App\Classes\NotificationService;
use App\Classes\User;

class NotificationController extends Controller
{

    //protected NotificationService $ns;
    protected User $user;
    protected $result;

    public static function sendNotification($ns, $id){
        $user = new User($id, "esunaprueba@gmail.com");
        $result = $ns->notify($user, "mensaje de prueba");
        //echo $this->result;
        $data = ['succes' => true,
        'id' => $user->getId(),
        'email' => $user->getEmail(),
        'message' => "mensaje de prueba",
        'result' => $result];
        echo response()->json($data, 200, []);
    }
}
