<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\Payments;

use TelegramBotPHP\Type;
use TelegramBotPHP\Types\User;

/**
 * ShippingQuery Class
 *
 * This object contains information about an incoming shipping query.
 *
 * @link https://core.telegram.org/bots/api#shippingquery
 */
class ShippingQuery extends Type
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
            'from' => User::class,
            'shippingAddress' => ShippingAddress::class,
        ];
    }

	/**
	 * Unique query identifier
	 */
	public string $id;

	/**
	 * User who sent the query
	 */
	public User $from;

	/**
	 * Bot specified invoice payload
	 */
	public string $invoicePayload;

	/**
	 * User specified shipping address
	 */
	public ShippingAddress $shippingAddress;

}