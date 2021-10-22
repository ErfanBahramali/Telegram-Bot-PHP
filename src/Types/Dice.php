<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * Dice Class
 *
 * This object represents an animated emoji that displays a random value.
 *
 * @link https://core.telegram.org/bots/api#dice
 */
class Dice extends Type
{

	/**
	 * Emoji on which the dice throw animation is based
	 */
	public string $emoji;

	/**
	 * Value of the dice, 1-6 for “![🎲](https://telegram.org/img/emoji/40/F09F8EB2.png "🎲")”, “![🎯](https://telegram.org/img/emoji/40/F09F8EAF.png "🎯")” and “![🎳](https://telegram.org/img/emoji/40/F09F8EB3.png "🎳")” base emoji, 1-5 for “![🏀](https://telegram.org/img/emoji/40/F09F8F80.png "🏀")” and “![⚽](https://telegram.org/img/emoji/40/E29ABD.png "⚽")” base emoji, 1-64 for “![🎰](https://telegram.org/img/emoji/40/F09F8EB0.png "🎰")” base emoji
	 */
	public int $value;

}