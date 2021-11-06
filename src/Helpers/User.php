<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Helpers;

use TelegramBotPHP\Constants\UpdateType;

trait User
{
    /**
     * getUserId function
     *
     * @return int|null Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public static function getUserId()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::INLINE_QUERY:
            case UpdateType::CHOSEN_INLINE_RESULT:
            case UpdateType::CALLBACK_QUERY:
            case UpdateType::SHIPPING_QUERY:
            case UpdateType::PRE_CHECKOUT_QUERY:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['from']['id'];
                break;
            case UpdateType::POLL_ANSWER:
                return self::$updateContent['user']['id'];
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * userIsBot function
     *
     * @return bool|null True, if this user is a bot
     */
    public static function userIsBot()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::INLINE_QUERY:
            case UpdateType::CHOSEN_INLINE_RESULT:
            case UpdateType::CALLBACK_QUERY:
            case UpdateType::SHIPPING_QUERY:
            case UpdateType::PRE_CHECKOUT_QUERY:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['from']['is_bot'];
                break;
            case UpdateType::POLL_ANSWER:
                return self::$updateContent['user']['is_bot'];
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getUserFirstName function
     *
     * @return string|null User's or bot's first name
     */
    public static function getUserFirstName()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::INLINE_QUERY:
            case UpdateType::CHOSEN_INLINE_RESULT:
            case UpdateType::CALLBACK_QUERY:
            case UpdateType::SHIPPING_QUERY:
            case UpdateType::PRE_CHECKOUT_QUERY:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['from']['first_name'];
                break;
            case UpdateType::POLL_ANSWER:
                return self::$updateContent['user']['first_name'];
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getUserLastName function
     *
     * @return string|null User's or bot's last name
     */
    public static function getUserLastName()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::INLINE_QUERY:
            case UpdateType::CHOSEN_INLINE_RESULT:
            case UpdateType::CALLBACK_QUERY:
            case UpdateType::SHIPPING_QUERY:
            case UpdateType::PRE_CHECKOUT_QUERY:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['from']['last_name'] ?? null;
                break;
            case UpdateType::POLL_ANSWER:
                return self::$updateContent['user']['last_name'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getUserUsername function
     *
     * @return string|null User's or bot's username
     */
    public static function getUserUsername()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::INLINE_QUERY:
            case UpdateType::CHOSEN_INLINE_RESULT:
            case UpdateType::CALLBACK_QUERY:
            case UpdateType::SHIPPING_QUERY:
            case UpdateType::PRE_CHECKOUT_QUERY:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['from']['username'] ?? null;
                break;
            case UpdateType::POLL_ANSWER:
                return self::$updateContent['user']['username'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getUserLanguageCode function
     *
     * @return string|null [IETF language tag](https://en.wikipedia.org/wiki/IETF_language_tag) of the user's language
     */
    public static function getUserLanguageCode()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::INLINE_QUERY:
            case UpdateType::CHOSEN_INLINE_RESULT:
            case UpdateType::CALLBACK_QUERY:
            case UpdateType::SHIPPING_QUERY:
            case UpdateType::PRE_CHECKOUT_QUERY:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['from']['language_code'] ?? null;
                break;
            case UpdateType::POLL_ANSWER:
                return self::$updateContent['user']['language_code'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * userCanJoinGroups function
     *
     * @return bool|null True, if the bot can be invited to groups. Returned only in [getMe](https://core.telegram.org/bots/api#getme).
     */
    public static function userCanJoinGroups()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::INLINE_QUERY:
            case UpdateType::CHOSEN_INLINE_RESULT:
            case UpdateType::CALLBACK_QUERY:
            case UpdateType::SHIPPING_QUERY:
            case UpdateType::PRE_CHECKOUT_QUERY:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['from']['can_join_groups'] ?? null;
                break;
            case UpdateType::POLL_ANSWER:
                return self::$updateContent['user']['can_join_groups'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * userCanReadAllGroupMessages function
     *
     * @return bool|null True, if [privacy mode](https://core.telegram.org/bots#privacy-mode) is disabled for the bot. Returned only in [getMe](https://core.telegram.org/bots/api#getme).
     */
    public static function userCanReadAllGroupMessages()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::INLINE_QUERY:
            case UpdateType::CHOSEN_INLINE_RESULT:
            case UpdateType::CALLBACK_QUERY:
            case UpdateType::SHIPPING_QUERY:
            case UpdateType::PRE_CHECKOUT_QUERY:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['from']['can_read_all_group_messages'] ?? null;
                break;
            case UpdateType::POLL_ANSWER:
                return self::$updateContent['user']['can_read_all_group_messages'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * userSupportsInlineQueries function
     *
     * @return bool|null True, if the bot supports inline queries. Returned only in [getMe](https://core.telegram.org/bots/api#getme).
     */
    public static function userSupportsInlineQueries()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::INLINE_QUERY:
            case UpdateType::CHOSEN_INLINE_RESULT:
            case UpdateType::CALLBACK_QUERY:
            case UpdateType::SHIPPING_QUERY:
            case UpdateType::PRE_CHECKOUT_QUERY:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['from']['supports_inline_queries'] ?? null;
                break;
            case UpdateType::POLL_ANSWER:
                return self::$updateContent['user']['supports_inline_queries'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }
}
