<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: registration/Success.proto

namespace Registration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>registration.Success</code>
 */
class Success extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string nick = 1;</code>
     */
    private $nick = '';
    /**
     * Generated from protobuf field <code>string checksum = 2;</code>
     */
    private $checksum = '';
    /**
     * Generated from protobuf field <code>int32 nextstep = 3;</code>
     */
    private $nextstep = 0;
    /**
     * Generated from protobuf field <code>bool showInterstitial = 4;</code>
     */
    private $showInterstitial = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $nick
     *     @type string $checksum
     *     @type int $nextstep
     *     @type bool $showInterstitial
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Registration\Success::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string nick = 1;</code>
     * @return string
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Generated from protobuf field <code>string nick = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNick($var)
    {
        GPBUtil::checkString($var, True);
        $this->nick = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string checksum = 2;</code>
     * @return string
     */
    public function getChecksum()
    {
        return $this->checksum;
    }

    /**
     * Generated from protobuf field <code>string checksum = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setChecksum($var)
    {
        GPBUtil::checkString($var, True);
        $this->checksum = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 nextstep = 3;</code>
     * @return int
     */
    public function getNextstep()
    {
        return $this->nextstep;
    }

    /**
     * Generated from protobuf field <code>int32 nextstep = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNextstep($var)
    {
        GPBUtil::checkInt32($var);
        $this->nextstep = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool showInterstitial = 4;</code>
     * @return bool
     */
    public function getShowInterstitial()
    {
        return $this->showInterstitial;
    }

    /**
     * Generated from protobuf field <code>bool showInterstitial = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setShowInterstitial($var)
    {
        GPBUtil::checkBool($var);
        $this->showInterstitial = $var;

        return $this;
    }

}

