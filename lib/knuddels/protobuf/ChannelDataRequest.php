<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/ChannelDataRequest.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>ChannelDataRequest</code>
 */
class ChannelDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ChannelIdentifier channelId = 1;</code>
     */
    private $channelId = null;
    /**
     * Generated from protobuf field <code>repeated int32 fields = 2;</code>
     */
    private $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ChannelIdentifier $channelId
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $fields
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Channel\ChannelDataRequest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChannelIdentifier channelId = 1;</code>
     * @return \ChannelIdentifier
     */
    public function getChannelId()
    {
        return $this->channelId;
    }

    /**
     * Generated from protobuf field <code>.ChannelIdentifier channelId = 1;</code>
     * @param \ChannelIdentifier $var
     * @return $this
     */
    public function setChannelId($var)
    {
        GPBUtil::checkMessage($var, \ChannelIdentifier::class);
        $this->channelId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 fields = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Generated from protobuf field <code>repeated int32 fields = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->fields = $arr;

        return $this;
    }

}

