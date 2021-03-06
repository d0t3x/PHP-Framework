<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/JoinChannelByName.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>JoinChannelByName</code>
 */
class JoinChannelByName extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string channelName = 1;</code>
     */
    private $channelName = '';
    /**
     * Generated from protobuf field <code>bool allowSubChannel = 2;</code>
     */
    private $allowSubChannel = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $channelName
     *     @type bool $allowSubChannel
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Channel\JoinChannelByName::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string channelName = 1;</code>
     * @return string
     */
    public function getChannelName()
    {
        return $this->channelName;
    }

    /**
     * Generated from protobuf field <code>string channelName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setChannelName($var)
    {
        GPBUtil::checkString($var, True);
        $this->channelName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool allowSubChannel = 2;</code>
     * @return bool
     */
    public function getAllowSubChannel()
    {
        return $this->allowSubChannel;
    }

    /**
     * Generated from protobuf field <code>bool allowSubChannel = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowSubChannel($var)
    {
        GPBUtil::checkBool($var);
        $this->allowSubChannel = $var;

        return $this;
    }

}

