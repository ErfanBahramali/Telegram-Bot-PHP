<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * VideoNote Class
 *
 * This object represents a [video message](https://telegram.org/blog/video-messages-and-telescope) (available in Telegram apps as of [v.4.0](https://telegram.org/blog/video-messages-and-telescope)).
 *
 * @link https://core.telegram.org/bots/api#videonote
 */
class VideoNote extends Type
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
	 * Video width and height (diameter of the video message) as defined by sender
	 */
	public int $length;

	/**
	 * Duration of the video in seconds as defined by sender
	 */
	public int $duration;

	/**
	 * [optional] Video thumbnail
	 */
	public PhotoSize $thumb;

	/**
	 * [optional] File size
	 */
	public int $fileSize;

}