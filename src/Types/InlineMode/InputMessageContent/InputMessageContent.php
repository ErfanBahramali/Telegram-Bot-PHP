<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InputMessageContent;

use TelegramBotPHP\Exceptions\BotException;
use TelegramBotPHP\Type;

/**
 * InputMessageContent Class
 *
 * This object represents the content of a message to be sent as a result of an inline query. Telegram clients currently support the following 5 types:
 *
    - [InputTextMessageContent](https://core.telegram.org/bots/api#inputtextmessagecontent)
    - [InputLocationMessageContent](https://core.telegram.org/bots/api#inputlocationmessagecontent)
    - [InputVenueMessageContent](https://core.telegram.org/bots/api#inputvenuemessagecontent)
    - [InputContactMessageContent](https://core.telegram.org/bots/api#inputcontactmessagecontent)
    - [InputInvoiceMessageContent](https://core.telegram.org/bots/api#inputinvoicemessagecontent)
 *
 * @link https://core.telegram.org/bots/api#inputmessagecontent
 */
class InputMessageContent extends Type
{
    /**
     * checkClassType function
     *
     * @param array $data
     * @return object
     */
    private function checkClassType(array $data)
    {
        /**
         * values:
         *          class =>  keys(required)
         */
        $checkFieldDatas = [
            InputTextMessageContent::class => ['message_text'],
            InputVenueMessageContent::class => ['latitude', 'longitude', 'title', 'address'],
            InputLocationMessageContent::class => ['latitude', 'longitude'],
            InputContactMessageContent::class => ['phone_number', 'first_name'],
            InputInvoiceMessageContent::class => ['title', 'description', 'payload', 'provider_token', 'currency', 'prices'],
        ];

        foreach ($checkFieldDatas as $class => $keys) {

            if ($this->keysExistsInData($keys, $data)) {

                return $class;
            }
        }

        throw new BotException('InputMessageContent Class Type Not Found.');
    }
}
