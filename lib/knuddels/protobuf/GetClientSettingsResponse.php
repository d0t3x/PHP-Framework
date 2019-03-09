<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/GetClientSettingsResponse.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>GetClientSettingsResponse</code>
 */
class GetClientSettingsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.ClientSettings settings = 1;</code>
     */
    private $settings = null;
    /**
     * Generated from protobuf field <code>.GetClientSettingsResponse.Result result = 2;</code>
     */
    private $result = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \ClientSettings $settings
     *     @type int $result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Messenger\GetClientSettingsResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.ClientSettings settings = 1;</code>
     * @return \ClientSettings
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Generated from protobuf field <code>.ClientSettings settings = 1;</code>
     * @param \ClientSettings $var
     * @return $this
     */
    public function setSettings($var)
    {
        GPBUtil::checkMessage($var, \ClientSettings::class);
        $this->settings = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.GetClientSettingsResponse.Result result = 2;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.GetClientSettingsResponse.Result result = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \GetClientSettingsResponse_Result::class);
        $this->result = $var;

        return $this;
    }

}
