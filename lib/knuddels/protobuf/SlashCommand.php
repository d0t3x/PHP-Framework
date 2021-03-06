<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/SlashCommand.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>SlashCommand</code>
 */
class SlashCommand extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ChannelIdentifier channelID = 1;</code>
     */
    private $channelID = null;
    /**
     * Generated from protobuf field <code>string message = 2;</code>
     */
    private $message = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ChannelIdentifier $channelID
     *     @type string $message
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Channel\SlashCommand::initOnce();
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
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

}

