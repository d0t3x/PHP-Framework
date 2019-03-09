<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: login/Credentials.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>Credentials</code>
 */
class Credentials extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 credentialType = 1;</code>
     */
    private $credentialType = 0;
    /**
     * Generated from protobuf field <code>.PasswordCredentialsData passwordCredentials = 2;</code>
     */
    private $passwordCredentials = null;
    /**
     * Generated from protobuf field <code>.FacebookCredentialsData facebookCredentials = 3;</code>
     */
    private $facebookCredentials = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $credentialType
     *     @type \PasswordCredentialsData $passwordCredentials
     *     @type \FacebookCredentialsData $facebookCredentials
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Login\Credentials::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 credentialType = 1;</code>
     * @return int
     */
    public function getCredentialType()
    {
        return $this->credentialType;
    }

    /**
     * Generated from protobuf field <code>int32 credentialType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCredentialType($var)
    {
        GPBUtil::checkInt32($var);
        $this->credentialType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.PasswordCredentialsData passwordCredentials = 2;</code>
     * @return \PasswordCredentialsData
     */
    public function getPasswordCredentials()
    {
        return $this->passwordCredentials;
    }

    /**
     * Generated from protobuf field <code>.PasswordCredentialsData passwordCredentials = 2;</code>
     * @param \PasswordCredentialsData $var
     * @return $this
     */
    public function setPasswordCredentials($var)
    {
        GPBUtil::checkMessage($var, \PasswordCredentialsData::class);
        $this->passwordCredentials = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FacebookCredentialsData facebookCredentials = 3;</code>
     * @return \FacebookCredentialsData
     */
    public function getFacebookCredentials()
    {
        return $this->facebookCredentials;
    }

    /**
     * Generated from protobuf field <code>.FacebookCredentialsData facebookCredentials = 3;</code>
     * @param \FacebookCredentialsData $var
     * @return $this
     */
    public function setFacebookCredentials($var)
    {
        GPBUtil::checkMessage($var, \FacebookCredentialsData::class);
        $this->facebookCredentials = $var;

        return $this;
    }

}
