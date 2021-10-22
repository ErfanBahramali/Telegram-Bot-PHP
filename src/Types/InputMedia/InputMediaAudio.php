<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InputMedia;

use TelegramBotPHP\Types\InputFile;

/**
 * InputMediaAudio Class
 *
 * Represents an audio file to be treated as music to be sent.
 *
 * @link https://core.telegram.org/bots/api#inputmediaaudio
 */
class InputMediaAudio extends InputMedia
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
            'thumb' => InputFile::class,
        ];
    }

	/**
	 * Type of the result, must be *audio*
	 */
	public string $type;

	/**
	 * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. [More info on Sending Files »](https://core.telegram.org/bots/api#sending-files)
	 */
	public string $media;

	/**
	 * [optional] Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. [More info on Sending Files »](https://core.telegram.org/bots/api#sending-files)
	 *
	 * @var InputFile|string
	 */
	public $thumb;

	/**
	 * [optional] Caption of the audio to be sent, 0-1024 characters after entities parsing
	 */
	public string $caption;

	/**
	 * [optional] Mode for parsing entities in the audio caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
	 */
	public string $parseMode;

	/**
	 * [optional] List of special entities that appear in the caption, which can be specified instead of *parse_mode*
	 */
	public array $captionEntities;

	/**
	 * [optional] Duration of the audio in seconds
	 */
	public int $duration;

	/**
	 * [optional] Performer of the audio
	 */
	public string $performer;

	/**
	 * [optional] Title of the audio
	 */
	public string $title;

}