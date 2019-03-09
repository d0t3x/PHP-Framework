<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/ClientSettings.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>ClientSettings</code>
 */
class ClientSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ClientSettings.ConversationListFilterType conversationListFilterType = 1;</code>
     */
    private $conversationListFilterType = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $conversationListFilterType
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\ClientSettings::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ClientSettings.ConversationListFilterType conversationListFilterType = 1;</code>
     * @return int
     */
    public function getConversationListFilterType()
    {
        return $this->conversationListFilterType;
    }

    /**
     * Generated from protobuf field <code>.ClientSettings.ConversationListFilterType conversationListFilterType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setConversationListFilterType($var)
    {
        GPBUtil::checkEnum($var, \ClientSettings_ConversationListFilterType::class);
        $this->conversationListFilterType = $var;

        return $this;
    }

}
