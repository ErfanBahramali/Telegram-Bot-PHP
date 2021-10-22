<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InlineQueryResult;

use TelegramBotPHP\Types\InlineKeyboardMarkup;
use TelegramBotPHP\Types\InlineMode\InputMessageContent\InputMessageContent;
use TelegramBotPHP\Types\MessageEntity;

/**
 * InlineQueryResultMpeg4Gif Class
 *
 * Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can use *input_message_content* to send a message with the specified content instead of the animation.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif
 */
class InlineQueryResultMpeg4Gif extends InlineQueryResult
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
            'replyMarkup' => InlineKeyboardMarkup::class,
            'inputMessageContent' => InputMessageContent::class,
        ];
    }

    /**
     * getTypeArrayVariables function
     * To specify the type of value of arrays Variables
     *
     * @return array
     */
    protected function getTypeArrayVariables()
    {
        return [
            'captionEntities' => MessageEntity::class,
        ];
    }

	/**
	 * Type of the result, must be *mpeg4_gif*
	 */
	public string $type;

	/**
	 * Unique identifier for this result, 1-64 bytes
	 */
	public string $id;

	/**
	 * A valid URL for the MP4 file. File size must not exceed 1MB
	 */
	public string $mpeg4Url;

	/**
	 * [optional] Video width
	 */
	public int $mpeg4Width;

	/**
	 * [optional] Video height
	 */
	public int $mpeg4Height;

	/**
	 * [optional] Video duration
	 */
	public int $mpeg4Duration;

	/**
	 * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
	 */
	public string $thumbUrl;

	/**
	 * [optional] MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
	 */
	public string $thumbMimeType;

	/**
	 * [optional] Title for the result
	 */
	public string $title;

	/**
	 * [optional] Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
	 */
	public string $caption;

	/**
	 * [optional] Mode for parsing entities in the caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
	 */
	public string $parseMode;

	/**
	 * [optional] List of special entities that appear in the caption, which can be specified instead of *parse_mode*
	 */
	public array $captionEntities;

	/**
	 * [optional] [Inline keyboard](https://core.telegram.org/bots/api/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
	 */
	public InlineKeyboardMarkup $replyMarkup;

	/**
	 * [optional] Content of the message to be sent instead of the video animation
	 */
	public InputMessageContent $inputMessageContent;

}