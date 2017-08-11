<?php

namespace Joelsonm\Mailchimp;
/**
 *
 */
class Ecommerce extends Resource
{

    function __construct($apikey, $dc)
    {
        $this->apikey = $apikey;
        $this->dc = $dc;

        parent::__construct();
    }

    public function test()
    {
        return 'hello';
    }

    public function createStore(array $params)
    {
        return $this->post("ecommerce/stores", $params);
    }

    public function getStore($store_id = '')
    {
        return $this->get("ecommerce/stores/{$store_id}");
    }

    public function updateStore($store_id, array $params)
    {
        return $this->patch("ecommerce/stores/{$store_id}", $params);
    }

    public function deleteStore($store_id)
    {
        return $this->delete("ecommerce/stores/{$store_id}");
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

    public function createCustomer($store_id, array $params)
    {
        return $this->post("ecommerce/stores/{$store_id}/customers", $params);
    }

    public function getCustomer($store_id, $id = '')
    {
        return $this->get("ecommerce/stores/{$store_id}/customers/{$id}");
    }

    public function updateCustomer($store_id, $id, array $params)
    {
        return $this->put("ecommerce/stores/{$store_id}/customers/{$id}", $params);
    }

    public function deleteCustomer($store_id, $id)
    {
        return $this->delete("ecommerce/stores/{$store_id}/customers/{$id}");
    }

    public function createCart($store_id, array $params)
    {
        return $this->post("ecommerce/stores/{$store_id}/carts", $params);
    }

    public function getCart($store_id, $id = '')
    {
        return $this->get("ecommerce/stores/{$store_id}/carts/{$id}");
    }

    public function updateCart($store_id, $id, array $params)
    {
        return $this->put("ecommerce/stores/{$store_id}/carts/{$id}", $params);
    }

    public function deleteCart($store_id, $id)
    {
        return $this->delete("ecommerce/stores/{$store_id}/carts/{$id}");
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
