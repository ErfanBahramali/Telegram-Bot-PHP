<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InputMessageContent;

/**
 * InputContactMessageContent Class
 *
 * Represents the [content](https://core.telegram.org/bots/api#inputmessagecontent) of a contact message to be sent as the result of an inline query.
 *
 * @link https://core.telegram.org/bots/api#inputcontactmessagecontent
 */
class InputContactMessageContent extends InputMessageContent
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
	 * [optional] Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
	 */
	public string $vcard;

}