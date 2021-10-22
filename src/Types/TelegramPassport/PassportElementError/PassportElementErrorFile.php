<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport\PassportElementError;

/**
 * PassportElementErrorFile Class
 *
 * Represents an issue with a document scan. The error is considered resolved when the file with the document scan changes.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorfile
 */
class PassportElementErrorFile extends PassportElementError
{

	/**
	 * Error source, must be *file*
	 */
	public string $source;

	/**
	 * The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
	 */
	public string $type;

	/**
	 * Base64-encoded file hash
	 */
	public string $fileHash;

	/**
	 * Error message
	 */
	public string $message;

}