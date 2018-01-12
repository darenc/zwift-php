<?php

namespace ZwiftPHP;

class Profile extends Base
{
    public function profile()
    {
        return json_decode(
            $this->request->json("/api/profiles/{$this->userId}"),
            true
        );
    }

    public function profiles(array $profileIds)
    {
        $profilesRequestUri = '/api/profiles/?';

        foreach ($profileIds as $profileId) {
            $profilesRequestUri .= "id={$profileId}&";
        }

        $pdata = $this->request->protobuf($profilesRequestUri);

        $protobufProfiles = new \ZwiftPHP\Protobuf\Profiles();
        $protobufProfiles->mergeFromString((string)$pdata);

        $profiles = [];

        foreach ($protobufProfiles->getProfiles() as $protobufProfile) {
            $profiles[] = [
                'id' => $protobufProfile->getId(),
                'firstName' => $protobufProfile->getFirstName(),
                'lastName' => $protobufProfile->getLastName(),
                'male' => (bool)$protobufProfile->getMale(),
                'countryCode' => $protobufProfile->getCountryCode(),
                'age' => $protobufProfile->getAge(),
                'height' => $protobufProfile->getHeight(),
                'weight' => $protobufProfile->getWeight(),
                'launchedGameClient' => $protobufProfile->getLaunchedGameClient(),
                'achievementLevel' => $protobufProfile->getAchievementLevel(),
                'totalDistance' => $protobufProfile->getTotalDistance(),
                'totalDistanceClimbed' => $protobufProfile->getTotalDistanceClimbed(),
                'totalTimeInMinutes' => $protobufProfile->getTotalTimeInMinutes(),
                'totalWattHours' => $protobufProfile->getTotalWattHours(),
                'totalExperiencePoints' => $protobufProfile->getTotalExperiencePoints(),
                'powerSource' => $protobufProfile->getPowerSource()
            ];
        }

        return $profiles;
    }
    
    public function followers()
    {
        return json_decode(
            $this->request->json("/api/profiles/{$this->userId}/followers"),
            true
        );
    }

    public function followees()
    {
        return json_decode(
            $this->request->json("/api/profiles/{$this->userId}/followees"),
            true
        );
    }

    public function activities(int $start = 0, int $limit = 20)
    {
        return json_decode(
            $this->request->json(
                "/api/profiles/{$this->userId}/activities?start={$start}&limit={$limit}"
            ),
            true
        );
    }
}