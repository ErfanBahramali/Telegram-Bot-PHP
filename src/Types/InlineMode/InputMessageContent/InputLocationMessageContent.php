<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InputMessageContent;

/**
 * InputLocationMessageContent Class
 *
 * Represents the [content](https://core.telegram.org/bots/api#inputmessagecontent) of a location message to be sent as the result of an inline query.
 *
 * @link https://core.telegram.org/bots/api#inputlocationmessagecontent
 */
class InputLocationMessageContent extends InputMessageContent
{

	/**
	 * Latitude of the location in degrees
	 */
	public float $latitude;

	/**
	 * Longitude of the location in degrees
	 */
	public float $longitude;

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

}