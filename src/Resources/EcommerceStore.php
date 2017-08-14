<?php

namespace Joelsonm\Mailchimp\Resources;

use Joelsonm\Mailchimp\Resources\Ecommerce;
/**
 * API V.1.0.0
 */
class EcommerceStore
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
