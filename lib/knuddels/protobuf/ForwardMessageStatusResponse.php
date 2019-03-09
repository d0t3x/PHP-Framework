<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/ForwardMessageStatusResponse.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>ForwardMessageStatusResponse</code>
 */
class ForwardMessageStatusResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ForwardMessageStatusResponse.Status status = 1;</code>
     */
    private $status = 0;
    /**
     * Generated from protobuf field <code>int32 sourceUserId = 2;</code>
     */
    private $sourceUserId = 0;
    /**
     * Generated from protobuf field <code>int32 recipientCount = 3;</code>
     */
    private $recipientCount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $status
     *     @type int $sourceUserId
     *     @type int $recipientCount
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\ForwardMessageStatusResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ForwardMessageStatusResponse.Status status = 1;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>.ForwardMessageStatusResponse.Status status = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \ForwardMessageStatusResponse_Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 sourceUserId = 2;</code>
     * @return int
     */
    public function getSourceUserId()
    {
        return $this->sourceUserId;
    }

    /**
     * Generated from protobuf field <code>int32 sourceUserId = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSourceUserId($var)
    {
        GPBUtil::checkInt32($var);
        $this->sourceUserId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 recipientCount = 3;</code>
     * @return int
     */
    public function getRecipientCount()
    {
        return $this->recipientCount;
    }

    /**
     * Generated from protobuf field <code>int32 recipientCount = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRecipientCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->recipientCount = $var;

        return $this;
    }

}
