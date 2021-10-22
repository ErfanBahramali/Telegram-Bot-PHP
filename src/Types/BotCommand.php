<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * BotCommand Class
 *
 * This object represents a bot command.
 *
 * @link https://core.telegram.org/bots/api#botcommand
 */
class BotCommand extends Type
{

	/**
	 * Text of the command, 1-32 characters. Can contain only lowercase English letters, digits and underscores.
	 */
	public string $command;

	/**
	 * Description of the command, 3-256 characters.
	 */
	public string $description;

}