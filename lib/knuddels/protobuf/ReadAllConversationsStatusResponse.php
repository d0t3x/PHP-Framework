<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/ReadAllConversationsStatusResponse.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>ReadAllConversationsStatusResponse</code>
 */
class ReadAllConversationsStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ReadAllConversationsStatusResponse.Status status = 1;</code>
     */
    private $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\ReadAllConversationsStatusResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ReadAllConversationsStatusResponse.Status status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.ReadAllConversationsStatusResponse.Status status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \ReadAllConversationsStatusResponse_Status::class);
        $this->status = $var;

        return $this;
    }

}

