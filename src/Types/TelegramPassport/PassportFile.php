<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport;

use TelegramBotPHP\Type;

/**
 * PassportFile Class
 *
 * This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 *
 * @link https://core.telegram.org/bots/api#passportfile
 */
class PassportFile extends Type
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
	 * File size
	 */
	public int $fileSize;

	/**
	 * Unix time when the file was uploaded
	 */
	public int $fileDate;

}