<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/RequestMessagesForConversation.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>RequestMessagesForConversation</code>
 */
class RequestMessagesForConversation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 otherUserId = 1;</code>
     */
    private $otherUserId = 0;
    /**
     * Generated from protobuf field <code>int64 sinceTimestamp = 2;</code>
     */
    private $sinceTimestamp = 0;
    /**
     * Generated from protobuf field <code>int32 messageLimit = 3;</code>
     */
    private $messageLimit = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $otherUserId
     *     @type int|string $sinceTimestamp
     *     @type int $messageLimit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\RequestMessagesForConversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 otherUserId = 1;</code>
     * @return int
     */
    public function getOtherUserId()
    {
        return $this->otherUserId;
    }

    /**
     * Generated from protobuf field <code>int32 otherUserId = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOtherUserId($var)
    {
        GPBUtil::checkInt32($var);
        $this->otherUserId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 sinceTimestamp = 2;</code>
     * @return int|string
     */
    public function getSinceTimestamp()
    {
        return $this->sinceTimestamp;
    }

    /**
     * Generated from protobuf field <code>int64 sinceTimestamp = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSinceTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->sinceTimestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 messageLimit = 3;</code>
     * @return int
     */
    public function getMessageLimit()
    {
        return $this->messageLimit;
    }

    /**
     * Generated from protobuf field <code>int32 messageLimit = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->messageLimit = $var;

        return $this;
    }

}

