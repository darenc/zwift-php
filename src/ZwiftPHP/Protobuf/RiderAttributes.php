<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/ZwiftPHP/ZwiftPHP.proto

namespace ZwiftPHP\Protobuf;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ZwiftPHP.Protobuf.RiderAttributes</code>
 */
class RiderAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 f2 = 2;</code>
     */
    private $f2 = 0;
    /**
     * Generated from protobuf field <code>int32 f3 = 3;</code>
     */
    private $f3 = 0;
    /**
     * Generated from protobuf field <code>.ZwiftPHP.Protobuf.RiderAttributes.AttributeMessage attributeMessage = 4;</code>
     */
    private $attributeMessage = null;
    /**
     * Generated from protobuf field <code>int32 theirId = 10;</code>
     */
    private $theirId = 0;
    /**
     * Generated from protobuf field <code>int32 f13 = 13;</code>
     */
    private $f13 = 0;

    public function __construct() {
        \GPBMetadata\Src\ZwiftPHP\ZwiftPHP::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>int32 f2 = 2;</code>
     * @return int
     */
    public function getF2()
    {
        return $this->f2;
    }

    /**
     * Generated from protobuf field <code>int32 f2 = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setF2($var)
    {
        GPBUtil::checkInt32($var);
        $this->f2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 f3 = 3;</code>
     * @return int
     */
    public function getF3()
    {
        return $this->f3;
    }

    /**
     * Generated from protobuf field <code>int32 f3 = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setF3($var)
    {
        GPBUtil::checkInt32($var);
        $this->f3 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ZwiftPHP.Protobuf.RiderAttributes.AttributeMessage attributeMessage = 4;</code>
     * @return \ZwiftPHP\Protobuf\RiderAttributes_AttributeMessage
     */
    public function getAttributeMessage()
    {
        return $this->attributeMessage;
    }

    /**
     * Generated from protobuf field <code>.ZwiftPHP.Protobuf.RiderAttributes.AttributeMessage attributeMessage = 4;</code>
     * @param \ZwiftPHP\Protobuf\RiderAttributes_AttributeMessage $var
     * @return $this
     */
    public function setAttributeMessage($var)
    {
        GPBUtil::checkMessage($var, \ZwiftPHP\Protobuf\RiderAttributes_AttributeMessage::class);
        $this->attributeMessage = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 theirId = 10;</code>
     * @return int
     */
    public function getTheirId()
    {
        return $this->theirId;
    }

    /**
     * Generated from protobuf field <code>int32 theirId = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setTheirId($var)
    {
        GPBUtil::checkInt32($var);
        $this->theirId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 f13 = 13;</code>
     * @return int
     */
    public function getF13()
    {
        return $this->f13;
    }

    /**
     * Generated from protobuf field <code>int32 f13 = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setF13($var)
    {
        GPBUtil::checkInt32($var);
        $this->f13 = $var;

        return $this;
    }

}

