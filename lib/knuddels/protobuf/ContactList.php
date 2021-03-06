<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/ContactList.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>ContactList</code>
 */
class ContactList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated int32 userIds = 1;</code>
     */
    private $userIds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $userIds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\ContactList::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated int32 userIds = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserIds()
    {
        return $this->userIds;
    }

    /**
     * Generated from protobuf field <code>repeated int32 userIds = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->userIds = $arr;

        return $this;
    }

}

