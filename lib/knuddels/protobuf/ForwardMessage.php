<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/ForwardMessage.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>ForwardMessage</code>
 */
class ForwardMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int32 receivers = 1;</code>
     */
    private $receivers;
    /**
     * Generated from protobuf field <code>int64 forwardedMessageId = 2;</code>
     */
    private $forwardedMessageId = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $receivers
     *     @type int|string $forwardedMessageId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\ForwardMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int32 receivers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReceivers()
    {
        return $this->receivers;
    }

    /**
     * Generated from protobuf field <code>repeated int32 receivers = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReceivers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->receivers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 forwardedMessageId = 2;</code>
     * @return int|string
     */
    public function getForwardedMessageId()
    {
        return $this->forwardedMessageId;
    }

    /**
     * Generated from protobuf field <code>int64 forwardedMessageId = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setForwardedMessageId($var)
    {
        GPBUtil::checkInt64($var);
        $this->forwardedMessageId = $var;

        return $this;
    }

}

