<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InputMessageContent;

/**
 * InputVenueMessageContent Class
 *
 * Represents the [content](https://core.telegram.org/bots/api#inputmessagecontent) of a venue message to be sent as the result of an inline query.
 *
 * @link https://core.telegram.org/bots/api#inputvenuemessagecontent
 */
class InputVenueMessageContent extends InputMessageContent
{

	/**
	 * Latitude of the venue in degrees
	 */
	public float $latitude;

	/**
	 * Longitude of the venue in degrees
	 */
	public float $longitude;

	/**
	 * Name of the venue
	 */
	public string $title;

	/**
	 * Address of the venue
	 */
	public string $address;

	/**
	 * [optional] Foursquare identifier of the venue, if known
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

}