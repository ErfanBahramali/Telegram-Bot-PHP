<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\BotCommandScope;

/**
 * BotCommandScopeDefault Class
 *
 * Represents the default [scope](https://core.telegram.org/bots/api#botcommandscope) of bot commands. Default commands are used if no commands with a [narrower scope](https://core.telegram.org/bots/api#determining-list-of-commands) are specified for the user.
 *
 * @link https://core.telegram.org/bots/api#botcommandscopedefault
 */
class BotCommandScopeDefault extends BotCommandScope
{

	/**
	 * Scope type, must be *default*
	 */
	public string $type;

}