<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * MessageEntity Class
 *
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @link https://core.telegram.org/bots/api#messageentity
 */
class MessageEntity extends Type
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
            'user' => User::class,
        ];
    }

	/**
	 * Type of the entity. Can be “mention” (`@username`), “hashtag” (`#hashtag`), “cashtag” (`$USD`), “bot_command” (`/start@jobs_bot`), “url” (`https://telegram.org`), “email” (`do-not-reply@telegram.org`), “phone_number” (`+1-212-555-0123`), “bold” (**bold text**), “italic” (*italic text*), “underline” (underlined text), “strikethrough” (strikethrough text), “code” (monowidth string), “pre” (monowidth block), “text_link” (for clickable text URLs), “text_mention” (for users [without usernames](https://telegram.org/blog/edit#new-mentions))
	 */
	public string $type;

	/**
	 * Offset in UTF-16 code units to the start of the entity
	 */
	public int $offset;

	/**
	 * Length of the entity in UTF-16 code units
	 */
	public int $length;

	/**
	 * [optional] For “text_link” only, url that will be opened after user taps on the text
	 */
	public string $url;

	/**
	 * [optional] For “text_mention” only, the mentioned user
	 */
	public User $user;

	/**
	 * [optional] For “pre” only, the programming language of the entity text
	 */
	public string $language;

}