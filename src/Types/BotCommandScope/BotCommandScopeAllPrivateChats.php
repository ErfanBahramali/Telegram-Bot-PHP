<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\BotCommandScope;

/**
 * BotCommandScopeAllPrivateChats Class
 *
 * Represents the [scope](https://core.telegram.org/bots/api#botcommandscope) of bot commands, covering all private chats.
 *
 * @link https://core.telegram.org/bots/api#botcommandscopeallprivatechats
 */
class BotCommandScopeAllPrivateChats extends BotCommandScope
{

	/**
	 * Scope type, must be *all_private_chats*
	 */
	public string $type;

}