<?php

namespace ZwiftPHP;

class Activity
{
    protected $userId;
    protected $request;

    public function __construct($userId, $accessToken)
    {
        $this->userId = $userId;
        $this->request = new Request($accessToken);
    }

    public function list()
    {
        return json_decode(
            $this->request->json("/api/profiles/{$this->userId}/activities?start=0&limit=9999"),
            true
        );
    }

    public function getActivity($activityId)
    {
        return json_decode(
            $this->request->json("/api/profiles/{$this->userId}/activities/${activityId}"),
            true
        );
    }

}