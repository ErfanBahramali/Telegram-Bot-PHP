<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * Voice Class
 *
 * This object represents a voice note.
 *
 * @link https://core.telegram.org/bots/api#voice
 */
class Voice extends Type
{

	/**
	 * Identifier for this file, which can be used to download or reuse the file
	 */
	public string $fileId;

	/**
	 * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
	 */
	public string $fileUniqueId;

	/**
	 * Duration of the audio in seconds as defined by sender
	 */
	public int $duration;

	/**
	 * [optional] MIME type of the file as defined by sender
	 */
	public string $mimeType;

	/**
	 * [optional] File size
	 */
	public int $fileSize;

}