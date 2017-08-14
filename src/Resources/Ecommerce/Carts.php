<?php

namespace Joelsonm\Mailchimp\Resources\Ecommerce;

use Joelsonm\Mailchimp\RequestResource;
/**
 *
 */
class Carts extends RequestResource
{
    function __construct()
    {
        parent::__construct($apikey, $dc);
    }
    public function create($store_id, array $params)
    {
        return $this->postRequest("ecommerce/stores/{$store_id}/carts", $params);
    }

    public function get($store_id, $id = '')
    {
        return $this->getRequest("ecommerce/stores/{$store_id}/carts/{$id}");
    }

    public function update($store_id, $id, array $params)
    {
        return $this->putRequest("ecommerce/stores/{$store_id}/carts/{$id}", $params);
    }

    public function delete($store_id, $id)
    {
        return $this->deleteRequest("ecommerce/stores/{$store_id}/carts/{$id}");
    }
}
