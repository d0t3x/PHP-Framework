<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/SendMessageToNick.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>SendMessageToNick</code>
 */
class SendMessageToNick extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string receivers = 1;</code>
     */
    private $receivers;
    /**
     * Generated from protobuf field <code>string text = 2;</code>
     */
    private $text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $receivers
     *     @type string $text
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\SendMessageToNick::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string receivers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReceivers()
    {
        return $this->receivers;
    }

    /**
     * Generated from protobuf field <code>repeated string receivers = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReceivers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->receivers = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string text = 2;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Generated from protobuf field <code>string text = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

}

