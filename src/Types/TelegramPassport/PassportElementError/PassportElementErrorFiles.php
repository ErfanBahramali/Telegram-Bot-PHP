<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport\PassportElementError;

/**
 * PassportElementErrorFiles Class
 *
 * Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrorfiles
 */
class PassportElementErrorFiles extends PassportElementError
{

	/**
	 * Error source, must be *files*
	 */
	public string $source;

	/**
	 * The section of the user's Telegram Passport which has the issue, one of “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
	 */
	public string $type;

	/**
	 * List of base64-encoded file hashes
	 */
	public array $fileHashes;

	/**
	 * Error message
	 */
	public string $message;

}