<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Constants;

/**
 * @link https://core.telegram.org/bots/api#update
 */
class UpdateType
{
   /**
     * message Update Type
     * [optional] New incoming message of any kind — text, photo, sticker, etc.
     * @link https://core.telegram.org/bots/api#sendmessage
     */
    public const MESSAGE = 'message';

    /**
     * edited_message Update Type
     * [optional] New version of a message that is known to the bot and was edited
     * @link https://core.telegram.org/bots/api#sendphoto
     */
    public const EDITED_MESSAGE = 'edited_message';

    /**
     * channel_post Update Type
     * [optional] New incoming channel post of any kind — text, photo, sticker, etc.
     * @link https://core.telegram.org/bots/api#sendvideo
     */
    public const CHANNEL_POST = 'channel_post';

    /**
     * edited_channel_post Update Type
     * [optional] New version of a channel post that is known to the bot and was edited
     * @link https://core.telegram.org/bots/api#sendvideo
     */
    public const EDITED_CHANNEL_POST = 'edited_channel_post';

    /**
     * inline_query Update Type
     * [optional] New incoming [inline](https://core.telegram.org/bots/api#inline-mode) query
     * @link https://core.telegram.org/bots/api#sendvoice
     */
    public const INLINE_QUERY = 'inline_query';

    /**
     * chosen_inline_result Update Type
     * [optional] The result of an [inline](https://core.telegram.org/bots/api#inline-mode) query that was chosen by a user and sent to their chat partner. Please see our documentation on the [feedback collecting](https://core.telegram.org/bots/api/bots/inline#collecting-feedback) for details on how to enable these updates for your bot.
     * @link https://core.telegram.org/bots/api#sendvoice
     */
    public const CHOSEN_INLINE_RESULT = 'chosen_inline_result';

    /**
     * callback_query Update Type
     * [optional] New incoming callback query
     * @link https://core.telegram.org/bots/api#senddocument
     */
    public const CALLBACK_QUERY = 'callback_query';

    /**
     * shipping_query Update Type
     * [optional] New incoming shipping query. Only for invoices with flexible price
     * @link https://core.telegram.org/bots/api#sendlocation
     */
    public const SHIPPING_QUERY = 'shipping_query';

    /**
     * pre_checkout_query Update Type
     * [optional] New incoming pre-checkout query. Contains full information about checkout
     * @link https://core.telegram.org/bots/api#sendvideonote
     */
    public const PRE_CHECKOUT_QUERY = 'pre_checkout_query';

    /**
     * poll Update Type
     * [optional] New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
     * @link https://core.telegram.org/bots/api#sendvideonote
     */
    public const POLL = 'poll';

    /**
     * poll_answer Update Type
     * [optional] A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     * @link https://core.telegram.org/bots/api#sendvideonote
     */
    public const POLL_ANSWER = 'poll_answer';

    /**
     * my_chat_member Update Type
     * [optional] The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     * @link https://core.telegram.org/bots/api#sendvideonote
     */
    public const MY_CHAT_MEMBER = 'my_chat_member';

    /**
     * chat_member Update Type
     * [optional] A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify “chat_member” in the list of *allowed_updates* to receive these updates.
     * @link https://core.telegram.org/bots/api#sendvideonote
     */
    public const CHAT_MEMBER = 'chat_member';

    /**
     * chat_join_request Update Type
     * [optional] A request to join the chat has been sent. The bot must have the *can_invite_users* administrator right in the chat to receive these updates.
     * @link https://core.telegram.org/bots/api#chatjoinrequest
     */
    public const CHAT_JOIN_REQUEST = 'chat_join_request';
}
