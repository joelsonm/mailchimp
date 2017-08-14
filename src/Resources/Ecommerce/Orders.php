<?php

namespace Joelsonm\Mailchimp\Resources\Ecommerce;

use Joelsonm\Mailchimp\RequestResource;
/**
 *
 */
class Orders extends RequestResource
{
    public function create($store_id, array $params)
    {
        return $this->postRequest("ecommerce/stores/{$store_id}/orders", $params);
    }

    public function get($store_id, $id = '')
    {
        return $this->getRequest("ecommerce/stores/{$store_id}/orders/{$id}");
    }

    public function update($store_id, $id, array $params)
    {
        return $this->putRequest("ecommerce/stores/{$store_id}/orders/{$id}", $params);
    }

    public function delete($store_id, $id)
    {
        return $this->deleteRequest("ecommerce/stores/{$store_id}/orders/{$id}");
    }
}
