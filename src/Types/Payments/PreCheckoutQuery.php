<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\Payments;

use TelegramBotPHP\Type;
use TelegramBotPHP\Types\User;

/**
 * PreCheckoutQuery Class
 *
 * This object contains information about an incoming pre-checkout query.
 *
 * @link https://core.telegram.org/bots/api#precheckoutquery
 */
class PreCheckoutQuery extends Type
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
            'orderInfo' => OrderInfo::class,
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
	 * Three-letter ISO 4217 [currency](https://core.telegram.org/bots/api/bots/payments#supported-currencies) code
	 */
	public string $currency;

	/**
	 * Total price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
	 */
	public int $totalAmount;

	/**
	 * Bot specified invoice payload
	 */
	public string $invoicePayload;

	/**
	 * [optional] Identifier of the shipping option chosen by the user
	 */
	public string $shippingOptionId;

	/**
	 * [optional] Order info provided by the user
	 */
	public OrderInfo $orderInfo;

}