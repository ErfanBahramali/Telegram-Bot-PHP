<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport\PassportElementError;

/**
 * PassportElementErrorSelfie Class
 *
 * Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorselfie
 */
class PassportElementErrorSelfie extends PassportElementError
{

	/**
	 * Error source, must be *selfie*
	 */
	public string $source;

	/**
	 * The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”
	 */
	public string $type;

	/**
	 * Base64-encoded hash of the file with the selfie
	 */
	public string $fileHash;

	/**
	 * Error message
	 */
	public string $message;

}