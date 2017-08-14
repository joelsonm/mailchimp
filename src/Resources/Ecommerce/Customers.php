<?php

namespace Joelsonm\Mailchimp\Resources\Ecommerce;

use Joelsonm\Mailchimp\RequestResource;
/**
 *
 */
class Customers extends RequestResource
{
    public function create($store_id, array $params)
    {
        return $this->postRequest("ecommerce/stores/{$store_id}/customers", $params);
    }

    public function get($store_id, $id = '')
    {
        return $this->getRequest("ecommerce/stores/{$store_id}/customers/{$id}");
    }

    public function update($store_id, $id, array $params)
    {
        return $this->putRequest("ecommerce/stores/{$store_id}/customers/{$id}", $params);
    }

    public function delete($store_id, $id)
    {
        return $this->deleteRequest("ecommerce/stores/{$store_id}/customers/{$id}");
    }
}
