<?php

namespace ZwiftPHP;

class Base
{
    protected $userId = 'me';
    protected $request = null;

    public function __construct($userId, $accessToken)
    {
        $this->userId = $userId;
        $this->request = new Request($accessToken);
    }
}