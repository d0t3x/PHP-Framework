<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/UserJoinedEvent.proto

namespace GPBMetadata\Channel;

class UserJoinedEvent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Channel\ChannelIdentifier::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa2010a1d4368616e6e656c2f557365724a6f696e65644576656e742e70" .
            "726f746f22790a0f557365724a6f696e65644576656e7412250a09636861" .
            "6e6e656c496418012001280b32122e4368616e6e656c4964656e74696669" .
            "6572120e0a0675736572496418022001280312160a0e7573657273496e43" .
            "68616e6e656c18032003280312170a0f757365724c69737456657273696f" .
            "6e180420012803620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

