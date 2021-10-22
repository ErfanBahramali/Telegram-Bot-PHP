<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InlineQueryResult;

use TelegramBotPHP\Types\InlineKeyboardMarkup;
use TelegramBotPHP\Types\InlineMode\InputMessageContent\InputMessageContent;

/**
 * InlineQueryResultContact Class
 *
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use *input_message_content* to send a message with the specified content instead of the contact.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultcontact
 */
class InlineQueryResultContact extends InlineQueryResult
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
            'replyMarkup' => InlineKeyboardMarkup::class,
            'inputMessageContent' => InputMessageContent::class,
        ];
    }

	/**
	 * Type of the result, must be *contact*
	 */
	public string $type;

	/**
	 * Unique identifier for this result, 1-64 Bytes
	 */
	public string $id;

	/**
	 * Contact's phone number
	 */
	public string $phoneNumber;

	/**
	 * Contact's first name
	 */
	public string $firstName;

	/**
	 * [optional] Contact's last name
	 */
	public string $lastName;

	/**
	 * [optional] Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
	 */
	public string $vcard;

	/**
	 * [optional] [Inline keyboard](https://core.telegram.org/bots/api/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
	 */
	public InlineKeyboardMarkup $replyMarkup;

	/**
	 * [optional] Content of the message to be sent instead of the contact
	 */
	public InputMessageContent $inputMessageContent;

	/**
	 * [optional] Url of the thumbnail for the result
	 */
	public string $thumbUrl;

	/**
	 * [optional] Thumbnail width
	 */
	public int $thumbWidth;

	/**
	 * [optional] Thumbnail height
	 */
	public int $thumbHeight;

}