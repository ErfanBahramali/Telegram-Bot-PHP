<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * VoiceChatParticipantsInvited Class
 *
 * This object represents a service message about new members invited to a voice chat.
 *
 * @link https://core.telegram.org/bots/api#voicechatparticipantsinvited
 */
class VoiceChatParticipantsInvited extends Type
{
    /**
     * getTypeArrayVariables function
     * To specify the type of value of arrays Variables
     *
     * @return array
     */
    protected function getTypeArrayVariables()
    {
        return [
			'users' => User::class,
		];
    }

	/**
	 * [optional] New members that were invited to the voice chat
	 */
	public array $users;

}