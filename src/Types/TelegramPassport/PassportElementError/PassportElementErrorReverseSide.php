<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport\PassportElementError;

/**
 * PassportElementErrorReverseSide Class
 *
 * Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse side of the document changes.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorreverseside
 */
class PassportElementErrorReverseSide extends PassportElementError
{

	/**
	 * Error source, must be *reverse_side*
	 */
	public string $source;

	/**
	 * The section of the user's Telegram Passport which has the issue, one of “driver_license”, “identity_card”
	 */
	public string $type;

	/**
	 * Base64-encoded hash of the file with the reverse side of the document
	 */
	public string $fileHash;

	/**
	 * Error message
	 */
	public string $message;

}