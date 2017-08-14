<?php

namespace Joelsonm\Mailchimp;

use Joelsonm\Mailchimp\Resources\Ecommerce;
/**
 *
 */
class Ecommerce
{
    function __construct($apikey, $dc)
    {
        $this->stores = new Ecommerce\Stores($apikey, $dc);
        $this->products = new Ecommerce\Products($apikey, $dc);
        $this->customers = new Ecommerce\Customers($apikey, $dc);
        $this->carts = new Ecommerce\Carts($apikey, $dc);
        $this->orders = new Ecommerce\Orders($apikey, $dc);
    }
}
