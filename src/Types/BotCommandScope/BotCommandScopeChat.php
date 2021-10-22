<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\BotCommandScope;

/**
 * BotCommandScopeChat Class
 *
 * Represents the [scope](https://core.telegram.org/bots/api#botcommandscope) of bot commands, covering a specific chat.
 *
 * @link https://core.telegram.org/bots/api#botcommandscopechat
 */
class BotCommandScopeChat extends BotCommandScope
{

	/**
	 * Scope type, must be *chat*
	 */
	public string $type;

	/**
	 * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
	 *
	 * @var string|int
	 */
	public $chatId;

}