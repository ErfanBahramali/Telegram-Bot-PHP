<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\Payments;

use TelegramBotPHP\Type;

/**
 * OrderInfo Class
 *
 * This object represents information about an order.
 *
 * @link https://core.telegram.org/bots/api#orderinfo
 */
class OrderInfo extends Type
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
            'shippingAddress' => ShippingAddress::class,
        ];
    }

	/**
	 * [optional] User name
	 */
	public string $name;

	/**
	 * [optional] User's phone number
	 */
	public string $phoneNumber;

	/**
	 * [optional] User email
	 */
	public string $email;

	/**
	 * [optional] User shipping address
	 */
	public ShippingAddress $shippingAddress;

}