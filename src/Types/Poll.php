<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * Poll Class
 *
 * This object contains information about a poll.
 *
 * @link https://core.telegram.org/bots/api#poll
 */
class Poll extends Type
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
            'options' => PollOption::class,
            'explanationEntities' => MessageEntity::class,
        ];
    }

	/**
	 * Unique poll identifier
	 */
	public string $id;

	/**
	 * Poll question, 1-300 characters
	 */
	public string $question;

	/**
	 * List of poll options
	 */
	public array $options;

	/**
	 * Total number of users that voted in the poll
	 */
	public int $totalVoterCount;

	/**
	 * True, if the poll is closed
	 */
	public bool $isClosed;

	/**
	 * True, if the poll is anonymous
	 */
	public bool $isAnonymous;

	/**
	 * Poll type, currently can be “regular” or “quiz”
	 */
	public string $type;

	/**
	 * True, if the poll allows multiple answers
	 */
	public bool $allowsMultipleAnswers;

	/**
	 * [optional] 0-based identifier of the correct answer option. Available only for polls in the quiz mode, which are closed, or was sent (not forwarded) by the bot or to the private chat with the bot.
	 */
	public int $correctOptionId;

	/**
	 * [optional] Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters
	 */
	public string $explanation;

	/**
	 * [optional] Special entities like usernames, URLs, bot commands, etc. that appear in the *explanation*
	 */
	public array $explanationEntities;

	/**
	 * [optional] Amount of time in seconds the poll will be active after creation
	 */
	public int $openPeriod;

	/**
	 * [optional] Point in time (Unix timestamp) when the poll will be automatically closed
	 */
	public int $closeDate;

}