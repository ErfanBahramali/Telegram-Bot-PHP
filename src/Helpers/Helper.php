<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Helpers;

use TelegramBotPHP\Constants\UpdateType;

class Helper
{
    use Message, CallbackQuery, Chat, User, SenderChat, Forward, OrderInfo, SuccessfulPayment;

    private static $input;
    private static $updateContent;
    private static $updateType;

    /**
     * __construct function
     */
    public function __construct(array $input)
    {
        self::$input = $input;
        self::$updateType = self::getUpdateType();
        self::$updateContent = self::$input[self::$updateType];
    }

    /**
     * getInput function
     *
     * @return object|null
     */
    public static function getInput()
    {
        return self::$input;
    }

    /**
     * getUpdateType function
     *
     * @return object|null
     */
    public static function getUpdateType()
    {
        return array_keys(self::$input)[1];
    }

    /**
     * updateTypeIsMessage fucntion
     *
     * @return bool return true if updateType is message
     */
    public static function updateTypeIsMessage()
    {
        return (self::$updateType === UpdateType::MESSAGE);
    }

    /**
     * updateTypeIsEditedMessage fucntion
     *
     * @return bool return true if updateType is edited message
     */
    public static function updateTypeIsEditedMessage()
    {
        return (self::$updateType === UpdateType::EDITED_MESSAGE);
    }

    /**
     * updateTypeIsChannelPost fucntion
     *
     * @return bool return true if updateType is Channel post
     */
    public static function updateTypeIsChannelPost()
    {
        return (self::$updateType === UpdateType::CHANNEL_POST);
    }

    /**
     * updateTypeIsEditedChannelPost fucntion
     *
     * @return bool return true if updateType is edited Channel post
     */
    public static function updateTypeIsEditedChannelPost()
    {
        return (self::$updateType === UpdateType::EDITED_CHANNEL_POST);
    }

    /**
     * updateTypeIsInlineQuery fucntion
     *
     * @return bool return true if updateType is inline query
     */
    public static function updateTypeIsInlineQuery()
    {
        return (self::$updateType === UpdateType::INLINE_QUERY);
    }

    /**
     * updateTypeIsChosenInlineResult fucntion
     *
     * @return bool return true if updateType is chosen inline result
     */
    public static function updateTypeIsChosenInlineResult()
    {
        return (self::$updateType === UpdateType::CHOSEN_INLINE_RESULT);
    }

    /**
     * updateTypeIsCallbackQuery fucntion
     *
     * @return bool return true if updateType is callback query
     */
    public static function updateTypeIsCallbackQuery()
    {
        return (self::$updateType === UpdateType::CALLBACK_QUERY);
    }

    /**
     * updateTypeIsShippingQuery fucntion
     *
     * @return bool return true if updateType is shipping query
     */
    public static function updateTypeIsShippingQuery()
    {
        return (self::$updateType === UpdateType::SHIPPING_QUERY);
    }

    /**
     * updateTypeIsPreCheckoutQuery fucntion
     *
     * @return bool return true if updateType is pre checkout query
     */
    public static function updateTypeIsPreCheckoutQuery()
    {
        return (self::$updateType === UpdateType::PRE_CHECKOUT_QUERY);
    }

    /**
     * updateTypeIsPoll fucntion
     *
     * @return bool return true if updateType is poll
     */
    public static function updateTypeIsPoll()
    {
        return (self::$updateType === UpdateType::POLL);
    }

    /**
     * updateTypeIsPollAnswer fucntion
     *
     * @return bool return true if updateType is poll answer
     */
    public static function updateTypeIsPollAnswer()
    {
        return (self::$updateType === UpdateType::POLL_ANSWER);
    }

    /**
     * updateTypeIsMyChatMember fucntion
     *
     * @return bool return true if updateType is my chat member
     */
    public static function updateTypeIsMyChatMember()
    {
        return (self::$updateType === UpdateType::MY_CHAT_MEMBER);
    }

    /**
     * updateTypeIsChatMember fucntion
     *
     * @return bool return true if updateType is chat member
     */
    public static function updateTypeIsChatMember()
    {
        return (self::$updateType === UpdateType::CHAT_MEMBER);
    }

    /**
     * updateTypeIsChatJoinRequest fucntion
     *
     * @return bool return true if updateType is chat join request
     */
    public static function updateTypeIsChatJoinRequest()
    {
        return (self::$updateType === UpdateType::CHAT_JOIN_REQUEST);
    }

    /**
     * isForwarded fucntion
     *
     * @return bool return true, if message is forwarded
     */
    public static function isForwarded()
    {
        return isset(self::$updateContent['forward_date']);
    }

    /**
     * isRepliedMessage fucntion
     *
     * @return bool return true, if message is replied
     */
    public static function isRepliedMessage()
    {
        return isset(self::$updateContent['reply_to_message']);
    }

    /**
     * getId function
     *
     * @return int|null Unique identifier
     */
    public static function getId()
    {
        switch (self::$updateType) {
            case UpdateType::INLINE_QUERY:
            case UpdateType::CALLBACK_QUERY:
            case UpdateType::SHIPPING_QUERY:
            case UpdateType::PRE_CHECKOUT_QUERY:
            case UpdateType::POLL:
                return self::$updateContent['id'];
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getDate function
     *
     * @return int|null Date the message was sent in Unix time
     */
    public static function getDate()
    {
        switch (self::$updateType) {
            case UpdateType::MESSAGE:
            case UpdateType::EDITED_MESSAGE:
            case UpdateType::CHANNEL_POST:
            case UpdateType::EDITED_CHANNEL_POST:
            case UpdateType::MY_CHAT_MEMBER:
            case UpdateType::CHAT_MEMBER:
                return self::$updateContent['date'];
                break;
            default:
                return null;
                break;
        }
    }

    /**
     * getQuery function
     *
     * @return string|null Text of the query (up to 256 characters) or The query that was used to obtain the result
     */
    public static function getQuery()
    {
        switch (self::$updateType) {
            case UpdateType::INLINE_QUERY:
            case UpdateType::CHOSEN_INLINE_RESULT:
                return self::$updateContent['query'];
                break;
            default:
                return null;
                break;
        }
    }
}
