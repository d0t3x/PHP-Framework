<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserData/RequestUserDataByNick.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>RequestUserDataByNick</code>
 */
class RequestUserDataByNick extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.UserDataByNickRequest requests = 1;</code>
     */
    private $requests = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \UserDataByNickRequest $requests
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserData\RequestUserDataByNick::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.UserDataByNickRequest requests = 1;</code>
     * @return \UserDataByNickRequest
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Generated from protobuf field <code>.UserDataByNickRequest requests = 1;</code>
     * @param \UserDataByNickRequest $var
     * @return $this
     */
    public function setRequests($var)
    {
        GPBUtil::checkMessage($var, \UserDataByNickRequest::class);
        $this->requests = $var;

        return $this;
    }

}

