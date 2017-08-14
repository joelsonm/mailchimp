<?php

namespace Joelsonm\Mailchimp\Resources\Lists;

use Joelsonm\Mailchimp\RequestResource;
/**
 *
 */
class Members extends RequestResource
{
    public function create($list_id, array $params)
    {
        return $this->postRequest("lists/{$list_id}/members", $params);
    }

    public function get($list_id, $subscriber_hash = '')
    {
        $subscriber_hash = $this->toHash($subscriber_hash);
        return $this->getRequest("lists/{$list_id}/members/{$subscriber_hash}");
    }

    public function update($list_id, $subscriber_hash, array $params)
    {
        $subscriber_hash = $this->toHash($subscriber_hash);
        return $this->patchRequest("lists/{$list_id}/members/{$subscriber_hash}", $params);
    }

    public function updateOrNew($list_id, $subscriber_hash, array $params)
    {
        $subscriber_hash = $this->toHash($subscriber_hash);
        return $this->putRequest("lists/{$list_id}/members/{$subscriber_hash}", $params);
    }

    public function delete($list_id, $subscriber_hash)
    {
        $subscriber_hash = $this->toHash($subscriber_hash);
        return $this->deleteRequest("lists/{list_id}/members/{$subscriber_hash}");
    }

    private function toHash($value)
    {
        if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
            return md5($value);
        }

        return $value;
    }
}
