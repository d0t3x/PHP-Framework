<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/UserLeftEvent.proto

namespace GPBMetadata\Channel;

class UserLeftEvent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Channel\ChannelIdentifier::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9e010a1b4368616e6e656c2f557365724c6566744576656e742e70726f" .
            "746f22770a0d557365724c6566744576656e7412250a096368616e6e656c" .
            "496418012001280b32122e4368616e6e656c4964656e746966696572120e" .
            "0a0675736572496418022001280312160a0e7573657273496e4368616e6e" .
            "656c18032003280312170a0f757365724c69737456657273696f6e180420" .
            "012803620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

