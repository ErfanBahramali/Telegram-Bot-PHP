<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\ChatMember;

use TelegramBotPHP\Types\User;

/**
 * ChatMemberMember Class
 *
 * Represents a [chat member](https://core.telegram.org/bots/api#chatmember) that has no additional privileges or restrictions.
 *
 * @link https://core.telegram.org/bots/api#chatmembermember
 */
class ChatMemberMember extends ChatMember
{
	/**
	 * The member's status in the chat, always “member”
	 */
	public string $status;

	/**
	 * Information about the user
	 */
	public User $user;

}