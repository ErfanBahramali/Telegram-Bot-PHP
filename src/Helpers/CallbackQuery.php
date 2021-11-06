<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Helpers;

use TelegramBotPHP\Constants\UpdateType;

trait CallbackQuery
{
    /**
     * getCallbackQueryData function
     *
     * @return string|null Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
     */
    public static function getCallbackQueryData()
    {
        switch (self::$updateType) {
            case UpdateType::CALLBACK_QUERY:
                return self::$updateContent['data'];
                break;
            default:
                return null;
                break;
        }
    }
}
