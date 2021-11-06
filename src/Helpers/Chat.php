<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Helpers;

use TelegramBotPHP\Constants\UpdateType;

trait Chat
{
    /**
     * getChatId function
     *
     * @return int|null Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     */
    public static function getChatId()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['chat']['id'];
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['chat']['id'];
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getChatType function
     *
     * @return string|null Type of chat, can be either “private”, “group”, “supergroup” or “channel”
     */
    public static function getChatType()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['chat']['type'];
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['chat']['type'];
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getChatTitle function
     *
     * @return string|null Title, for supergroups, channels and group chats
     */
    public static function getChatTitle()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['chat']['title'] ?? null;
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['chat']['title'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getChatUsername function
     *
     * @return string|null Username, for private chats, supergroups and channels if available
     */
    public static function getChatUsername()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['chat']['username'] ?? null;
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['chat']['username'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getChatFirstName function
     *
     * @return string|null First name of the other party in a private chat
     */
    public static function getChatFirstName()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['chat']['first_name'] ?? null;
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['chat']['first_name'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getChatLastName function
     *
     * @return string|null Last name of the other party in a private chat
     */
    public static function getChatLastName()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['chat']['last_name'] ?? null;
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['chat']['last_name'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }
}
