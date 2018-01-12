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

    public function list(int $start = 0, int $limit = 20)
    {
        return json_decode(
            $this->request->json(
                "/api/profiles/{$this->userId}/activities?start={$start}&limit={$limit}"
            ),
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