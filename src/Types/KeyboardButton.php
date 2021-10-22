<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * KeyboardButton Class
 *
 * This object represents one button of the reply keyboard. For simple text buttons *String* can be used instead of this object to specify text of the button. Optional fields *request_contact*, *request_location*, and *request_poll* are mutually exclusive.
 *
 * @link https://core.telegram.org/bots/api#keyboardbutton
 */
class KeyboardButton extends Type
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
            'requestPoll' => KeyboardButtonPollType::class,
        ];
    }

	/**
	 * Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed
	 */
	public string $text;

	/**
	 * [optional] If *True*, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only
	 */
	public bool $requestContact;

	/**
	 * [optional] If *True*, the user's current location will be sent when the button is pressed. Available in private chats only
	 */
	public bool $requestLocation;

	/**
	 * [optional] If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only
	 */
	public KeyboardButtonPollType $requestPoll;

}