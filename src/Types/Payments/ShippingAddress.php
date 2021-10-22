<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\Payments;

use TelegramBotPHP\Type;

/**
 * ShippingAddress Class
 *
 * This object represents a shipping address.
 *
 * @link https://core.telegram.org/bots/api#shippingaddress
 */
class ShippingAddress extends Type
{

	/**
	 * ISO 3166-1 alpha-2 country code
	 */
	public string $countryCode;

	/**
	 * State, if applicable
	 */
	public string $state;

	/**
	 * City
	 */
	public string $city;

	/**
	 * First line for the address
	 */
	public string $streetLine1;

	/**
	 * Second line for the address
	 */
	public string $streetLine2;

	/**
	 * Address post code
	 */
	public string $postCode;

}