<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: registration/RequestType.proto

/**
 * Protobuf type <code>RequestType</code>
 */
class RequestType
{
    /**
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Generated from protobuf enum <code>NICK = 1;</code>
     */
    const NICK = 1;
    /**
     * Generated from protobuf enum <code>AGE = 2;</code>
     */
    const AGE = 2;
    /**
     * Generated from protobuf enum <code>GENDER = 3;</code>
     */
    const GENDER = 3;
    /**
     * Generated from protobuf enum <code>EMAIL = 4;</code>
     */
    const EMAIL = 4;
    /**
     * Generated from protobuf enum <code>PASSWORD = 5;</code>
     */
    const PASSWORD = 5;
    /**
     * Generated from protobuf enum <code>CAP = 6;</code>
     */
    const CAP = 6;
    /**
     * Generated from protobuf enum <code>FULL_REG_V1 = 7;</code>
     */
    const FULL_REG_V1 = 7;
    /**
     * Generated from protobuf enum <code>CHATSERVER = 8;</code>
     */
    const CHATSERVER = 8;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::NICK => 'NICK',
        self::AGE => 'AGE',
        self::GENDER => 'GENDER',
        self::EMAIL => 'EMAIL',
        self::PASSWORD => 'PASSWORD',
        self::CAP => 'CAP',
        self::FULL_REG_V1 => 'FULL_REG_V1',
        self::CHATSERVER => 'CHATSERVER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

