<?php

namespace Joelsonm\Mailchimp\Resources\Ecommerce;

use Joelsonm\Mailchimp\RequestResource;
/**
 *
 */
class Products extends RequestResource
{
    function __construct()
    {
        parent::__construct($apikey, $dc);
    }
    public function createProduct($store_id, array $params)
    {
        return $this->post("ecommerce/stores/{$store_id}/products", $params);
    }

    public function getProduct($store_id, $id = '')
    {
        return $this->get("ecommerce/stores/{$store_id}/products/{$id}");
    }

    public function updateProduct($store_id, $id, array $params)
    {
        return $this->patch("ecommerce/stores/{$store_id}/products/{$id}", $params);
    }

    public function deleteProduct($store_id, $id)
    {
        return $this->delete("ecommerce/stores/{$store_id}/products/{$id}");
    }
}
