<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport\PassportElementError;

/**
 * PassportElementErrorDataField Class
 *
 * Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 *
 * @link https://core.telegram.org/bots/api#passportelementerrordatafield
 */
class PassportElementErrorDataField extends PassportElementError
{

	/**
	 * Error source, must be *data*
	 */
	public string $source;

	/**
	 * The section of the user's Telegram Passport which has the error, one of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”
	 */
	public string $type;

	/**
	 * Name of the data field which has the error
	 */
	public string $fieldName;

	/**
	 * Base64-encoded data hash
	 */
	public string $dataHash;

	/**
	 * Error message
	 */
	public string $message;

}