<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/RequestNicklistForUser.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>RequestNicklistForUser</code>
 */
class RequestNicklistForUser extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ChannelIdentifier channelID = 1;</code>
     */
    private $channelID = null;
    /**
     * Generated from protobuf field <code>int32 userID = 2;</code>
     */
    private $userID = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ChannelIdentifier $channelID
     *     @type int $userID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Channel\RequestNicklistForUser::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ChannelIdentifier channelID = 1;</code>
     * @return \ChannelIdentifier
     */
    public function getChannelID()
    {
        return $this->channelID;
    }

    /**
     * Generated from protobuf field <code>.ChannelIdentifier channelID = 1;</code>
     * @param \ChannelIdentifier $var
     * @return $this
     */
    public function setChannelID($var)
    {
        GPBUtil::checkMessage($var, \ChannelIdentifier::class);
        $this->channelID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 userID = 2;</code>
     * @return int
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Generated from protobuf field <code>int32 userID = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUserID($var)
    {
        GPBUtil::checkInt32($var);
        $this->userID = $var;

        return $this;
    }

}

