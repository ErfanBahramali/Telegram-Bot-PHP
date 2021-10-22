<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InlineQueryResult;

use TelegramBotPHP\Types\InlineKeyboardMarkup;
use TelegramBotPHP\Types\InlineMode\InputMessageContent\InputMessageContent;

/**
 * InlineQueryResultVenue Class
 *
 * Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use *input_message_content* to send a message with the specified content instead of the venue.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultvenue
 */
class InlineQueryResultVenue extends InlineQueryResult
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
	 * Type of the result, must be *venue*
	 */
	public string $type;

	/**
	 * Unique identifier for this result, 1-64 Bytes
	 */
	public string $id;

	/**
	 * Latitude of the venue location in degrees
	 */
	public float $latitude;

	/**
	 * Longitude of the venue location in degrees
	 */
	public float $longitude;

	/**
	 * Title of the venue
	 */
	public string $title;

	/**
	 * Address of the venue
	 */
	public string $address;

	/**
	 * [optional] Foursquare identifier of the venue if known
	 */
	public string $foursquareId;

	/**
	 * [optional] Foursquare type of the venue, if known. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
	 */
	public string $foursquareType;

	/**
	 * [optional] Google Places identifier of the venue
	 */
	public string $googlePlaceId;

	/**
	 * [optional] Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
	 */
	public string $googlePlaceType;

	/**
	 * [optional] [Inline keyboard](https://core.telegram.org/bots/api/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
	 */
	public InlineKeyboardMarkup $replyMarkup;

	/**
	 * [optional] Content of the message to be sent instead of the venue
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