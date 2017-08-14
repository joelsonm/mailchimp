<?php

namespace Joelsonm\Mailchimp\Resources\Ecommerce;

use Joelsonm\Mailchimp\RequestResource;
/**
 *
 */
class Stores extends RequestResource
{
    public function create(array $params)
    {
        return $this->postRequest("ecommerce/stores", $params);
    }

    public function get($store_id = '')
    {
        return $this->getRequest("ecommerce/stores/{$store_id}");
    }

    public function update($store_id, array $params)
    {
        return $this->patchRequest("ecommerce/stores/{$store_id}", $params);
    }

    public function delete($store_id)
    {
        return $this->deleteRequest("ecommerce/stores/{$store_id}");
    }
}
