<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/RequestNicklistForUser.proto

namespace GPBMetadata\Channel;

class RequestNicklistForUser
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Channel\ChannelIdentifier::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a7f0a244368616e6e656c2f526571756573744e69636b6c697374466f72" .
            "557365722e70726f746f224f0a16526571756573744e69636b6c69737446" .
            "6f725573657212250a096368616e6e656c494418012001280b32122e4368" .
            "616e6e656c4964656e746966696572120e0a067573657249441802200128" .
            "05620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

