<?php

namespace ZwiftPHP;

use GuzzleHttp\Client;

class Request
{
    protected $accessToken = null;

    const baseUri = 'https://us-or-rly101.zwift.com';

    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    public function json($endpoint)
    {
        return $this->request($endpoint, 'application/json', 'json');
    }

    public function protobuf($endpoint)
    {
        return $this->request($endpoint, 'application/x-protobuf-lite', 'arraybuffer');
    }

    public function request($endpoint, $acceptType, $responseType)
    {
        return $this->send($endpoint, 'get', null, $acceptType, $responseType);
    }

    public function post($endpoint, $data, $acceptType, $responseType)
    {
        return $this->send($endpoint, 'post', $data, $acceptType, $responseType);
    }

    public function send($endpoint, $method = 'get', $data = null, $acceptType, $responseType)
    {
        $client = new \GuzzleHttp\Client(['base_uri' => self::baseUri]);

        $response = $client->get(
            $endpoint, 
            [
                'http_errors' => false,
                'headers' => [
                    'User-Agent' => 'Zwift/115 CFNetwork/758.0.2 Darwin/15.0.0',
                    'Accept' => $acceptType,
                    'Authorization' => 'Bearer ' . $this->accessToken
                ]
            ]
        );

        $statusCode = $response->getStatusCode();

        if (200 !== $statusCode) {
            throw new \Exception('Something went wrong'); // @todo useful errors
        }

        return $response->getBody();
    }
}