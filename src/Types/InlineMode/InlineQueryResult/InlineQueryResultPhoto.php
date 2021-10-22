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
 * InlineQueryResultPhoto Class
 *
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively, you can use *input_message_content* to send a message with the specified content instead of the photo.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultphoto
 */
class InlineQueryResultPhoto extends InlineQueryResult
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
	 * Type of the result, must be *photo*
	 */
	public string $type;

	/**
	 * Unique identifier for this result, 1-64 bytes
	 */
	public string $id;

	/**
	 * A valid URL of the photo. Photo must be in **jpeg** format. Photo size must not exceed 5MB
	 */
	public string $photoUrl;

	/**
	 * URL of the thumbnail for the photo
	 */
	public string $thumbUrl;

	/**
	 * [optional] Width of the photo
	 */
	public int $photoWidth;

	/**
	 * [optional] Height of the photo
	 */
	public int $photoHeight;

	/**
	 * [optional] Title for the result
	 */
	public string $title;

	/**
	 * [optional] Short description of the result
	 */
	public string $description;

	/**
	 * [optional] Caption of the photo to be sent, 0-1024 characters after entities parsing
	 */
	public string $caption;

	/**
	 * [optional] Mode for parsing entities in the photo caption. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
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
	 * [optional] Content of the message to be sent instead of the photo
	 */
	public InputMessageContent $inputMessageContent;

}