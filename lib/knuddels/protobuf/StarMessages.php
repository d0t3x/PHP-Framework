<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/StarMessages.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>StarMessages</code>
 */
class StarMessages extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int64 messageIds = 1;</code>
     */
    private $messageIds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $messageIds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\StarMessages::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int64 messageIds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMessageIds()
    {
        return $this->messageIds;
    }

    /**
     * Generated from protobuf field <code>repeated int64 messageIds = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMessageIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->messageIds = $arr;

        return $this;
    }

}

