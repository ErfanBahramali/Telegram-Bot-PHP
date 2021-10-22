<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\ChatMember;

use TelegramBotPHP\Types\User;

/**
 * ChatMemberLeft Class
 *
 * Represents a [chat member](https://core.telegram.org/bots/api#chatmember) that isn't currently a member of the chat, but may join it themselves.
 *
 * @link https://core.telegram.org/bots/api#chatmemberleft
 */
class ChatMemberLeft extends ChatMember
{
	/**
	 * The member's status in the chat, always “left”
	 */
	public string $status;

	/**
	 * Information about the user
	 */
	public User $user;

}