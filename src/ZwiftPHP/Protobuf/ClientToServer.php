<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/ZwiftPHP/ZwiftPHP.proto

namespace ZwiftPHP\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ZwiftPHP.Protobuf.ClientToServer</code>
 */
class ClientToServer extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 connected = 1;</code>
     */
    private $connected = 0;
    /**
     * Generated from protobuf field <code>int32 rider_id = 2;</code>
     */
    private $rider_id = 0;
    /**
     * Generated from protobuf field <code>int64 world_time = 3;</code>
     */
    private $world_time = 0;
    /**
     * Generated from protobuf field <code>.ZwiftPHP.Protobuf.PlayerState state = 7;</code>
     */
    private $state = null;
    /**
     * Generated from protobuf field <code>int32 seqno = 4;</code>
     */
    private $seqno = 0;
    /**
     * Generated from protobuf field <code>int64 tag8 = 8;</code>
     */
    private $tag8 = 0;
    /**
     * Generated from protobuf field <code>int64 tag9 = 9;</code>
     */
    private $tag9 = 0;
    /**
     * Generated from protobuf field <code>int64 last_update = 10;</code>
     */
    private $last_update = 0;
    /**
     * Generated from protobuf field <code>int64 tag11 = 11;</code>
     */
    private $tag11 = 0;
    /**
     * Generated from protobuf field <code>int64 last_player_update = 12;</code>
     */
    private $last_player_update = 0;

    public function __construct() {
        \GPBMetadata\Src\ZwiftPHP\ZwiftPHP::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 connected = 1;</code>
     * @return int
     */
    public function getConnected()
    {
        return $this->connected;
    }

    /**
     * Generated from protobuf field <code>int32 connected = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setConnected($var)
    {
        GPBUtil::checkInt32($var);
        $this->connected = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 rider_id = 2;</code>
     * @return int
     */
    public function getRiderId()
    {
        return $this->rider_id;
    }

    /**
     * Generated from protobuf field <code>int32 rider_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRiderId($var)
    {
        GPBUtil::checkInt32($var);
        $this->rider_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 world_time = 3;</code>
     * @return int|string
     */
    public function getWorldTime()
    {
        return $this->world_time;
    }

    /**
     * Generated from protobuf field <code>int64 world_time = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWorldTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->world_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ZwiftPHP.Protobuf.PlayerState state = 7;</code>
     * @return \ZwiftPHP\Protobuf\PlayerState
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.ZwiftPHP.Protobuf.PlayerState state = 7;</code>
     * @param \ZwiftPHP\Protobuf\PlayerState $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkMessage($var, \ZwiftPHP\Protobuf\PlayerState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 seqno = 4;</code>
     * @return int
     */
    public function getSeqno()
    {
        return $this->seqno;
    }

    /**
     * Generated from protobuf field <code>int32 seqno = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSeqno($var)
    {
        GPBUtil::checkInt32($var);
        $this->seqno = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 tag8 = 8;</code>
     * @return int|string
     */
    public function getTag8()
    {
        return $this->tag8;
    }

    /**
     * Generated from protobuf field <code>int64 tag8 = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTag8($var)
    {
        GPBUtil::checkInt64($var);
        $this->tag8 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 tag9 = 9;</code>
     * @return int|string
     */
    public function getTag9()
    {
        return $this->tag9;
    }

    /**
     * Generated from protobuf field <code>int64 tag9 = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTag9($var)
    {
        GPBUtil::checkInt64($var);
        $this->tag9 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 last_update = 10;</code>
     * @return int|string
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    /**
     * Generated from protobuf field <code>int64 last_update = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastUpdate($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_update = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 tag11 = 11;</code>
     * @return int|string
     */
    public function getTag11()
    {
        return $this->tag11;
    }

    /**
     * Generated from protobuf field <code>int64 tag11 = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTag11($var)
    {
        GPBUtil::checkInt64($var);
        $this->tag11 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 last_player_update = 12;</code>
     * @return int|string
     */
    public function getLastPlayerUpdate()
    {
        return $this->last_player_update;
    }

    /**
     * Generated from protobuf field <code>int64 last_player_update = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastPlayerUpdate($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_player_update = $var;

        return $this;
    }

}

