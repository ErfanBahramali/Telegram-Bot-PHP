<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\Payments;

use TelegramBotPHP\Type;

/**
 * ShippingOption Class
 *
 * This object represents one shipping option.
 *
 * @link https://core.telegram.org/bots/api#shippingoption
 */
class ShippingOption extends Type
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
            'prices' => LabeledPrice::class,
        ];
    }

	/**
	 * Shipping option identifier
	 */
	public string $id;

	/**
	 * Option title
	 */
	public string $title;

	/**
	 * List of price portions
	 */
	public array $prices;

}