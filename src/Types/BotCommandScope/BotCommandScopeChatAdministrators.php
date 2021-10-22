<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\BotCommandScope;

/**
 * BotCommandScopeChatAdministrators Class
 *
 * Represents the [scope](https://core.telegram.org/bots/api#botcommandscope) of bot commands, covering all administrators of a specific group or supergroup chat.
 *
 * @link https://core.telegram.org/bots/api#botcommandscopechatadministrators
 */
class BotCommandScopeChatAdministrators extends BotCommandScope
{

	/**
	 * Scope type, must be *chat_administrators*
	 */
	public string $type;

	/**
	 * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
	 *
	 * @var string|int
	 */
	public $chatId;

}