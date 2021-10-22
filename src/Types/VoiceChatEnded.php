<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * VoiceChatEnded Class
 *
 * This object represents a service message about a voice chat ended in the chat.
 *
 * @link https://core.telegram.org/bots/api#voicechatended
 */
class VoiceChatEnded extends Type
{

	/**
	 * Voice chat duration; in seconds
	 */
	public int $duration;

}