<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * ProximityAlertTriggered Class
 *
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 *
 * @link https://core.telegram.org/bots/api#proximityalerttriggered
 */
class ProximityAlertTriggered extends Type
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
            'traveler' => User::class,
            'watcher' => User::class,
        ];
    }

	/**
	 * User that triggered the alert
	 */
	public User $traveler;

	/**
	 * User that set the alert
	 */
	public User $watcher;

	/**
	 * The distance between the users
	 */
	public int $distance;

}