<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport\PassportElementError;

/**
 * PassportElementErrorUnspecified Class
 *
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorunspecified
 */
class PassportElementErrorUnspecified extends PassportElementError
{

	/**
	 * Error source, must be *unspecified*
	 */
	public string $source;

	/**
	 * Type of element of the user's Telegram Passport which has the issue
	 */
	public string $type;

	/**
	 * Base64-encoded element hash
	 */
	public string $elementHash;

	/**
	 * Error message
	 */
	public string $message;

}