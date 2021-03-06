<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserData/RequestUserData.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>RequestUserData</code>
 */
class RequestUserData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .UserDataRequest requests = 1;</code>
     */
    private $requests;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \UserDataRequest[]|\Google\Protobuf\Internal\RepeatedField $requests
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\UserData\RequestUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .UserDataRequest requests = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequests()
    {
        return $this->requests;
    }

    /**
     * Generated from protobuf field <code>repeated .UserDataRequest requests = 1;</code>
     * @param \UserDataRequest[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequests($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \UserDataRequest::class);
        $this->requests = $arr;

        return $this;
    }

}

