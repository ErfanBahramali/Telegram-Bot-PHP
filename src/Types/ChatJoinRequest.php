<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * ChatJoinRequest Class
 *
 * Represents a join request sent to a chat.
 *
 * @link https://core.telegram.org/bots/api#chatjoinrequest
 */
class ChatJoinRequest extends Type
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
            'inviteLink' => ChatInviteLink::class,
        ];
    }

	/**
	 * Chat to which the request was sent
	 */
	public Chat $chat;

	/**
	 * User that sent the join request
	 */
	public User $from;

	/**
	 * Date the request was sent in Unix time
	 */
	public int $date;

	/**
	 * [Optional] Bio of the user.
	 */
	public string $bio;

	/**
	 * [optional] Chat invite link that was used by the user to send the join request
	 */
	public ChatInviteLink $inviteLink;

}