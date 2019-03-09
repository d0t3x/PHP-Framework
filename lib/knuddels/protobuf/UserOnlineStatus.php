<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: UserData/UserOnlineStatus.proto

/**
 * Protobuf type <code>UserOnlineStatus</code>
 */
class UserOnlineStatus
{
    /**
     * Generated from protobuf enum <code>Offline = 0;</code>
     */
    const Offline = 0;
    /**
     * Generated from protobuf enum <code>Online = 1;</code>
     */
    const Online = 1;
    /**
     * Generated from protobuf enum <code>OnlineInChannel = 2;</code>
     */
    const OnlineInChannel = 2;

    private static $valueToName = [
        self::Offline => 'Offline',
        self::Online => 'Online',
        self::OnlineInChannel => 'OnlineInChannel',
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
