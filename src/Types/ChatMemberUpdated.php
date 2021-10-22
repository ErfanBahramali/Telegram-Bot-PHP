<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;
use TelegramBotPHP\Types\ChatMember\ChatMember;

/**
 * ChatMemberUpdated Class
 *
 * This object represents changes in the status of a chat member.
 *
 * @link https://core.telegram.org/bots/api#chatmemberupdated
 */
class ChatMemberUpdated extends Type
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
            'chat' => Chat::class,
            'from' => User::class,
            'oldChatMember' => ChatMember::class,
            'newChatMember' => ChatMember::class,
            'inviteLink' => ChatInviteLink::class,
        ];
    }

	/**
	 * Chat the user belongs to
	 */
	public Chat $chat;

	/**
	 * Performer of the action, which resulted in the change
	 */
	public User $from;

	/**
	 * Date the change was done in Unix time
	 */
	public int $date;

	/**
	 * Previous information about the chat member
	 */
	public ChatMember $oldChatMember;

	/**
	 * New information about the chat member
	 */
	public ChatMember $newChatMember;

	/**
	 * [optional] Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
	 */
	public ChatInviteLink $inviteLink;

}