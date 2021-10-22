<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\ChatMember;

use TelegramBotPHP\Types\User;

/**
 * ChatMemberRestricted Class
 *
 * Represents a [chat member](https://core.telegram.org/bots/api#chatmember) that is under certain restrictions in the chat. Supergroups only.
 *
 * @link https://core.telegram.org/bots/api#chatmemberrestricted
 */
class ChatMemberRestricted extends ChatMember
{
	/**
	 * The member's status in the chat, always “restricted”
	 */
	public string $status;

	/**
	 * Information about the user
	 */
	public User $user;

	/**
	 * True, if the user is a member of the chat at the moment of the request
	 */
	public bool $isMember;

	/**
	 * True, if the user is allowed to change the chat title, photo and other settings
	 */
	public bool $canChangeInfo;

	/**
	 * True, if the user is allowed to invite new users to the chat
	 */
	public bool $canInviteUsers;

	/**
	 * True, if the user is allowed to pin messages
	 */
	public bool $canPinMessages;

	/**
	 * True, if the user is allowed to send text messages, contacts, locations and venues
	 */
	public bool $canSendMessages;

	/**
	 * True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
	 */
	public bool $canSendMediaMessages;

	/**
	 * True, if the user is allowed to send polls
	 */
	public bool $canSendPolls;

	/**
	 * True, if the user is allowed to send animations, games, stickers and use inline bots
	 */
	public bool $canSendOtherMessages;

	/**
	 * True, if the user is allowed to add web page previews to their messages
	 */
	public bool $canAddWebPagePreviews;

	/**
	 * Date when restrictions will be lifted for this user; unix time. If 0, then the user is restricted forever
	 */
	public int $untilDate;

}