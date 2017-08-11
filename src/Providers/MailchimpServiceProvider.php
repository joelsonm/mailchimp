<?php

namespace Joelsonm\Mailchimp\Providers;

use Illuminate\Support\ServiceProvider;

class MailchimpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
           __DIR__.'/../Config/mailchimp.php' => config_path('mailchimp.php'),
       ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('Joelsonm\Mailchimp\Ecommerce', function ($app) {
            return new Joelsonm\Mailchimp\Ecommerce(\Config::get('mailchimp.apikey'), \Config::get('mailchimp.dc'));
        });
    }
}
