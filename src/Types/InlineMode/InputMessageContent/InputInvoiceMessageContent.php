<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InputMessageContent;

use TelegramBotPHP\Types\Payments\LabeledPrice;

/**
 * InputInvoiceMessageContent Class
 *
 * Represents the [content](https://core.telegram.org/bots/api#inputmessagecontent) of an invoice message to be sent as the result of an inline query.
 *
 * @link https://core.telegram.org/bots/api#inputinvoicemessagecontent
 */
class InputInvoiceMessageContent extends InputMessageContent
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
	 * Product name, 1-32 characters
	 */
	public string $title;

	/**
	 * Product description, 1-255 characters
	 */
	public string $description;

	/**
	 * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
	 */
	public string $payload;

	/**
	 * Payment provider token, obtained via [Botfather](https://t.me/botfather)
	 */
	public string $providerToken;

	/**
	 * Three-letter ISO 4217 currency code, see [more on currencies](https://core.telegram.org/bots/api/bots/payments#supported-currencies)
	 */
	public string $currency;

	/**
	 * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
	 */
	public array $prices;

	/**
	 * [optional] The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
	 */
	public int $maxTipAmount;

	/**
	 * [optional] A JSON-serialized array of suggested amounts of tip in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max_tip_amount*.
	 */
	public array $suggestedTipAmounts;

	/**
	 * [optional] A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
	 */
	public string $providerData;

	/**
	 * [optional] URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
	 */
	public string $photoUrl;

	/**
	 * [optional] Photo size
	 */
	public int $photoSize;

	/**
	 * [optional] Photo width
	 */
	public int $photoWidth;

	/**
	 * [optional] Photo height
	 */
	public int $photoHeight;

	/**
	 * [optional] Pass *True*, if you require the user's full name to complete the order
	 */
	public bool $needName;

	/**
	 * [optional] Pass *True*, if you require the user's phone number to complete the order
	 */
	public bool $needPhoneNumber;

	/**
	 * [optional] Pass *True*, if you require the user's email address to complete the order
	 */
	public bool $needEmail;

	/**
	 * [optional] Pass *True*, if you require the user's shipping address to complete the order
	 */
	public bool $needShippingAddress;

	/**
	 * [optional] Pass *True*, if user's phone number should be sent to provider
	 */
	public bool $sendPhoneNumberToProvider;

	/**
	 * [optional] Pass *True*, if user's email address should be sent to provider
	 */
	public bool $sendEmailToProvider;

	/**
	 * [optional] Pass *True*, if the final price depends on the shipping method
	 */
	public bool $isFlexible;

}