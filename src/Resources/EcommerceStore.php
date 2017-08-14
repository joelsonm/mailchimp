<?php

namespace Joelsonm\Mailchimp\Resources;

use Joelsonm\Mailchimp\Resources\Ecommerce;
/**
 * API V.1.0.0
 */
class EcommerceStore
{
    public static $apikey;
    public static $dc;

    function __construct($apikey, $dc)
    {
        EcommerceStore::$apikey = $apikey;
        EcommerceStore::$dc = $dc;
    }

    public function stores()
    {
        return new Ecommerce\Stores();
    }

    public function products()
    {
        return new Ecommerce\Products();
    }

    public function customers()
    {
        return new Ecommerce\Customers();
    }

    public function carts()
    {
        return new Ecommerce\Carts();
    }

    public function orders()
    {
        return new Ecommerce\Orders();
    }
}
