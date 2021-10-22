<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * VoiceChatScheduled Class
 *
 * This object represents a service message about a voice chat scheduled in the chat.
 *
 * @link https://core.telegram.org/bots/api#voicechatscheduled
 */
class VoiceChatScheduled extends Type
{

	/**
	 * Point in time (Unix timestamp) when the voice chat is supposed to be started by a chat administrator
	 */
	public int $startDate;

}