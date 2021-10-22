<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode;

use TelegramBotPHP\Type;
use TelegramBotPHP\Types\Location;
use TelegramBotPHP\Types\User;

/**
 * ChosenInlineResult Class
 *
 * Represents a [result](https://core.telegram.org/bots/api#inlinequeryresult) of an inline query that was chosen by the user and sent to their chat partner.
 *
 * @link https://core.telegram.org/bots/api#choseninlineresult
 */
class ChosenInlineResult extends Type
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
            'from' => User::class,
            'location' => Location::class,
        ];
    }

	/**
	 * The unique identifier for the result that was chosen
	 */
	public string $resultId;

	/**
	 * The user that chose the result
	 */
	public User $from;

	/**
	 * [optional] Sender location, only for bots that require user location
	 */
	public Location $location;

	/**
	 * [optional] Identifier of the sent inline message. Available only if there is an [inline keyboard](https://core.telegram.org/bots/api#inlinekeyboardmarkup) attached to the message. Will be also received in [callback queries](https://core.telegram.org/bots/api#callbackquery) and can be used to [edit](https://core.telegram.org/bots/api#updating-messages) the message.
	 */
	public string $inlineMessageId;

	/**
	 * The query that was used to obtain the result
	 */
	public string $query;

}