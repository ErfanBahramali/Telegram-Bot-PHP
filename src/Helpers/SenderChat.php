<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Helpers;

use TelegramBotPHP\Constants\UpdateType;

trait SenderChat
{
    /**
     * getSenderChatId function
     *
     * @return int|null Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public static function getSenderChatId()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['sender_chat']['id'];
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['sender_chat']['id'];
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSenderChatType function
     *
     * @return string|null Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     */
    public static function getSenderChatType()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['sender_chat']['type'];
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['sender_chat']['type'];
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSenderChatTitle function
     *
     * @return string|null Title, for supergroups, channels and group chats
     */
    public static function getSenderChatTitle()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['sender_chat']['title'] ?? null;
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['sender_chat']['title'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSenderChatUsername function
     *
     * @return string|null Username, for private chats, supergroups and channels if available
     */
    public static function getSenderChatUsername()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['sender_chat']['username'] ?? null;
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['sender_chat']['username'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSenderChatFirstName function
     *
     * @return string|null First name of the other party in a private chat
     */
    public static function getSenderChatFirstName()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['sender_chat']['first_name'] ?? null;
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['sender_chat']['first_name'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSenderChatLastName function
     *
     * @return string|null Last name of the other party in a private chat
     */
    public static function getSenderChatLastName()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['sender_chat']['last_name'] ?? null;
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['sender_chat']['last_name'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }
}
