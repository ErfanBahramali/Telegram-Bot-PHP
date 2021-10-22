<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport;

use TelegramBotPHP\Type;

/**
 * EncryptedPassportElement Class
 *
 * Contains information about documents or other Telegram Passport elements shared with the bot by the user.
 *
 * @link https://core.telegram.org/bots/api#encryptedpassportelement
 */
class EncryptedPassportElement extends Type
{
    /**
     * getTypeVariables function
     * To specify the type of value of Variables
     *
     * @return array
     */
    protected function getTypeVariables()
    {
        return [
            'frontSide' => PassportFile::class,
            'reverseSide' => PassportFile::class,
            'selfie' => PassportFile::class,
        ];
    }

    /**
     * getTypeArrayVariables function
     * To specify the type of value of arrays Variables
     *
     * @return array
     */
    protected function getTypeArrayVariables()
    {
        return [
            'files' => PassportFile::class,
            'translation' => PassportFile::class,
        ];
    }

	/**
	 * Element type. One of “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport”, “address”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration”, “temporary_registration”, “phone_number”, “email”.
	 */
	public string $type;

	/**
	 * [optional] Base64-encoded encrypted Telegram Passport element data provided by the user, available for “personal_details”, “passport”, “driver_license”, “identity_card”, “internal_passport” and “address” types. Can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api#encryptedcredentials).
	 */
	public string $data;

	/**
	 * [optional] User's verified phone number, available only for “phone_number” type
	 */
	public string $phoneNumber;

	/**
	 * [optional] User's verified email address, available only for “email” type
	 */
	public string $email;

	/**
	 * [optional] Array of encrypted files with documents provided by the user, available for “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api#encryptedcredentials).
	 */
	public array $files;

	/**
	 * [optional] Encrypted file with the front side of the document, provided by the user. Available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api#encryptedcredentials).
	 */
	public PassportFile $frontSide;

	/**
	 * [optional] Encrypted file with the reverse side of the document, provided by the user. Available for “driver_license” and “identity_card”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api#encryptedcredentials).
	 */
	public PassportFile $reverseSide;

	/**
	 * [optional] Encrypted file with the selfie of the user holding a document, provided by the user; available for “passport”, “driver_license”, “identity_card” and “internal_passport”. The file can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api#encryptedcredentials).
	 */
	public PassportFile $selfie;

	/**
	 * [optional] Array of encrypted files with translated versions of documents provided by the user. Available if requested for “passport”, “driver_license”, “identity_card”, “internal_passport”, “utility_bill”, “bank_statement”, “rental_agreement”, “passport_registration” and “temporary_registration” types. Files can be decrypted and verified using the accompanying [EncryptedCredentials](https://core.telegram.org/bots/api#encryptedcredentials).
	 */
	public array $translation;

	/**
	 * Base64-encoded element hash for using in [PassportElementErrorUnspecified](https://core.telegram.org/bots/api#passportelementerrorunspecified)
	 */
	public string $hash;

}