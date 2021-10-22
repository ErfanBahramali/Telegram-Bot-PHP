<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * PollAnswer Class
 *
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * @link https://core.telegram.org/bots/api#pollanswer
 */
class PollAnswer extends Type
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
            'user' => User::class,
        ];
    }

	/**
	 * Unique poll identifier
	 */
	public string $pollId;

	/**
	 * The user, who changed the answer to the poll
	 */
	public User $user;

	/**
	 * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
	 */
	public array $optionIds;

}