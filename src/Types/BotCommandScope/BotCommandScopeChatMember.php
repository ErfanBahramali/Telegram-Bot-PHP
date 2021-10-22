<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\BotCommandScope;

/**
 * BotCommandScopeChatMember Class
 *
 * Represents the [scope](https://core.telegram.org/bots/api#botcommandscope) of bot commands, covering a specific member of a group or supergroup chat.
 *
 * @link https://core.telegram.org/bots/api#botcommandscopechatmember
 */
class BotCommandScopeChatMember extends BotCommandScope
{

	/**
	 * Scope type, must be *chat_member*
	 */
	public string $type;

	/**
	 * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
	 *
	 * @var string|int
	 */
	public $chatId;

	/**
	 * Unique identifier of the target user
	 */
	public int $userId;

}