<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * File Class
 *
 * This object represents a file ready to be downloaded. The file can be downloaded via the link `https://api.telegram.org/file/bot<token>/<file_path>`. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling [getFile](https://core.telegram.org/bots/api#getfile).Maximum file size to download is 20 MBMaximum file size to download is 20 MB
 *
 * @link https://core.telegram.org/bots/api#file
 */
class File extends Type
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
	 * [optional] File size, if known
	 */
	public int $fileSize;

	/**
	 * [optional] File path. Use `https://api.telegram.org/file/bot<token>/<file_path>` to get the file.
	 */
	public string $filePath;

}