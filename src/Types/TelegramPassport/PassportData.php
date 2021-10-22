<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport;

use TelegramBotPHP\Type;

/**
 * PassportData Class
 *
 * Contains information about Telegram Passport data shared with the bot by the user.
 *
 * @link https://core.telegram.org/bots/api#passportdata
 */
class PassportData extends Type
{
    /**
     * getTypeVariables function
     * To specify the type of value of Variables
     *
     * @return array
     */
    protected function getTypeVariables()
    {
        return [
            'credentials' => EncryptedCredentials::class,
        ];
    }

    /**
     * getTypeArrayVariables function
     * To specify the type of value of arrays Variables
     *
     * @return array
     */
    protected function getTypeArrayVariables()
    {
        return [
            'data' => EncryptedPassportElement::class,
        ];
    }

	/**
	 * Array with information about documents and other Telegram Passport elements that was shared with the bot
	 */
	public array $data;

	/**
	 * Encrypted credentials required to decrypt the data
	 */
	public EncryptedCredentials $credentials;

}