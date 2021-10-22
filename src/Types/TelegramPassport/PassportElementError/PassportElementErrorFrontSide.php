<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport\PassportElementError;

/**
 * PassportElementErrorFrontSide Class
 *
 * Represents an issue with the front side of a document. The error is considered resolved when the file with the front side of the document changes.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorfrontside
 */
class PassportElementErrorFrontSide extends PassportElementError
{

	/**
	 * Error source, must be *front_side*
	 */
	public string $source;

	/**
	 * The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
	 */
	public string $type;

	/**
	 * Base64-encoded hash of the file with the front side of the document
	 */
	public string $fileHash;

	/**
	 * Error message
	 */
	public string $message;

}