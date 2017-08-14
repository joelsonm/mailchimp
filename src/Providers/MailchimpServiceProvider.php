<?php

namespace Joelsonm\Mailchimp\Providers;

use Illuminate\Support\ServiceProvider;
use Joelsonm;

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
            return new Joelsonm\Mailchimp\Resources\EcommerceStore(\Config::get('mailchimp.apikey'), \Config::get('mailchimp.dc'));
        });
    }
}
