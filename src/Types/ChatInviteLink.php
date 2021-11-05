<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * ChatInviteLink Class
 *
 * Represents an invite link for a chat.
 *
 * @link https://core.telegram.org/bots/api#chatinvitelink
 */
class ChatInviteLink extends Type
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
            'creator' => User::class,
        ];
    }

	/**
	 * The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
	 */
	public string $inviteLink;

	/**
	 * Creator of the link
	 */
	public User $creator;

	/**
	 * True, if users joining the chat via the link need to be approved by chat administrators
	 */
	public bool $createsJoinRequest;

	/**
	 * True, if the link is primary
	 */
	public bool $isPrimary;

	/**
	 * True, if the link is revoked
	 */
	public bool $isRevoked;

	/**
	 * [optional] Invite link name
	 */
	public string $name;

	/**
	 * [optional] Point in time (Unix timestamp) when the link will expire or has been expired
	 */
	public int $expireDate;

	/**
	 * [optional] Maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
	 */
	public int $memberLimit;

	/**
	 * [optional] Number of pending join requests created using this link
	 */
	public int $pendingJoinRequestCount;

}