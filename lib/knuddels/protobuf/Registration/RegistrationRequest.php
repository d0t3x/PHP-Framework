<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: registration/RegistrationRequest.proto

namespace Registration;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>registration.RegistrationRequest</code>
 */
class RegistrationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.registration.RequestType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>string nick = 2;</code>
     */
    private $nick = '';
    /**
     * Generated from protobuf field <code>int32 age = 3;</code>
     */
    private $age = 0;
    /**
     * Generated from protobuf field <code>.registration.RegistrationRequest.Gender gender = 4;</code>
     */
    private $gender = 0;
    /**
     * Generated from protobuf field <code>string email = 5;</code>
     */
    private $email = '';
    /**
     * Generated from protobuf field <code>string cap = 6;</code>
     */
    private $cap = '';
    /**
     * Generated from protobuf field <code>string capQuest = 7;</code>
     */
    private $capQuest = '';
    /**
     * Generated from protobuf field <code>string password = 8;</code>
     */
    private $password = '';
    /**
     * Generated from protobuf field <code>int32 category = 9;</code>
     */
    private $category = 0;
    /**
     * Generated from protobuf field <code>string platform = 10;</code>
     */
    private $platform = '';
    /**
     * Generated from protobuf field <code>repeated string uids = 11;</code>
     */
    private $uids;
    /**
     * Generated from protobuf field <code>repeated string flags = 12;</code>
     */
    private $flags;
    /**
     * Generated from protobuf field <code>bool interstitialCandidate = 13;</code>
     */
    private $interstitialCandidate = false;
    /**
     * Generated from protobuf field <code>string dsgvoQuestion = 14;</code>
     */
    private $dsgvoQuestion = '';
    /**
     * Generated from protobuf field <code>string recaptchaToken = 15;</code>
     */
    private $recaptchaToken = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $nick
     *     @type int $age
     *     @type int $gender
     *     @type string $email
     *     @type string $cap
     *     @type string $capQuest
     *     @type string $password
     *     @type int $category
     *     @type string $platform
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $uids
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $flags
     *     @type bool $interstitialCandidate
     *     @type string $dsgvoQuestion
     *     @type string $recaptchaToken
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Registration\RegistrationRequest::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.registration.RequestType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.registration.RequestType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Registration\RequestType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string nick = 2;</code>
     * @return string
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Generated from protobuf field <code>string nick = 2;</code>
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
     * Generated from protobuf field <code>int32 age = 3;</code>
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Generated from protobuf field <code>int32 age = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAge($var)
    {
        GPBUtil::checkInt32($var);
        $this->age = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.registration.RegistrationRequest.Gender gender = 4;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Generated from protobuf field <code>.registration.RegistrationRequest.Gender gender = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkEnum($var, \Registration\RegistrationRequest_Gender::class);
        $this->gender = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 5;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string cap = 6;</code>
     * @return string
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Generated from protobuf field <code>string cap = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCap($var)
    {
        GPBUtil::checkString($var, True);
        $this->cap = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string capQuest = 7;</code>
     * @return string
     */
    public function getCapQuest()
    {
        return $this->capQuest;
    }

    /**
     * Generated from protobuf field <code>string capQuest = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCapQuest($var)
    {
        GPBUtil::checkString($var, True);
        $this->capQuest = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 8;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 category = 9;</code>
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Generated from protobuf field <code>int32 category = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkInt32($var);
        $this->category = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string platform = 10;</code>
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Generated from protobuf field <code>string platform = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->platform = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string uids = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUids()
    {
        return $this->uids;
    }

    /**
     * Generated from protobuf field <code>repeated string uids = 11;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->uids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string flags = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Generated from protobuf field <code>repeated string flags = 12;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFlags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->flags = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool interstitialCandidate = 13;</code>
     * @return bool
     */
    public function getInterstitialCandidate()
    {
        return $this->interstitialCandidate;
    }

    /**
     * Generated from protobuf field <code>bool interstitialCandidate = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setInterstitialCandidate($var)
    {
        GPBUtil::checkBool($var);
        $this->interstitialCandidate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dsgvoQuestion = 14;</code>
     * @return string
     */
    public function getDsgvoQuestion()
    {
        return $this->dsgvoQuestion;
    }

    /**
     * Generated from protobuf field <code>string dsgvoQuestion = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setDsgvoQuestion($var)
    {
        GPBUtil::checkString($var, True);
        $this->dsgvoQuestion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string recaptchaToken = 15;</code>
     * @return string
     */
    public function getRecaptchaToken()
    {
        return $this->recaptchaToken;
    }

    /**
     * Generated from protobuf field <code>string recaptchaToken = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setRecaptchaToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->recaptchaToken = $var;

        return $this;
    }

}

