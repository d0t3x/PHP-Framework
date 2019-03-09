<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/FormattedText.proto

namespace FormattedText;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>FormattedText.Link</code>
 */
class Link extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string href = 1;</code>
     */
    private $href = '';
    /**
     * Generated from protobuf field <code>string text = 2;</code>
     */
    private $text = '';
    /**
     * Generated from protobuf field <code>bool bold = 3;</code>
     */
    private $bold = false;
    /**
     * Generated from protobuf field <code>bool italic = 4;</code>
     */
    private $italic = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $href
     *     @type string $text
     *     @type bool $bold
     *     @type bool $italic
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\FormattedText::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string href = 1;</code>
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Generated from protobuf field <code>string href = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHref($var)
    {
        GPBUtil::checkString($var, True);
        $this->href = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string text = 2;</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Generated from protobuf field <code>string text = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool bold = 3;</code>
     * @return bool
     */
    public function getBold()
    {
        return $this->bold;
    }

    /**
     * Generated from protobuf field <code>bool bold = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setBold($var)
    {
        GPBUtil::checkBool($var);
        $this->bold = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool italic = 4;</code>
     * @return bool
     */
    public function getItalic()
    {
        return $this->italic;
    }

    /**
     * Generated from protobuf field <code>bool italic = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setItalic($var)
    {
        GPBUtil::checkBool($var);
        $this->italic = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Link::class, \FormattedText_Link::class);

