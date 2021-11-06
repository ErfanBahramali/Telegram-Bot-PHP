<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Helpers;

use TelegramBotPHP\Constants\UpdateType;

trait OrderInfo
{
    /**
     * getOrderInfoName function
     *
     * @return string|null User name
     */
    public static function getOrderInfoName()
    {
        switch (self::$updateType) {
            case UpdateType::PRE_CHECKOUT_QUERY:
                return self::$updateContent['order_info']['name'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getOrderInfoPhoneNumber function
     *
     * @return string|null User's phone number
     */
    public static function getOrderInfoPhoneNumber()
    {
        switch (self::$updateType) {
            case UpdateType::PRE_CHECKOUT_QUERY:
                return self::$updateContent['order_info']['phone_number'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getOrderInfoEmail function
     *
     * @return string|null User email
     */
    public static function getOrderInfoEmail()
    {
        switch (self::$updateType) {
            case UpdateType::PRE_CHECKOUT_QUERY:
                return self::$updateContent['order_info']['email'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getOrderInfoShippingAddressCountryCode function
     *
     * @return string|null ISO 3166-1 alpha-2 country code
     */
    public static function getOrderInfoShippingAddressCountryCode()
    {
        switch (self::$updateType) {
            case UpdateType::PRE_CHECKOUT_QUERY:
                return self::$updateContent['order_info']['shipping_address']['country_code'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getOrderInfoShippingAddressState function
     *
     * @return string|null State, if applicable
     */
    public static function getOrderInfoShippingAddressState()
    {
        switch (self::$updateType) {
            case UpdateType::PRE_CHECKOUT_QUERY:
                return self::$updateContent['order_info']['shipping_address']['state'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getOrderInfoShippingAddressStreetLine1 function
     *
     * @return string|null First line for the address
     */
    public static function getOrderInfoShippingAddressStreetLine1()
    {
        switch (self::$updateType) {
            case UpdateType::PRE_CHECKOUT_QUERY:
                return self::$updateContent['order_info']['shipping_address']['street_line1'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getOrderInfoShippingAddressStreetLine2 function
     *
     * @return string|null Second line for the address
     */
    public static function getOrderInfoShippingAddressStreetLine2()
    {
        switch (self::$updateType) {
            case UpdateType::PRE_CHECKOUT_QUERY:
                return self::$updateContent['order_info']['shipping_address']['street_line2'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getOrderInfoShippingAddressPostCode function
     *
     * @return string|null Address post code
     */
    public static function getOrderInfoShippingAddressPostCode()
    {
        switch (self::$updateType) {
            case UpdateType::PRE_CHECKOUT_QUERY:
                return self::$updateContent['order_info']['shipping_address']['post_code'] ?? null;
                break;
            default:
                return null;
                break;
        }
    }
}
