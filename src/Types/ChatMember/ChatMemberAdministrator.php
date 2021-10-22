<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\ChatMember;

use TelegramBotPHP\Types\User;

/**
 * ChatMemberAdministrator Class
 *
 * Represents a [chat member](https://core.telegram.org/bots/api#chatmember) that has some additional privileges.
 *
 * @link https://core.telegram.org/bots/api#chatmemberadministrator
 */
class ChatMemberAdministrator extends ChatMember
{
	/**
	 * The member's status in the chat, always “administrator”
	 */
	public string $status;

	/**
	 * Information about the user
	 */
	public User $user;

	/**
	 * True, if the bot is allowed to edit administrator privileges of that user
	 */
	public bool $canBeEdited;

	/**
	 * True, if the user's presence in the chat is hidden
	 */
	public bool $isAnonymous;

	/**
	 * True, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
	 */
	public bool $canManageChat;

	/**
	 * True, if the administrator can delete messages of other users
	 */
	public bool $canDeleteMessages;

	/**
	 * True, if the administrator can manage voice chats
	 */
	public bool $canManageVoiceChats;

	/**
	 * True, if the administrator can restrict, ban or unban chat members
	 */
	public bool $canRestrictMembers;

	/**
	 * True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by the user)
	 */
	public bool $canPromoteMembers;

	/**
	 * True, if the user is allowed to change the chat title, photo and other settings
	 */
	public bool $canChangeInfo;

	/**
	 * True, if the user is allowed to invite new users to the chat
	 */
	public bool $canInviteUsers;

	/**
	 * [optional] True, if the administrator can post in the channel; channels only
	 */
	public bool $canPostMessages;

	/**
	 * [optional] True, if the administrator can edit messages of other users and can pin messages; channels only
	 */
	public bool $canEditMessages;

	/**
	 * [optional] True, if the user is allowed to pin messages; groups and supergroups only
	 */
	public bool $canPinMessages;

	/**
	 * [optional] Custom title for this user
	 */
	public string $customTitle;

}