<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\Payments;

use TelegramBotPHP\Type;

/**
 * LabeledPrice Class
 *
 * This object represents a portion of the price for goods or services.
 *
 * @link https://core.telegram.org/bots/api#labeledprice
 */
class LabeledPrice extends Type
{

	/**
	 * Portion label
	 */
	public string $label;

	/**
	 * Price of the product in the *smallest units* of the [currency](https://core.telegram.org/bots/api/bots/payments#supported-currencies) (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
	 */
	public int $amount;

}