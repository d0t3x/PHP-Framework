<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/MessageID.proto

namespace GPBMetadata\Channel;

class MessageID
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Channel\ChannelIdentifier::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a6b0a174368616e6e656c2f4d65737361676549442e70726f746f22480a" .
            "094d657373616765494412250a096368616e6e656c494418012001280b32" .
            "122e4368616e6e656c4964656e74696669657212140a0c6d657373616765" .
            "436f756e74180220012803620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

