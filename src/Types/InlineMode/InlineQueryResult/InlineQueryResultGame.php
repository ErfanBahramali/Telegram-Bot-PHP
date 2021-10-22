<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InlineQueryResult;

use TelegramBotPHP\Types\InlineKeyboardMarkup;

/**
 * InlineQueryResultGame Class
 *
 * Represents a [Game](https://core.telegram.org/bots/api#games).
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultgame
 */
class InlineQueryResultGame extends InlineQueryResult
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
			'replyMarkup' => InlineKeyboardMarkup::class,
		];
	}

	/**
	 * Type of the result, must be *game*
	 */
	public string $type;

	/**
	 * Unique identifier for this result, 1-64 bytes
	 */
	public string $id;

	/**
	 * Short name of the game
	 */
	public string $gameShortName;

	/**
	 * [optional] [Inline keyboard](https://core.telegram.org/bots/api/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
	 */
	public InlineKeyboardMarkup $replyMarkup;
}
