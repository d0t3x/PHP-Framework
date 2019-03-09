<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Messenger/UpdateConversationArchiveState.proto

namespace UpdateConversationArchiveState;

use UnexpectedValueException;

/**
 * Protobuf type <code>UpdateConversationArchiveState.State</code>
 */
class State
{
    /**
     * Generated from protobuf enum <code>Unarchived = 0;</code>
     */
    const Unarchived = 0;
    /**
     * Generated from protobuf enum <code>Archived = 1;</code>
     */
    const Archived = 1;

    private static $valueToName = [
        self::Unarchived => 'Unarchived',
        self::Archived => 'Archived',
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
class_alias(State::class, \UpdateConversationArchiveState_State::class);

