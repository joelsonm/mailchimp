<?php

namespace Joelsonm\Mailchimp;

/**
 *
 */
class RequestResource
{
    private $endpoint_ = 'https://<dc>.api.mailchimp.com/3.0/';

    protected $apikey;
    protected $dc;

    function __construct($apikey, $dc)
    {
        $this->apikey = $apikey;
        $this->dc = $dc;

        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $this->endpoint(),
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => "apikey {$this->apikey}"
            ],
            'exceptions' => false
        ]);
    }

    private function endpoint()
    {
        return str_replace('<dc>', $this->dc, $this->endpoint_);
    }

    public function getRequest(string $uri, array $params = [])
    {
        $response = $this->client->get($uri);

        return $this->response($response);
    }

    public function postRequest(string $uri, array $params = [])
    {
        $response = $this->client->post($uri, ['json' => $params]);

        return $this->response($response);
    }

    public function patchRequest(string $uri, array $params = [])
    {
        $response = $this->client->patch($uri, ['json' => $params]);

        return $this->response($response);
    }

    public function putRequest(string $uri, array $params = [])
    {
        $response = $this->client->put($uri, ['json' => $params]);

        return $this->response($response);
    }

    public function deleteRequest(string $uri, array $params = [])
    {
        $response = $this->client->delete($uri);

        return $this->response($response);
    }

    private function response($response){
        return (object) [
            'status' => $response->getStatusCode(),
            'data' => json_decode($response->getBody())
        ];
    }

}
