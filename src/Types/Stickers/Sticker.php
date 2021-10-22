<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\Stickers;

use TelegramBotPHP\Type;
use TelegramBotPHP\Types\PhotoSize;

/**
 * Sticker Class
 *
 * This object represents a sticker.
 *
 * @link https://core.telegram.org/bots/api#sticker
 */
class Sticker extends Type
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
            'thumb' => PhotoSize::class,
            'maskPosition' => MaskPosition::class,
        ];
    }
	/**
	 * Identifier for this file, which can be used to download or reuse the file
	 */
	public string $fileId;

	/**
	 * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
	 */
	public string $fileUniqueId;

	/**
	 * Sticker width
	 */
	public int $width;

	/**
	 * Sticker height
	 */
	public int $height;

	/**
	 * *True*, if the sticker is [animated](https://telegram.org/blog/animated-stickers)
	 */
	public bool $isAnimated;

	/**
	 * [optional] Sticker thumbnail in the .WEBP or .JPG format
	 */
	public PhotoSize $thumb;

	/**
	 * [optional] Emoji associated with the sticker
	 */
	public string $emoji;

	/**
	 * [optional] Name of the sticker set to which the sticker belongs
	 */
	public string $setName;

	/**
	 * [optional] For mask stickers, the position where the mask should be placed
	 */
	public MaskPosition $maskPosition;

	/**
	 * [optional] File size
	 */
	public int $fileSize;

}