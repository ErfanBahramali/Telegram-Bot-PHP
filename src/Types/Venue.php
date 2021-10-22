<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * Venue Class
 *
 * This object represents a venue.
 *
 * @link https://core.telegram.org/bots/api#venue
 */
class Venue extends Type
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
            'location' => Location::class,
        ];
    }

	/**
	 * Venue location. Can't be a live location
	 */
	public Location $location;

	/**
	 * Name of the venue
	 */
	public string $title;

	/**
	 * Address of the venue
	 */
	public string $address;

	/**
	 * [optional] Foursquare identifier of the venue
	 */
	public string $foursquareId;

	/**
	 * [optional] Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
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