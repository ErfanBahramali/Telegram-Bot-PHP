<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * UserProfilePhotos Class
 *
 * This object represent a user's profile pictures.
 *
 * @link https://core.telegram.org/bots/api#userprofilephotos
 */
class UserProfilePhotos extends Type
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
			'photos' => [PhotoSize::class],
		];
	}

	/**
	 * Total number of profile pictures the target user has
	 */
	public int $totalCount;

	/**
	 * Requested profile pictures (in up to 4 sizes each)
	 */
	public array $photos;
}
