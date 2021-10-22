<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * Chat Class
 *
 * This object represents a chat.
 *
 * @link https://core.telegram.org/bots/api#chat
 */
class Chat extends Type
{
    /**
     * getTypeVariables function
     * To specify the type of value of Variables
     *
     * @return array
     */
    protected function getTypeVariables()
    {
        return [
            'photo' => ChatPhoto::class,
            'pinnedMessage' => Message::class,
            'permissions' => ChatPermissions::class,
            'location' => ChatLocation::class,
        ];
    }

	/**
	 * Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
	 */
	public int $id;

	/**
	 * Type of chat, can be either “private”, “group”, “supergroup” or “channel”
	 */
	public string $type;

	/**
	 * [optional] Title, for supergroups, channels and group chats
	 */
	public string $title;

	/**
	 * [optional] Username, for private chats, supergroups and channels if available
	 */
	public string $username;

	/**
	 * [optional] First name of the other party in a private chat
	 */
	public string $firstName;

	/**
	 * [optional] Last name of the other party in a private chat
	 */
	public string $lastName;

	/**
	 * [optional] Chat photo. Returned only in [getChat](https://core.telegram.org/bots/api#getchat).
	 */
	public ChatPhoto $photo;

	/**
	 * [optional] Bio of the other party in a private chat. Returned only in [getChat](https://core.telegram.org/bots/api#getchat).
	 */
	public string $bio;

	/**
	 * [optional] Description, for groups, supergroups and channel chats. Returned only in [getChat](https://core.telegram.org/bots/api#getchat).
	 */
	public string $description;

	/**
	 * [optional] Primary invite link, for groups, supergroups and channel chats. Returned only in [getChat](https://core.telegram.org/bots/api#getchat).
	 */
	public string $inviteLink;

	/**
	 * [optional] The most recent pinned message (by sending date). Returned only in [getChat](https://core.telegram.org/bots/api#getchat).
	 */
	public Message $pinnedMessage;

	/**
	 * [optional] Default chat member permissions, for groups and supergroups. Returned only in [getChat](https://core.telegram.org/bots/api#getchat).
	 */
	public ChatPermissions $permissions;

	/**
	 * [optional] For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user. Returned only in [getChat](https://core.telegram.org/bots/api#getchat).
	 */
	public int $slowModeDelay;

	/**
	 * [optional] The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in [getChat](https://core.telegram.org/bots/api#getchat).
	 */
	public int $messageAutoDeleteTime;

	/**
	 * [optional] For supergroups, name of group sticker set. Returned only in [getChat](https://core.telegram.org/bots/api#getchat).
	 */
	public string $stickerSetName;

	/**
	 * [optional] True, if the bot can change the group sticker set. Returned only in [getChat](https://core.telegram.org/bots/api#getchat).
	 */
	public bool $canSetStickerSet;

	/**
	 * [optional] Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in [getChat](https://core.telegram.org/bots/api#getchat).
	 */
	public int $linkedChatId;

	/**
	 * [optional] For supergroups, the location to which the supergroup is connected. Returned only in [getChat](https://core.telegram.org/bots/api#getchat).
	 */
	public ChatLocation $location;

}