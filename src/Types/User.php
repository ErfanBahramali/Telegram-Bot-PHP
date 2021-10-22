<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * User Class
 *
 * This object represents a Telegram user or bot.
 *
 * @link https://core.telegram.org/bots/api#user
 */
class User extends Type
{

	/**
	 * Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
	 */
	public int $id;

	/**
	 * True, if this user is a bot
	 */
	public bool $isBot;

	/**
	 * User's or bot's first name
	 */
	public string $firstName;

	/**
	 * [optional] User's or bot's last name
	 */
	public string $lastName;

	/**
	 * [optional] User's or bot's username
	 */
	public string $username;

	/**
	 * [optional] [IETF language tag](https://en.wikipedia.org/wiki/IETF_language_tag) of the user's language
	 */
	public string $languageCode;

	/**
	 * [optional] True, if the bot can be invited to groups. Returned only in [getMe](https://core.telegram.org/bots/api#getme).
	 */
	public bool $canJoinGroups;

	/**
	 * [optional] True, if [privacy mode](https://core.telegram.org/bots#privacy-mode) is disabled for the bot. Returned only in [getMe](https://core.telegram.org/bots/api#getme).
	 */
	public bool $canReadAllGroupMessages;

	/**
	 * [optional] True, if the bot supports inline queries. Returned only in [getMe](https://core.telegram.org/bots/api#getme).
	 */
	public bool $supportsInlineQueries;

}