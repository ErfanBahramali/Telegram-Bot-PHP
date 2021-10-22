<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * PhotoSize Class
 *
 * This object represents one size of a photo or a [file](https://core.telegram.org/bots/api#document) / [sticker](https://core.telegram.org/bots/api#sticker) thumbnail.
 *
 * @link https://core.telegram.org/bots/api#photosize
 */
class PhotoSize extends Type
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
	 * Photo width
	 */
	public int $width;

	/**
	 * Photo height
	 */
	public int $height;

	/**
	 * [optional] File size
	 */
	public int $fileSize;

}