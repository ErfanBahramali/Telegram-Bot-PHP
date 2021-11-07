<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Helpers;

use TelegramBotPHP\Constants\UpdateType;

trait SuccessfulPayment
{
    /**
     * getSuccessfulPaymentCurrency function
     *
     * @return string|null Three-letter ISO 4217 [currency](https://core.telegram.org/bots/payments#supported-currencies) code
     */
    public static function getSuccessfulPaymentCurrency()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['currency'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentTotalAmount function
     *
     * @return int|null Total price in the smallest units of the currency (integer, not float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the exp parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
     */
    public static function getSuccessfulPaymentTotalAmount()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['total_amount'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentInvoicePayload function
     *
     * @return string|null Bot specified invoice payload
     */
    public static function getSuccessfulPaymentInvoicePayload()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['invoice_payload'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentShippingOptionId function
     *
     * @return string|null Identifier of the shipping option chosen by the user
     */
    public static function getSuccessfulPaymentShippingOptionId()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['shipping_option_id'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentOrderInfoName function
     *
     * @return string|null User name
     */
    public static function getSuccessfulPaymentOrderInfoName()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['order_info']['name'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentOrderInfoPhoneNumber function
     *
     * @return string|null User's phone number
     */
    public static function getSuccessfulPaymentOrderInfoPhoneNumber()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['order_info']['phone_number'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentOrderInfoEmail function
     *
     * @return string|null User email
     */
    public static function getSuccessfulPaymentOrderInfoEmail()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['order_info']['email'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentOrderInfoShippingAddressCountryCode function
     *
     * @return string|null ISO 3166-1 alpha-2 country code
     */
    public static function getSuccessfulPaymentOrderInfoShippingAddressCountryCode()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['order_info']['shipping_address']['country_code'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentOrderInfoShippingAddressState function
     *
     * @return string|null State, if applicable
     */
    public static function getSuccessfulPaymentOrderInfoShippingAddressState()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['order_info']['shipping_address']['state'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentOrderInfoShippingAddressStreetLine1 function
     *
     * @return string|null First line for the address
     */
    public static function getSuccessfulPaymentOrderInfoShippingAddressStreetLine1()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['order_info']['shipping_address']['street_line1'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentOrderInfoShippingAddressStreetLine2 function
     *
     * @return string|null Second line for the address
     */
    public static function getSuccessfulPaymentOrderInfoShippingAddressStreetLine2()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['order_info']['shipping_address']['street_line2'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentOrderInfoShippingAddressPostCode function
     *
     * @return string|null Address post code
     */
    public static function getSuccessfulPaymentOrderInfoShippingAddressPostCode()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['order_info']['shipping_address']['post_code'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentTelegramPaymentChargeId function
     *
     * @return string|null Telegram payment identifier
     */
    public static function getSuccessfulPaymentTelegramPaymentChargeId()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['telegram_payment_charge_id'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getSuccessfulPaymentProviderPaymentChargeId function
     *
     * @return string|null Provider payment identifier
     */
    public static function getSuccessfulPaymentProviderPaymentChargeId()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
                return self::$updateContent['successful_payment']['provider_payment_charge_id'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }
}
