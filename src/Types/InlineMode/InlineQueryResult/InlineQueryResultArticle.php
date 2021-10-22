<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InlineQueryResult;

use TelegramBotPHP\Types\InlineKeyboardMarkup;
use TelegramBotPHP\Types\InlineMode\InputMessageContent\InputMessageContent;

/**
 * InlineQueryResultArticle Class
 *
 * Represents a link to an article or web page.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresultarticle
 */
class InlineQueryResultArticle extends InlineQueryResult
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
            'inputMessageContent' => InputMessageContent::class,
            'replyMarkup' => InlineKeyboardMarkup::class,
        ];
    }

	/**
	 * Type of the result, must be *article*
	 */
	public string $type;

	/**
	 * Unique identifier for this result, 1-64 Bytes
	 */
	public string $id;

	/**
	 * Title of the result
	 */
	public string $title;

	/**
	 * Content of the message to be sent
	 */
	public InputMessageContent $inputMessageContent;

	/**
	 * [optional] [Inline keyboard](https://core.telegram.org/bots/api/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
	 */
	public InlineKeyboardMarkup $replyMarkup;

	/**
	 * [optional] URL of the result
	 */
	public string $url;

	/**
	 * [optional] Pass *True*, if you don't want the URL to be shown in the message
	 */
	public bool $hideUrl;

	/**
	 * [optional] Short description of the result
	 */
	public string $description;

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