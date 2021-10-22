<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\ChatMember;

use TelegramBotPHP\Types\User;

/**
 * ChatMemberBanned Class
 *
 * Represents a [chat member](https://core.telegram.org/bots/api#chatmember) that was banned in the chat and can't return to the chat or view chat messages.
 *
 * @link https://core.telegram.org/bots/api#chatmemberbanned
 */
class ChatMemberBanned extends ChatMember
{
	/**
	 * The member's status in the chat, always “kicked”
	 */
	public string $status;

	/**
	 * Information about the user
	 */
	public User $user;

	/**
	 * Date when restrictions will be lifted for this user; unix time. If 0, then the user is banned forever
	 */
	public int $untilDate;

}