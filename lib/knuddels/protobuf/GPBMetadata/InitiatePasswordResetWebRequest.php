<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: InitiatePasswordResetWebRequest.proto

namespace GPBMetadata;

class InitiatePasswordResetWebRequest
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a640a25496e69746961746550617373776f726452657365745765625265" .
            "71756573742e70726f746f22330a1f496e69746961746550617373776f72" .
            "6452657365745765625265717565737412100a08757365726e616d651801" .
            "20012809620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
