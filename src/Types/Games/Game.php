<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\Games;

use TelegramBotPHP\Type;
use TelegramBotPHP\Types\Animation;
use TelegramBotPHP\Types\MessageEntity;
use TelegramBotPHP\Types\PhotoSize;

/**
 * Game Class
 *
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 *
 * @link https://core.telegram.org/bots/api#game
 */
class Game extends Type
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
            'animation' => Animation::class,
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
            'photo' => PhotoSize::class,
            'textEntities' => MessageEntity::class,
        ];
    }

	/**
	 * Title of the game
	 */
	public string $title;

	/**
	 * Description of the game
	 */
	public string $description;

	/**
	 * Photo that will be displayed in the game message in chats.
	 */
	public array $photo;

	/**
	 * [optional] Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls [setGameScore](https://core.telegram.org/bots/api#setgamescore), or manually edited using [editMessageText](https://core.telegram.org/bots/api#editmessagetext). 0-4096 characters.
	 */
	public string $text;

	/**
	 * [optional] Special entities that appear in *text*, such as usernames, URLs, bot commands, etc.
	 */
	public array $textEntities;

	/**
	 * [optional] Animation that will be displayed in the game message in chats. Upload via [BotFather](https://t.me/botfather)
	 */
	public Animation $animation;

}