<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/FormattedText.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;
use Google\Protobuf\Internal\GPBWrapperUtils;

/**
 * Generated from protobuf message <code>FormattedText</code>
 */
class FormattedText extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.FormattedText.Text text = 1;</code>
     */
    private $text = null;
    /**
     * Generated from protobuf field <code>.FormattedText.List list = 2;</code>
     */
    private $list = null;
    /**
     * Generated from protobuf field <code>.FormattedText.Smiley smiley = 3;</code>
     */
    private $smiley = null;
    /**
     * Generated from protobuf field <code>.FormattedText.Link link = 4;</code>
     */
    private $link = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \FormattedText\Text $text
     *     @type \FormattedText\PBList $list
     *     @type \FormattedText\Smiley $smiley
     *     @type \FormattedText\Link $link
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Core\FormattedText::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.FormattedText.Text text = 1;</code>
     * @return \FormattedText\Text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Generated from protobuf field <code>.FormattedText.Text text = 1;</code>
     * @param \FormattedText\Text $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \FormattedText_Text::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FormattedText.List list = 2;</code>
     * @return \FormattedText\PBList
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Generated from protobuf field <code>.FormattedText.List list = 2;</code>
     * @param \FormattedText\PBList $var
     * @return $this
     */
    public function setList($var)
    {
        GPBUtil::checkMessage($var, \FormattedText_List::class);
        $this->list = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FormattedText.Smiley smiley = 3;</code>
     * @return \FormattedText\Smiley
     */
    public function getSmiley()
    {
        return $this->smiley;
    }

    /**
     * Generated from protobuf field <code>.FormattedText.Smiley smiley = 3;</code>
     * @param \FormattedText\Smiley $var
     * @return $this
     */
    public function setSmiley($var)
    {
        GPBUtil::checkMessage($var, \FormattedText_Smiley::class);
        $this->smiley = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.FormattedText.Link link = 4;</code>
     * @return \FormattedText\Link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Generated from protobuf field <code>.FormattedText.Link link = 4;</code>
     * @param \FormattedText\Link $var
     * @return $this
     */
    public function setLink($var)
    {
        GPBUtil::checkMessage($var, \FormattedText_Link::class);
        $this->link = $var;

        return $this;
    }

}
