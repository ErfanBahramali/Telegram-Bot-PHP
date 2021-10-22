<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * ChatLocation Class
 *
 * Represents a location to which a chat is connected.
 *
 * @link https://core.telegram.org/bots/api#chatlocation
 */
class ChatLocation extends Type
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
            'location' => Location::class,
        ];
    }

	/**
	 * The location to which the supergroup is connected. Can't be a live location.
	 */
	public Location $location;

	/**
	 * Location address; 1-64 characters, as defined by the chat owner
	 */
	public string $address;

}