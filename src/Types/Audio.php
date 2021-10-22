<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * Audio Class
 *
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * @link https://core.telegram.org/bots/api#audio
 */
class Audio extends Type
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
	 * Duration of the audio in seconds as defined by sender
	 */
	public int $duration;

	/**
	 * [optional] Performer of the audio as defined by sender or by audio tags
	 */
	public string $performer;

	/**
	 * [optional] Title of the audio as defined by sender or by audio tags
	 */
	public string $title;

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

	/**
	 * [optional] Thumbnail of the album cover to which the music file belongs
	 */
	public PhotoSize $thumb;

}