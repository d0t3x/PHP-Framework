<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/ResolveChannelNameToIdResponse.proto

namespace GPBMetadata\Channel;

class ResolveChannelNameToIdResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Channel\ChannelIdentifier::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a97010a2c4368616e6e656c2f5265736f6c76654368616e6e656c4e616d" .
            "65546f4964526573706f6e73652e70726f746f225f0a1e5265736f6c7665" .
            "4368616e6e656c4e616d65546f4964526573706f6e736512250a09636861" .
            "6e6e656c496418012001280b32122e4368616e6e656c4964656e74696669" .
            "657212160a0e726573706f6e736553746174757318022001280562067072" .
            "6f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
