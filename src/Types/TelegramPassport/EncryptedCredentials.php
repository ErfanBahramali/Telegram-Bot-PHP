<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport;

use TelegramBotPHP\Type;

/**
 * EncryptedCredentials Class
 *
 * Contains data required for decrypting and authenticating [EncryptedPassportElement](https://core.telegram.org/bots/api#encryptedpassportelement). See the [Telegram Passport Documentation](https://core.telegram.org/passport#receiving-information) for a complete description of the data decryption and authentication processes.
 *
 * @link https://core.telegram.org/bots/api#encryptedcredentials
 */
class EncryptedCredentials extends Type
{

	/**
	 * Base64-encoded encrypted JSON-serialized data with unique user's payload, data hashes and secrets required for [EncryptedPassportElement](https://core.telegram.org/bots/api#encryptedpassportelement) decryption and authentication
	 */
	public string $data;

	/**
	 * Base64-encoded data hash for data authentication
	 */
	public string $hash;

	/**
	 * Base64-encoded secret, encrypted with the bot's public RSA key, required for data decryption
	 */
	public string $secret;

}