<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Classes\NotificationService;

interface MailerProvider
{
    public function send($email, $message);
}

class SmtpProvider extends ServiceProvider implements MailerProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(NotificationService::class, function ($app){
            return new NotificationService($this);
        });
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
