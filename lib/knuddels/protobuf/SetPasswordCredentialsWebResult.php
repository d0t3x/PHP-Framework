<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: login/SetPasswordCredentialsWebResult.proto

/**
 * Protobuf type <code>SetPasswordCredentialsWebResult</code>
 */
class SetPasswordCredentialsWebResult
{
    /**
     * Generated from protobuf enum <code>SetPasswordCredentials_NotSet = 0;</code>
     */
    const SetPasswordCredentials_NotSet = 0;
    /**
     * Generated from protobuf enum <code>SetPasswordCredentials_InvalidParameter = 1;</code>
     */
    const SetPasswordCredentials_InvalidParameter = 1;
    /**
     * Generated from protobuf enum <code>SetPasswordCredentials_InvalidToken = 2;</code>
     */
    const SetPasswordCredentials_InvalidToken = 2;
    /**
     * Generated from protobuf enum <code>SetPasswordCredentials_Success = 3;</code>
     */
    const SetPasswordCredentials_Success = 3;

    private static $valueToName = [
        self::SetPasswordCredentials_NotSet => 'SetPasswordCredentials_NotSet',
        self::SetPasswordCredentials_InvalidParameter => 'SetPasswordCredentials_InvalidParameter',
        self::SetPasswordCredentials_InvalidToken => 'SetPasswordCredentials_InvalidToken',
        self::SetPasswordCredentials_Success => 'SetPasswordCredentials_Success',
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

