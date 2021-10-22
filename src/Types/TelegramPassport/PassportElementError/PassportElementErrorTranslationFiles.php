<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport\PassportElementError;

/**
 * PassportElementErrorTranslationFiles Class
 *
 * Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrortranslationfiles
 */
class PassportElementErrorTranslationFiles extends PassportElementError
{

	/**
	 * Error source, must be *translation_files*
	 */
	public string $source;

	/**
	 * Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”
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