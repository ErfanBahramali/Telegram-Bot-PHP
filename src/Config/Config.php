<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Config;

class Config
{
    /**
     * bot api server url
     * @link https://core.telegram.org/bots/api#using-a-local-bot-api-server
     */
    public string $botApiServerUrl = 'https://api.telegram.org/bot';

    /**
     * bot api server file url
     * @link https://core.telegram.org/bots/api#file
     */
    public string $botApiServerFileUrl = 'https://api.telegram.org/file/bot';

    /**
     * auto convert update and response to class For easier access
     */
    public bool $convertToObject = true;

    /**
     * Use webhook by default
     * if use getUpdates Set this variable to false
     */
    public bool $autoUseWebhook = true;

    /**
     * In certain methods, some parameters are filled in automatically
     *
For example, in `sendMessage` method,

You can, not set "chat_id",

And the "chat_id" of the sender is considered automatic.
     */
    public bool $autofillParameters = true;

    /**
     * Stop the program when it encounters an error
     */
    public bool $throwOnError = true;

    // -------------- log --------------

    /**
     * call on log
     * @var callback
     */
    public $onLog = false;

    /**
     * call on log update
     * @var callback
     */
    public $onLogUpdate = false;

    /**
     * call on log request and response
     * @var callback
     */
    public $onLogRequestAndResponse = false;

    /**
     * call on log error
     * @var callback
     */
    public $onLogError = false;

    // -------------- log --------------

    public function __construct()
    {
        $this->botApiServerUrl = MainConfig::$botApiServerUrl;

        $this->botApiServerFileUrl = MainConfig::$botApiServerFileUrl;

        $this->convertToObject = MainConfig::$convertToObject;

        $this->autoUseWebhook = MainConfig::$autoUseWebhook;

        $this->autofillParameters = MainConfig::$autofillParameters;

        $this->throwOnError = MainConfig::$throwOnError;


        // -------------- log --------------

        $this->onLog = MainConfig::$onLog;

        $this->onLogUpdate = MainConfig::$onLogUpdate;

        $this->onLogRequestAndResponse = MainConfig::$onLogRequestAndResponse;

        $this->onLogError = MainConfig::$onLogError;

        // -------------- log --------------
    }
}
