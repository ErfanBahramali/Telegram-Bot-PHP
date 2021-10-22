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
 * InlineQueryResultVideo Class
 *
 * Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use *input_message_content* to send a message with the specified content instead of the video.If an InlineQueryResultVideo message contains an embedded video (e.g., YouTube), you **must** replace its content using *input_message_content*.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultvideo
 */
class InlineQueryResultVideo extends InlineQueryResult
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
	 * Type of the result, must be *video*
	 */
	public string $type;

	/**
	 * Unique identifier for this result, 1-64 bytes
	 */
	public string $id;

	/**
	 * A valid URL for the embedded video player or video file
	 */
	public string $videoUrl;

	/**
	 * Mime type of the content of video url, “text/html” or “video/mp4”
	 */
	public string $mimeType;

	/**
	 * URL of the thumbnail (jpeg only) for the video
	 */
	public string $thumbUrl;

	/**
	 * Title for the result
	 */
	public string $title;

	/**
	 * [optional] Caption of the video to be sent, 0-1024 characters after entities parsing
	 */
	public string $caption;

	/**
	 * [optional] Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
	 */
	public string $parseMode;

	/**
	 * [optional] List of special entities that appear in the caption, which can be specified instead of *parse_mode*
	 */
	public array $captionEntities;

	/**
	 * [optional] Video width
	 */
	public int $videoWidth;

	/**
	 * [optional] Video height
	 */
	public int $videoHeight;

	/**
	 * [optional] Video duration in seconds
	 */
	public int $videoDuration;

	/**
	 * [optional] Short description of the result
	 */
	public string $description;

	/**
	 * [optional] [Inline keyboard](https://core.telegram.org/bots/api/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
	 */
	public InlineKeyboardMarkup $replyMarkup;

	/**
	 * [optional] Content of the message to be sent instead of the video. This field is **required** if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
	 */
	public InputMessageContent $inputMessageContent;

}