<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: login/InitiatePasswordResetWebRequest.proto

namespace GPBMetadata\Login;

class InitiatePasswordResetWebRequest
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a6a0a2b6c6f67696e2f496e69746961746550617373776f726452657365" .
            "74576562526571756573742e70726f746f22330a1f496e69746961746550" .
            "617373776f726452657365745765625265717565737412100a0875736572" .
            "6e616d65180120012809620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

