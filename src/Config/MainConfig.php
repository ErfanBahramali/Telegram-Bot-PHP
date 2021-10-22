<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Config;

class MainConfig
{
    /**
     * bot api server url
     * @link https://core.telegram.org/bots/api#using-a-local-bot-api-server
     */
    public static string $botApiServerUrl = 'https://api.telegram.org/bot';

    /**
     * bot api server file url
     * @link https://core.telegram.org/bots/api#file
     */
    public static string $botApiServerFileUrl = 'https://api.telegram.org/file/bot';

    /**
     * auto convert update and response to class For easier access
     */
    public static bool $convertToObject = true;

    /**
     * Use webhook by default
     * if use getUpdates Set this variable to false
     */
    public static bool $autoUseWebhook = true;

    /**
     * In certain methods, some parameters are filled in automatically
     *
For example, in `sendMessage` method,

You can, not set "chat_id",

And the "chat_id" of the sender is considered automatic.
     */
    public static bool $autofillParameters = true;

    /**
     * Stop the program when it encounters an error
     */
    public static bool $throwOnError = true;

    // -------------- log --------------

    /**
     * call on log
     * @var callback
     */
    public static $onLog = false;

    /**
     * call on log update
     * @var callback
     */
    public static $onLogUpdate = false;

    /**
     * call on log request and response
     * @var callback
     */
    public static $onLogRequestAndResponse = false;

    /**
     * call on log error
     * @var callback
     */
    public static $onLogError = false;

    // -------------- log --------------
}
