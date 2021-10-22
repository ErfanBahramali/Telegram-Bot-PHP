<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * Document Class
 *
 * This object represents a general file (as opposed to [photos](https://core.telegram.org/bots/api#photosize), [voice messages](https://core.telegram.org/bots/api#voice) and [audio files](https://core.telegram.org/bots/api#audio)).
 *
 * @link https://core.telegram.org/bots/api#document
 */
class Document extends Type
{
    /**
     * getTypeVariables function
     * To specify the type of value of Variables
     *
     * @return array
     */
    protected function getTypeVariables()
    {
        return [
            'thumb' => PhotoSize::class,
        ];
    }

	/**
	 * Identifier for this file, which can be used to download or reuse the file
	 */
	public string $fileId;

	/**
	 * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
	 */
	public string $fileUniqueId;

	/**
	 * [optional] Document thumbnail as defined by sender
	 */
	public PhotoSize $thumb;

	/**
	 * [optional] Original filename as defined by sender
	 */
	public string $fileName;

	/**
	 * [optional] MIME type of the file as defined by sender
	 */
	public string $mimeType;

	/**
	 * [optional] File size
	 */
	public int $fileSize;

}