<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/ZwiftPHP/ZwiftPHP.proto

namespace ZwiftPHP\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ZwiftPHP.Protobuf.Profile</code>
 */
class Profile extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>string firstName = 4;</code>
     */
    private $firstName = '';
    /**
     * Generated from protobuf field <code>string lastName = 5;</code>
     */
    private $lastName = '';
    /**
     * Generated from protobuf field <code>int32 male = 6;</code>
     */
    private $male = 0;
    /**
     * Generated from protobuf field <code>int32 weight = 9;</code>
     */
    private $weight = 0;
    /**
     * Generated from protobuf field <code>int32 bodyType = 12;</code>
     */
    private $bodyType = 0;
    /**
     * Generated from protobuf field <code>int32 countryCode = 34;</code>
     */
    private $countryCode = 0;
    /**
     * Generated from protobuf field <code>int32 totalDistance = 35;</code>
     */
    private $totalDistance = 0;
    /**
     * Generated from protobuf field <code>int32 totalDistanceClimbed = 36;</code>
     */
    private $totalDistanceClimbed = 0;
    /**
     * Generated from protobuf field <code>int32 totalTimeInMinutes = 37;</code>
     */
    private $totalTimeInMinutes = 0;
    /**
     * Generated from protobuf field <code>int32 totalWattHours = 41;</code>
     */
    private $totalWattHours = 0;
    /**
     * Generated from protobuf field <code>int32 height = 42;</code>
     */
    private $height = 0;
    /**
     * Generated from protobuf field <code>int32 totalExperiencePoints = 46;</code>
     */
    private $totalExperiencePoints = 0;
    /**
     * Generated from protobuf field <code>int32 achievementLevel = 49;</code>
     */
    private $achievementLevel = 0;
    /**
     * Generated from protobuf field <code>int32 powerSource = 52;</code>
     */
    private $powerSource = 0;
    /**
     * Generated from protobuf field <code>int32 age = 55;</code>
     */
    private $age = 0;
    /**
     * Generated from protobuf field <code>string launchedGameClient = 108;</code>
     */
    private $launchedGameClient = '';
    /**
     * Generated from protobuf field <code>int32 currentActivityId = 109;</code>
     */
    private $currentActivityId = 0;

    public function __construct() {
        \GPBMetadata\Src\ZwiftPHP\ZwiftPHP::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string firstName = 4;</code>
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Generated from protobuf field <code>string firstName = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFirstName($var)
    {
        GPBUtil::checkString($var, True);
        $this->firstName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string lastName = 5;</code>
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Generated from protobuf field <code>string lastName = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLastName($var)
    {
        GPBUtil::checkString($var, True);
        $this->lastName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 male = 6;</code>
     * @return int
     */
    public function getMale()
    {
        return $this->male;
    }

    /**
     * Generated from protobuf field <code>int32 male = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMale($var)
    {
        GPBUtil::checkInt32($var);
        $this->male = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 weight = 9;</code>
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Generated from protobuf field <code>int32 weight = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->weight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 bodyType = 12;</code>
     * @return int
     */
    public function getBodyType()
    {
        return $this->bodyType;
    }

    /**
     * Generated from protobuf field <code>int32 bodyType = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setBodyType($var)
    {
        GPBUtil::checkInt32($var);
        $this->bodyType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 countryCode = 34;</code>
     * @return int
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Generated from protobuf field <code>int32 countryCode = 34;</code>
     * @param int $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->countryCode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 totalDistance = 35;</code>
     * @return int
     */
    public function getTotalDistance()
    {
        return $this->totalDistance;
    }

    /**
     * Generated from protobuf field <code>int32 totalDistance = 35;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalDistance($var)
    {
        GPBUtil::checkInt32($var);
        $this->totalDistance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 totalDistanceClimbed = 36;</code>
     * @return int
     */
    public function getTotalDistanceClimbed()
    {
        return $this->totalDistanceClimbed;
    }

    /**
     * Generated from protobuf field <code>int32 totalDistanceClimbed = 36;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalDistanceClimbed($var)
    {
        GPBUtil::checkInt32($var);
        $this->totalDistanceClimbed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 totalTimeInMinutes = 37;</code>
     * @return int
     */
    public function getTotalTimeInMinutes()
    {
        return $this->totalTimeInMinutes;
    }

    /**
     * Generated from protobuf field <code>int32 totalTimeInMinutes = 37;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalTimeInMinutes($var)
    {
        GPBUtil::checkInt32($var);
        $this->totalTimeInMinutes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 totalWattHours = 41;</code>
     * @return int
     */
    public function getTotalWattHours()
    {
        return $this->totalWattHours;
    }

    /**
     * Generated from protobuf field <code>int32 totalWattHours = 41;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalWattHours($var)
    {
        GPBUtil::checkInt32($var);
        $this->totalWattHours = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 height = 42;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Generated from protobuf field <code>int32 height = 42;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->height = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 totalExperiencePoints = 46;</code>
     * @return int
     */
    public function getTotalExperiencePoints()
    {
        return $this->totalExperiencePoints;
    }

    /**
     * Generated from protobuf field <code>int32 totalExperiencePoints = 46;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalExperiencePoints($var)
    {
        GPBUtil::checkInt32($var);
        $this->totalExperiencePoints = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 achievementLevel = 49;</code>
     * @return int
     */
    public function getAchievementLevel()
    {
        return $this->achievementLevel;
    }

    /**
     * Generated from protobuf field <code>int32 achievementLevel = 49;</code>
     * @param int $var
     * @return $this
     */
    public function setAchievementLevel($var)
    {
        GPBUtil::checkInt32($var);
        $this->achievementLevel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 powerSource = 52;</code>
     * @return int
     */
    public function getPowerSource()
    {
        return $this->powerSource;
    }

    /**
     * Generated from protobuf field <code>int32 powerSource = 52;</code>
     * @param int $var
     * @return $this
     */
    public function setPowerSource($var)
    {
        GPBUtil::checkInt32($var);
        $this->powerSource = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 age = 55;</code>
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Generated from protobuf field <code>int32 age = 55;</code>
     * @param int $var
     * @return $this
     */
    public function setAge($var)
    {
        GPBUtil::checkInt32($var);
        $this->age = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string launchedGameClient = 108;</code>
     * @return string
     */
    public function getLaunchedGameClient()
    {
        return $this->launchedGameClient;
    }

    /**
     * Generated from protobuf field <code>string launchedGameClient = 108;</code>
     * @param string $var
     * @return $this
     */
    public function setLaunchedGameClient($var)
    {
        GPBUtil::checkString($var, True);
        $this->launchedGameClient = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 currentActivityId = 109;</code>
     * @return int
     */
    public function getCurrentActivityId()
    {
        return $this->currentActivityId;
    }

    /**
     * Generated from protobuf field <code>int32 currentActivityId = 109;</code>
     * @param int $var
     * @return $this
     */
    public function setCurrentActivityId($var)
    {
        GPBUtil::checkInt32($var);
        $this->currentActivityId = $var;

        return $this;
    }

}
