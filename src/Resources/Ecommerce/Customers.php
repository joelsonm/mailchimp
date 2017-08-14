<?php

namespace Joelsonm\Mailchimp\Resources\Ecommerce;

use Joelsonm\Mailchimp\RequestResource;
/**
 *
 */
class Customers extends RequestResource
{
    function __construct()
    {
        parent::__construct($apikey, $dc);
    }
    public function create($store_id, array $params)
    {
        return $this->post("ecommerce/stores/{$store_id}/customers", $params);
    }

    public function get($store_id, $id = '')
    {
        return $this->get("ecommerce/stores/{$store_id}/customers/{$id}");
    }

    public function update($store_id, $id, array $params)
    {
        return $this->put("ecommerce/stores/{$store_id}/customers/{$id}", $params);
    }

    public function delete($store_id, $id)
    {
        return $this->delete("ecommerce/stores/{$store_id}/customers/{$id}");
    }
}
