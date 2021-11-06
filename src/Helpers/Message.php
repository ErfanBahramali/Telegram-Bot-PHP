<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Helpers;

use TelegramBotPHP\Constants\UpdateType;

trait Message
{
    /**
     * getMessageId function
     *
     * @return int|null
     */
    public static function getMessageId()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['message_id'];
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['message_id'];
                break;

            default:
                return null;
                break;
        }
    }

    /**
     * getMessageText function
     *
     * @return string|null For text messages, the actual UTF-8 text of the message, 0-4096 characters
     */
    public static function getMessageText()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['text'] ?? null;
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['text'] ?? null;
                break;

            default:
                return null;
                break;
        }
    }

    /**
     * getMessageEditDate function
     *
     * @return int|null Date the message was last edited in Unix time
     */
    public static function getMessageEditDate()
    {
        switch (self::$updateType) {
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['edit_date'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getMessageCaption function
     *
     * @return string|null Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
     */
    public static function getMessageCaption()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['caption'] ?? null;
                break;
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['message']['caption'] ?? null;
                break;

            default:
                return null;
                break;
        }
    }
}
