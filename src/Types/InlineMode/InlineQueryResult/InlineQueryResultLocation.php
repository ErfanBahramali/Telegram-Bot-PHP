<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InlineQueryResult;

use TelegramBotPHP\Types\InlineKeyboardMarkup;
use TelegramBotPHP\Types\InlineMode\InputMessageContent\InputMessageContent;

/**
 * InlineQueryResultLocation Class
 *
 * Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use *input_message_content* to send a message with the specified content instead of the location.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultlocation
 */
class InlineQueryResultLocation extends InlineQueryResult
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
	 * Type of the result, must be *location*
	 */
	public string $type;

	/**
	 * Unique identifier for this result, 1-64 Bytes
	 */
	public string $id;

	/**
	 * Location latitude in degrees
	 */
	public float $latitude;

	/**
	 * Location longitude in degrees
	 */
	public float $longitude;

	/**
	 * Location title
	 */
	public string $title;

	/**
	 * [optional] The radius of uncertainty for the location, measured in meters; 0-1500
	 */
	public float $horizontalAccuracy;

	/**
	 * [optional] Period in seconds for which the location can be updated, should be between 60 and 86400.
	 */
	public int $livePeriod;

	/**
	 * [optional] For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
	 */
	public int $heading;

	/**
	 * [optional] For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
	 */
	public int $proximityAlertRadius;

	/**
	 * [optional] [Inline keyboard](https://core.telegram.org/bots/api/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
	 */
	public InlineKeyboardMarkup $replyMarkup;

	/**
	 * [optional] Content of the message to be sent instead of the location
	 */
	public InputMessageContent $inputMessageContent;

	/**
	 * [optional] Url of the thumbnail for the result
	 */
	public string $thumbUrl;

	/**
	 * [optional] Thumbnail width
	 */
	public int $thumbWidth;

	/**
	 * [optional] Thumbnail height
	 */
	public int $thumbHeight;

}