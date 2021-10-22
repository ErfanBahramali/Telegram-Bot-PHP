<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * Video Class
 *
 * This object represents a video file.
 *
 * @link https://core.telegram.org/bots/api#video
 */
class Video extends Type
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
	 * Video width as defined by sender
	 */
	public int $width;

	/**
	 * Video height as defined by sender
	 */
	public int $height;

	/**
	 * Duration of the video in seconds as defined by sender
	 */
	public int $duration;

	/**
	 * [optional] Video thumbnail
	 */
	public PhotoSize $thumb;

	/**
	 * [optional] Original filename as defined by sender
	 */
	public string $fileName;

	/**
	 * [optional] Mime type of a file as defined by sender
	 */
	public string $mimeType;

	/**
	 * [optional] File size
	 */
	public int $fileSize;

}