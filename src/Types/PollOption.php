<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * PollOption Class
 *
 * This object contains information about one answer option in a poll.
 *
 * @link https://core.telegram.org/bots/api#polloption
 */
class PollOption extends Type
{

	/**
	 * Option text, 1-100 characters
	 */
	public string $text;

	/**
	 * Number of users that voted for this option
	 */
	public int $voterCount;

}