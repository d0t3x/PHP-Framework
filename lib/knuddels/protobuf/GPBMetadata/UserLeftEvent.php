<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserLeftEvent.proto

namespace GPBMetadata;

class UserLeftEvent
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\ChannelIdentifier::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a96010a13557365724c6566744576656e742e70726f746f22770a0d5573" .
            "65724c6566744576656e7412250a096368616e6e656c496418012001280b" .
            "32122e4368616e6e656c4964656e746966696572120e0a06757365724964" .
            "18022001280312160a0e7573657273496e4368616e6e656c180320032803" .
            "12170a0f757365724c69737456657273696f6e180420012803620670726f" .
            "746f33"
        ), true);

        static::$is_initialized = true;
    }
}

