<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: login/CreatePasswordChangeTokenWebRequest.proto

namespace GPBMetadata\Login;

class CreatePasswordChangeTokenWebRequest
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Login\Credentials::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a83010a2f6c6f67696e2f43726561746550617373776f72644368616e67" .
            "65546f6b656e576562526571756573742e70726f746f22480a2343726561" .
            "746550617373776f72644368616e6765546f6b656e576562526571756573" .
            "7412210a0b63726564656e7469616c7318012001280b320c2e4372656465" .
            "6e7469616c73620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

