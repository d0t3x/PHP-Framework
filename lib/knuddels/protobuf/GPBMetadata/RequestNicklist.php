<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RequestNicklist.proto

namespace GPBMetadata;

class RequestNicklist
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\ChannelIdentifier::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a590a15526571756573744e69636b6c6973742e70726f746f22380a0f52" .
            "6571756573744e69636b6c69737412250a096368616e6e656c4944180120" .
            "01280b32122e4368616e6e656c4964656e746966696572620670726f746f" .
            "33"
        ), true);

        static::$is_initialized = true;
    }
}

