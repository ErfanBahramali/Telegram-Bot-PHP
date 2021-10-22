<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InputMessageContent;

use TelegramBotPHP\Types\MessageEntity;

/**
 * InputTextMessageContent Class
 *
 * Represents the [content](https://core.telegram.org/bots/api#inputmessagecontent) of a text message to be sent as the result of an inline query.
 *
 * @link https://core.telegram.org/bots/api#inputtextmessagecontent
 */
class InputTextMessageContent extends InputMessageContent
{
    /**
     * getTypeArrayVariables function
     * To specify the type of value of arrays Variables
     *
     * @return array
     */
    protected function getTypeArrayVariables()
    {
        return [
            'entities' => MessageEntity::class,
        ];
    }

	/**
	 * Text of the message to be sent, 1-4096 characters
	 */
	public string $messageText;

	/**
	 * [optional] Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api#formatting-options) for more details.
	 */
	public string $parseMode;

	/**
	 * [optional] List of special entities that appear in message text, which can be specified instead of *parse_mode*
	 */
	public array $entities;

	/**
	 * [optional] Disables link previews for links in the sent message
	 */
	public bool $disableWebPagePreview;

}