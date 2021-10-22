<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\Games;

use TelegramBotPHP\Type;
use TelegramBotPHP\Types\User;

/**
 * GameHighScore Class
 *
 * This object represents one row of the high scores table for a game.
 *
 * @link https://core.telegram.org/bots/api#gamehighscore
 */
class GameHighScore extends Type
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
	 * Position in high score table for the game
	 */
	public int $position;

	/**
	 * User
	 */
	public User $user;

	/**
	 * Score
	 */
	public int $score;

}