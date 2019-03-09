<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserData/UserData.proto

namespace UserData;

use UnexpectedValueException;

/**
 * Protobuf type <code>UserData.AccountType</code>
 */
class AccountType
{
    /**
     * Generated from protobuf enum <code>Human = 0;</code>
     */
    const Human = 0;
    /**
     * Generated from protobuf enum <code>SystemBot = 1;</code>
     */
    const SystemBot = 1;
    /**
     * Generated from protobuf enum <code>AppBot = 2;</code>
     */
    const AppBot = 2;

    private static $valueToName = [
        self::Human => 'Human',
        self::SystemBot => 'SystemBot',
        self::AppBot => 'AppBot',
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
class_alias(AccountType::class, \UserData_AccountType::class);

