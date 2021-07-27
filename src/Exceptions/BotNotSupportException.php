<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Exceptions;

/**
 * Thrown when Feature not support
 */
class BotNotSupportException extends BotException
{
    /**
     * NotSupportException constructor
     */
    public function __construct()
    {
        parent::__construct('This feature is not supported in this version');
    }
}
