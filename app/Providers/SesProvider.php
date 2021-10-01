<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Classes\NotificationService;

interface MailerProvider2
{
    public function send($email, $message);
}

class SesProvider extends ServiceProvider implements MailerProvider2
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /*$this->app->singleton(NotificationService::class, function ($app){
            return new NotificationService($app);
        });*/
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function send($email, $message){
        return true;
    }
}
