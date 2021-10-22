<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * MessageId Class
 *
 * This object represents a unique message identifier.
 *
 * @link https://core.telegram.org/bots/api#messageid
 */
class MessageId extends Type
{

	/**
	 * Unique message identifier
	 */
	public int $messageId;

}