<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/ReadConversation.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>ReadConversation</code>
 */
class ReadConversation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int64 conversationId = 1;</code>
     */
    private $conversationId;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|string[]|\Google\Protobuf\Internal\RepeatedField $conversationId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\ReadConversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int64 conversationId = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConversationId()
    {
        return $this->conversationId;
    }

    /**
     * Generated from protobuf field <code>repeated int64 conversationId = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConversationId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->conversationId = $arr;

        return $this;
    }

}

