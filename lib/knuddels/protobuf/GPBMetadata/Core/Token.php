<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Token.proto

namespace GPBMetadata\Core;

class Token
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a620a10636f72652f546f6b656e2e70726f746f22460a05546f6b656e12" .
            "250a076d65737361676518012001280b32142e676f6f676c652e70726f74" .
            "6f6275662e416e7912160a0e6c6f67506572666f726d616e636518022001" .
            "2808620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

