<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/ZwiftPHP/ZwiftPHP.proto

namespace ZwiftPHP\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ZwiftPHP.Protobuf.Profiles</code>
 */
class Profiles extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .ZwiftPHP.Protobuf.Profile profiles = 1;</code>
     */
    private $profiles;

    public function __construct() {
        \GPBMetadata\Src\ZwiftPHP\ZwiftPHP::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .ZwiftPHP.Protobuf.Profile profiles = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Generated from protobuf field <code>repeated .ZwiftPHP.Protobuf.Profile profiles = 1;</code>
     * @param \ZwiftPHP\Protobuf\Profile[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProfiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \ZwiftPHP\Protobuf\Profile::class);
        $this->profiles = $arr;

        return $this;
    }

}
