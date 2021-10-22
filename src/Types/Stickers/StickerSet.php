<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\Stickers;

use TelegramBotPHP\Type;
use TelegramBotPHP\Types\PhotoSize;

/**
 * StickerSet Class
 *
 * This object represents a sticker set.
 *
 * @link https://core.telegram.org/bots/api#stickerset
 */
class StickerSet extends Type
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
        ];
    }

    /**
     * getTypeArrayVariables function
     * To specify the type of value of arrays Variables
     *
     * @return array
     */
    protected function getTypeArrayVariables()
    {
        return [
            'stickers' => Sticker::class,
        ];
    }

	/**
	 * Sticker set name
	 */
	public string $name;

	/**
	 * Sticker set title
	 */
	public string $title;

	/**
	 * *True*, if the sticker set contains [animated stickers](https://telegram.org/blog/animated-stickers)
	 */
	public bool $isAnimated;

	/**
	 * *True*, if the sticker set contains masks
	 */
	public bool $containsMasks;

	/**
	 * List of all set stickers
	 */
	public array $stickers;

	/**
	 * [optional] Sticker set thumbnail in the .WEBP or .TGS format
	 */
	public PhotoSize $thumb;

}