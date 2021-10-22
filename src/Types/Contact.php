<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * Contact Class
 *
 * This object represents a phone contact.
 *
 * @link https://core.telegram.org/bots/api#contact
 */
class Contact extends Type
{

	/**
	 * Contact's phone number
	 */
	public string $phoneNumber;

	/**
	 * Contact's first name
	 */
	public string $firstName;

	/**
	 * [optional] Contact's last name
	 */
	public string $lastName;

	/**
	 * [optional] Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
	 */
	public int $userId;

	/**
	 * [optional] Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard)
	 */
	public string $vcard;

}