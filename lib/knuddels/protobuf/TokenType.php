<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: login/TokenType.proto

/**
 * Protobuf type <code>TokenType</code>
 */
class TokenType
{
    /**
     * Generated from protobuf enum <code>NotSet = 0;</code>
     */
    const NotSet = 0;
    /**
     * Generated from protobuf enum <code>Device = 1;</code>
     */
    const Device = 1;
    /**
     * Generated from protobuf enum <code>PasswordChange = 2;</code>
     */
    const PasswordChange = 2;

    private static $valueToName = [
        self::NotSet => 'NotSet',
        self::Device => 'Device',
        self::PasswordChange => 'PasswordChange',
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

