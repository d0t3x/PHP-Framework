<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/ConnectRequest.proto

namespace GPBMetadata\Core;

class ConnectRequest
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Core\ClientType::initOnce();
        \GPBMetadata\Core\ConnectionType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa1020a19636f72652f436f6e6e656374526571756573742e70726f746f" .
            "1a19636f72652f436f6e6e656374696f6e547970652e70726f746f22e001" .
            "0a0e436f6e6e65637452657175657374121b0a13776173416c7265616479" .
            "436f6e6e656374656418012001280812140a0c636f6e6e656374696f6e49" .
            "6418022001280c12150a0d69734f6c6450726f746f636f6c180320012808" .
            "12230a1b646f6e7443726561746547617465776179436f6e6e656374696f" .
            "6e180420012808121f0a0a636c69656e745479706518052001280e320b2e" .
            "436c69656e745479706512270a0e636f6e6e656374696f6e547970651806" .
            "2001280e320f2e436f6e6e656374696f6e5479706512150a0d636c69656e" .
            "7456657273696f6e180720012809620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
