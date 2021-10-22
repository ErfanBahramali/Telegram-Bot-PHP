<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * MessageAutoDeleteTimerChanged Class
 *
 * This object represents a service message about a change in auto-delete timer settings.
 *
 * @link https://core.telegram.org/bots/api#messageautodeletetimerchanged
 */
class MessageAutoDeleteTimerChanged extends Type
{

	/**
	 * New auto-delete time for messages in the chat
	 */
	public int $messageAutoDeleteTime;

}