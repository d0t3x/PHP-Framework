<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/SlashCommand.proto

namespace GPBMetadata\Channel;

class SlashCommand
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Channel\ChannelIdentifier::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a6c0a1a4368616e6e656c2f536c617368436f6d6d616e642e70726f746f" .
            "22460a0c536c617368436f6d6d616e6412250a096368616e6e656c494418" .
            "012001280b32122e4368616e6e656c4964656e746966696572120f0a076d" .
            "657373616765180220012809620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

