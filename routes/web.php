<?php


use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;
use App\Classes\NotificationService;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/send_notification/{id?}', function (NotificationService $ns, $id = null) {
    $sendNot = NotificationController::sendNotification($ns, $id);
});

//Route::get('users/send_notification/{id?}', [NotificationController::class, 'sendNotification']);

/*Route::get('/users/send_notification/{id?}', function () {
    return view('welcome');
});*/
