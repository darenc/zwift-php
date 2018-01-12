<?php

namespace ZwiftPHP;

/*
Reference: result of successful auth codes request

object(stdClass)#60 (8) {
  ["access_token"]=>
  string(1784) "..."
  ["expires_in"]=>
  int(10800)
  ["refresh_expires_in"]=>
  int(2592000)
  ["refresh_token"]=>
  string(1536) "..."
  ["token_type"]=>
  string(6) "bearer"
  ["id_token"]=>
  string(959) "..."
  ["not-before-policy"]=>
  int(1408478984)
  ["session-state"]=>
  string(36) "..."
}
*/

class ZwiftAccount
{
    protected $username = null;
    protected $password = null;
    protected $accessToken = null;
    protected $refreshToken = null;

    public function __construct($username, $password, $refreshToken = null)
    {
        $this->username = $username;
        $this->password = $password;
        $this->accessToken = null;
        $this->refreshToken = $refreshToken;

        $this->getAccessToken();
    }

    protected function getAccessToken()
    {
        if (null !== $this->refreshToken) {
            $data = [
                'client_id' => 'Zwift_Mobile_Link',
                'refresh_token' => $this->refreshToken,
                'grant_type' => 'refresh_token'
            ];
        } else {
            $data = [
                'client_id' => 'Zwift_Mobile_Link',
                'username' => $this->username,
                'password' => $this->password,
                'grant_type' => 'password'
            ];
        }

        $client = new \GuzzleHttp\Client(['base_uri' => 'https://secure.zwift.com']);

        $response = $client->post(
            '/auth/realms/zwift/tokens/access/codes', 
            [
                'form_params' => $data,
                'http_errors' => false
            ]
        );

        $statusCode = $response->getStatusCode();

        $result = json_decode((string)$response->getBody());

        if (200 === $statusCode) {
            $this->accessToken = $result->access_token;
            $this->refreshToken = $result->refresh_token;
        } else {
            throw new \Exception($result->error_description);
        }

        return $this->accessToken;
    }

    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    public function getProfile($playerId = null)
    {
        return new Profile($playerId, $this->getAccessToken());
    }

    public function getActivity($playerId = null)
    {
        return new Activity($playerId, $this->getAccessToken());
    }
}