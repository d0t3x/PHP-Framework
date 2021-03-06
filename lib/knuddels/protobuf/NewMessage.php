<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/NewMessage.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>NewMessage</code>
 */
class NewMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int32 participants = 1;</code>
     */
    private $participants;
    /**
     * Generated from protobuf field <code>.ConversationMessage message = 2;</code>
     */
    private $message = null;
    /**
     * Generated from protobuf field <code>int64 conversationId = 3;</code>
     */
    private $conversationId = 0;
    /**
     * Generated from protobuf field <code>bool isAlreadyRead = 4;</code>
     */
    private $isAlreadyRead = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $participants
     *     @type \ConversationMessage $message
     *     @type int|string $conversationId
     *     @type bool $isAlreadyRead
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\NewMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int32 participants = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * Generated from protobuf field <code>repeated int32 participants = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParticipants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->participants = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.ConversationMessage message = 2;</code>
     * @return \ConversationMessage
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>.ConversationMessage message = 2;</code>
     * @param \ConversationMessage $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkMessage($var, \ConversationMessage::class);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 conversationId = 3;</code>
     * @return int|string
     */
    public function getConversationId()
    {
        return $this->conversationId;
    }

    /**
     * Generated from protobuf field <code>int64 conversationId = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setConversationId($var)
    {
        GPBUtil::checkInt64($var);
        $this->conversationId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isAlreadyRead = 4;</code>
     * @return bool
     */
    public function getIsAlreadyRead()
    {
        return $this->isAlreadyRead;
    }

    /**
     * Generated from protobuf field <code>bool isAlreadyRead = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAlreadyRead($var)
    {
        GPBUtil::checkBool($var);
        $this->isAlreadyRead = $var;

        return $this;
    }

}

