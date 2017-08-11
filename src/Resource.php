<?php

namespace Joelsonm\Mailchimp;

/**
 *
 */
class Resource
{
    private $endpoint_ = 'https://<dc>.api.mailchimp.com/3.0/';

    protected $apikey;
    protected $dc;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
    }

    private function endpoint()
    {
        return str_replace('<dc>', $this->dc, $this->endpoint_);
    }

    public function get(string $uri, array $params = [])
    {
        return $this->request('GET', $uri, $params);
    }

    public function post(string $uri, array $params = [])
    {
        return $this->request('POST', $uri, $params);
    }

    public function patch(string $uri, array $params = [])
    {
        return $this->request('PATCH', $uri, $params);
    }

    public function put(string $uri, array $params = [])
    {
        return $this->request('PUT', $uri, $params);
    }

    public function delete(string $uri, array $params = [])
    {
        return $this->request('DELETE', $uri, $params);
    }

    protected function request(string $method, string $uri, array $params = [], array $options = [])
    {
        $response = $this->client->request($method, "{$this->endpoint()}{$uri}", [
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => "apikey {$this->apikey}"
            ],
            'body' => json_encode($params),
            'exceptions' => false
        ]);

        return (object) [
            'status' => $response->getStatusCode(),
            'data' => json_decode($response->getBody())
        ];
    }
}
