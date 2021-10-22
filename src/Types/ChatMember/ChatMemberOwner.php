<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\ChatMember;

use TelegramBotPHP\Types\User;

/**
 * ChatMemberOwner Class
 *
 * Represents a [chat member](https://core.telegram.org/bots/api#chatmember) that owns the chat and has all administrator privileges.
 *
 * @link https://core.telegram.org/bots/api#chatmemberowner
 */
class ChatMemberOwner extends ChatMember
{
	/**
	 * The member's status in the chat, always “creator”
	 */
	public string $status;

	/**
	 * Information about the user
	 */
	public User $user;

	/**
	 * True, if the user's presence in the chat is hidden
	 */
	public bool $isAnonymous;

	/**
	 * [optional] Custom title for this user
	 */
	public string $customTitle;

}