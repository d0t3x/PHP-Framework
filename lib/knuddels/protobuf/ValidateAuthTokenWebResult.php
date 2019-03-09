<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: login/ValidateAuthTokenWebResult.proto

/**
 * Protobuf type <code>ValidateAuthTokenWebResult</code>
 */
class ValidateAuthTokenWebResult
{
    /**
     * Generated from protobuf enum <code>ValidateAuthToken_NotSet = 0;</code>
     */
    const ValidateAuthToken_NotSet = 0;
    /**
     * Generated from protobuf enum <code>ValidateAuthToken_Valid = 1;</code>
     */
    const ValidateAuthToken_Valid = 1;
    /**
     * Generated from protobuf enum <code>ValidateAuthToken_Expired = 2;</code>
     */
    const ValidateAuthToken_Expired = 2;
    /**
     * Generated from protobuf enum <code>ValidateAuthToken_UnknownToken = 3;</code>
     */
    const ValidateAuthToken_UnknownToken = 3;
    /**
     * Generated from protobuf enum <code>ValidateAuthToken_InvalidRequest = 4;</code>
     */
    const ValidateAuthToken_InvalidRequest = 4;
    /**
     * Generated from protobuf enum <code>ValidateAuthToken_InvalidSignature = 5;</code>
     */
    const ValidateAuthToken_InvalidSignature = 5;

    private static $valueToName = [
        self::ValidateAuthToken_NotSet => 'ValidateAuthToken_NotSet',
        self::ValidateAuthToken_Valid => 'ValidateAuthToken_Valid',
        self::ValidateAuthToken_Expired => 'ValidateAuthToken_Expired',
        self::ValidateAuthToken_UnknownToken => 'ValidateAuthToken_UnknownToken',
        self::ValidateAuthToken_InvalidRequest => 'ValidateAuthToken_InvalidRequest',
        self::ValidateAuthToken_InvalidSignature => 'ValidateAuthToken_InvalidSignature',
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

