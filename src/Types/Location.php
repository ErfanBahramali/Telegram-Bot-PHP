<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * Location Class
 *
 * This object represents a point on the map.
 *
 * @link https://core.telegram.org/bots/api#location
 */
class Location extends Type
{

	/**
	 * Longitude as defined by sender
	 */
	public float $longitude;

	/**
	 * Latitude as defined by sender
	 */
	public float $latitude;

	/**
	 * [optional] The radius of uncertainty for the location, measured in meters; 0-1500
	 */
	public float $horizontalAccuracy;

	/**
	 * [optional] Time relative to the message sending date, during which the location can be updated, in seconds. For active live locations only.
	 */
	public int $livePeriod;

	/**
	 * [optional] The direction in which user is moving, in degrees; 1-360. For active live locations only.
	 */
	public int $heading;

	/**
	 * [optional] Maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
	 */
	public int $proximityAlertRadius;

}