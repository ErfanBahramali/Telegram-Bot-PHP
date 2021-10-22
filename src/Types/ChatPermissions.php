<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * ChatPermissions Class
 *
 * Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @link https://core.telegram.org/bots/api#chatpermissions
 */
class ChatPermissions extends Type
{

	/**
	 * [optional] True, if the user is allowed to send text messages, contacts, locations and venues
	 */
	public bool $canSendMessages;

	/**
	 * [optional] True, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can_send_messages
	 */
	public bool $canSendMediaMessages;

	/**
	 * [optional] True, if the user is allowed to send polls, implies can_send_messages
	 */
	public bool $canSendPolls;

	/**
	 * [optional] True, if the user is allowed to send animations, games, stickers and use inline bots, implies can_send_media_messages
	 */
	public bool $canSendOtherMessages;

	/**
	 * [optional] True, if the user is allowed to add web page previews to their messages, implies can_send_media_messages
	 */
	public bool $canAddWebPagePreviews;

	/**
	 * [optional] True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
	 */
	public bool $canChangeInfo;

	/**
	 * [optional] True, if the user is allowed to invite new users to the chat
	 */
	public bool $canInviteUsers;

	/**
	 * [optional] True, if the user is allowed to pin messages. Ignored in public supergroups
	 */
	public bool $canPinMessages;

}