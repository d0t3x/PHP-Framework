<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: login/SetPasswordCredentialsWebRequest.proto

namespace GPBMetadata\Login;

class SetPasswordCredentialsWebRequest
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab2010a2c6c6f67696e2f53657450617373776f726443726564656e7469" .
            "616c73576562526571756573742e70726f746f227a0a2053657450617373" .
            "776f726443726564656e7469616c735765625265717565737412130a0b64" .
            "6570726563617465643118012001280512130a0b64657072656361746564" .
            "3218022001280512110a0961757468546f6b656e18032001280912190a11" .
            "706c61696e7465787450617373776f7264180420012809620670726f746f" .
            "33"
        ), true);

        static::$is_initialized = true;
    }
}
