<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * ChatPhoto Class
 *
 * This object represents a chat photo.
 *
 * @link https://core.telegram.org/bots/api#chatphoto
 */
class ChatPhoto extends Type
{

	/**
	 * File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
	 */
	public string $smallFileId;

	/**
	 * Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
	 */
	public string $smallFileUniqueId;

	/**
	 * File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
	 */
	public string $bigFileId;

	/**
	 * Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
	 */
	public string $bigFileUniqueId;

}