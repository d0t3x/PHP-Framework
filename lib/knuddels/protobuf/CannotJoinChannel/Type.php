<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Channel/CannotJoinChannel.proto

namespace CannotJoinChannel;

use UnexpectedValueException;

/**
 * Protobuf type <code>CannotJoinChannel.Type</code>
 */
class Type
{
    /**
     * Generated from protobuf enum <code>PERMISSION = 0;</code>
     */
    const PERMISSION = 0;
    /**
     * Generated from protobuf enum <code>BANNED = 1;</code>
     */
    const BANNED = 1;
    /**
     * Generated from protobuf enum <code>FULL = 2;</code>
     */
    const FULL = 2;
    /**
     * Generated from protobuf enum <code>REQUIREMENTS = 3;</code>
     */
    const REQUIREMENTS = 3;
    /**
     * Generated from protobuf enum <code>DOES_NOT_EXIST = 4;</code>
     */
    const DOES_NOT_EXIST = 4;
    /**
     * Generated from protobuf enum <code>OTHER = 5;</code>
     */
    const OTHER = 5;

    private static $valueToName = [
        self::PERMISSION => 'PERMISSION',
        self::BANNED => 'BANNED',
        self::FULL => 'FULL',
        self::REQUIREMENTS => 'REQUIREMENTS',
        self::DOES_NOT_EXIST => 'DOES_NOT_EXIST',
        self::OTHER => 'OTHER',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \CannotJoinChannel_Type::class);

