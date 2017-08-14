<?php

namespace Joelsonm\Mailchimp\Resources\Ecommerce;

use Joelsonm\Mailchimp\RequestResource;
/**
 *
 */
class Orders extends RequestResource
{
    function __construct()
    {
        parent::__construct($apikey, $dc);
    }
    public function createOrder($store_id, array $params)
    {
        return $this->post("ecommerce/stores/{$store_id}/orders", $params);
    }

    public function getOrder($store_id, $id = '')
    {
        return $this->get("ecommerce/stores/{$store_id}/orders/{$id}");
    }

    public function updateOrder($store_id, $id, array $params)
    {
        return $this->put("ecommerce/stores/{$store_id}/orders/{$id}", $params);
    }

    public function deleteOrder($store_id, $id)
    {
        return $this->delete("ecommerce/stores/{$store_id}/orders/{$id}");
    }
}
