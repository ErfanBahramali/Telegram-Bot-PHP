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
     * Pdo database config or config files path,
     * If empty, they will be placed in the main project folder
     * 
     * @var \PDO|string
     */
    public $logDatabase = '';

    /**
     * log dafault database table name
     */
    public string $logDatabaseTableName = 'logs';


    /**
     * log dafault database column name
     */
    public string $logDatabaseColumnName = 'data';

    /**
     * log dafault file name
     */
    public string $logDatabaseDefaultFileName = 'bot.log';

    /**
     * Log updates
     */
    public bool $logUpdate = true;

    /**
     * Log requests
     */
    public bool $logRequest = true;

    /**
     * Log response
     */
    public bool $logResponse = true;

    /**
     * Log errors
     */
    public bool $logError = true;

    // -------------- log --------------

    public function __construct()
    {
        $this->botApiServerUrl = MainConfig::$botApiServerUrl;
        $this->convertToObject = MainConfig::$convertToObject;
        $this->autoUseWebhook = MainConfig::$autoUseWebhook;
        $this->autofillParameters = MainConfig::$autofillParameters;
        $this->throwOnError = MainConfig::$throwOnError;
        $this->logDatabase = MainConfig::$logDatabase;
        $this->logDatabaseTableName = MainConfig::$logDatabaseTableName;
        $this->logDatabaseColumnName = MainConfig::$logDatabaseColumnName;
        $this->logDatabaseDefaultFileName = MainConfig::$logDatabaseDefaultFileName;
        $this->logUpdate = MainConfig::$logUpdate;
        $this->logRequest = MainConfig::$logRequest;
        $this->logResponse = MainConfig::$logResponse;
        $this->logError = MainConfig::$logError;
    }
}
