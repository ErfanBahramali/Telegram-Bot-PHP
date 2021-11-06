<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Helpers;

use TelegramBotPHP\Constants\UpdateType;

trait Forward
{
    /**
     * getForwardUserId function
     *
     * @return int|null Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public static function getForwardUserId()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from']['id'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * forwardUserIsBot function
     *
     * @return bool|null True, if this user is a bot
     */
    public static function forwardUserIsBot()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from']['is_bot'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardUserFirstName function
     *
     * @return string|null User's or bot's first name
     */
    public static function getForwardUserFirstName()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from']['first_name'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardUserLastName function
     *
     * @return string|null User's or bot's last name
     */
    public static function getForwardUserLastName()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from']['last_name'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardUserUsername function
     *
     * @return string|null
     */
    public static function getForwardUserUsername()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from']['username'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardUserLanguageCode function
     *
     * @return string|null [IETF language tag](https://en.wikipedia.org/wiki/IETF_language_tag) of the user's language
     */
    public static function getForwardUserLanguageCode()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from']['language_code'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * forwardUserCanJoinGroups function
     *
     * @return bool|null True, if the bot can be invited to groups. Returned only in [getMe](https://core.telegram.org/bots/api#getme).
     */
    public static function forwardUserCanJoinGroups()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from']['can_join_groups'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * forwardUserCanReadAllGroupMessages function
     *
     * @return bool|null True, if [privacy mode](https://core.telegram.org/bots#privacy-mode) is disabled for the bot. Returned only in [getMe](https://core.telegram.org/bots/api#getme).
     */
    public static function forwardUserCanReadAllGroupMessages()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from']['can_read_all_group_messages'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * forwardUserSupportsInlineQueries function
     *
     * @return bool|null True, if the bot supports inline queries. Returned only in [getMe](https://core.telegram.org/bots/api#getme).
     */
    public static function forwardUserSupportsInlineQueries()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from']['supports_inline_queries'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardChatId function
     *
     * @return int|null Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public static function getForwardChatId()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from_chat']['id'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardChatType function
     *
     * @return string|null Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     */
    public static function getForwardChatType()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from_chat']['type'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardChatTitle function
     *
     * @return string|null Title, for supergroups, channels and group chats
     */
    public static function getForwardChatTitle()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from_chat']['title'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardChatUsername function
     *
     * @return string|null Username, for private chats, supergroups and channels if available
     */
    public static function getForwardChatUsername()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from_chat']['username'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardChatFirstName function
     *
     * @return string|null First name of the other party in a private chat
     */
    public static function getForwardChatFirstName()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from_chat']['first_name'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardChatLastName function
     *
     * @return string|null Last name of the other party in a private chat
     */
    public static function getForwardChatLastName()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from_chat']['last_name'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardMessageId function
     *
     * @return int|null For messages forwarded from channels, identifier of the original message in the channel
     */
    public static function getForwardMessageId()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_from_message_id'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardSignature function
     *
     * @return string|null For messages forwarded from channels, signature of the post author if present
     */
    public static function getForwardSignature()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_signature'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardSenderName function
     *
     * @return string|null Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
     */
    public static function getForwardSenderName()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_sender_name'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getForwardDate function
     *
     * @return int|null For forwarded messages, date the original message was sent in Unix time
     */
    public static function getForwardDate()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::CHANNEL_POST:
                return self::$updateContent['forward_date'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }
}
