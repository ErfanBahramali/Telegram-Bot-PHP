<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;
use TelegramBotPHP\Types\InlineMode\ChosenInlineResult;
use TelegramBotPHP\Types\InlineMode\InlineQuery;
use TelegramBotPHP\Types\Payments\PreCheckoutQuery;
use TelegramBotPHP\Types\Payments\ShippingQuery;

/**
 * Update Class
 *
 * This [object](https://core.telegram.org/bots/api#available-types) represents an incoming update.At most **one** of the optional parameters can be present in any given update.
 *
 * @link https://core.telegram.org/bots/api#update
 */
class Update extends Type
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
            'message' => Message::class,
            'editedMessage' => Message::class,
            'channelPost' => Message::class,
            'editedChannelPost' => Message::class,
            'inlineQuery' => InlineQuery::class,
            'chosenInlineResult' => ChosenInlineResult::class,
            'callbackQuery' => CallbackQuery::class,
            'shippingQuery' => ShippingQuery::class,
            'preCheckoutQuery' => PreCheckoutQuery::class,
            'poll' => Poll::class,
            'pollAnswer' => PollAnswer::class,
            'myChatMember' => ChatMemberUpdated::class,
            'chatMember' => ChatMemberUpdated::class,
        ];
    }

	/**
	 * The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This ID becomes especially handy if you're using [Webhooks](https://core.telegram.org/bots/api#setwebhook), since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
	 */
	public int $updateId;

	/**
	 * [optional] New incoming message of any kind — text, photo, sticker, etc.
	 */
	public Message $message;

	/**
	 * [optional] New version of a message that is known to the bot and was edited
	 */
	public Message $editedMessage;

	/**
	 * [optional] New incoming channel post of any kind — text, photo, sticker, etc.
	 */
	public Message $channelPost;

	/**
	 * [optional] New version of a channel post that is known to the bot and was edited
	 */
	public Message $editedChannelPost;

	/**
	 * [optional] New incoming [inline](https://core.telegram.org/bots/api#inline-mode) query
	 */
	public InlineQuery $inlineQuery;

	/**
	 * [optional] The result of an [inline](https://core.telegram.org/bots/api#inline-mode) query that was chosen by a user and sent to their chat partner. Please see our documentation on the [feedback collecting](https://core.telegram.org/bots/api/bots/inline#collecting-feedback) for details on how to enable these updates for your bot.
	 */
	public ChosenInlineResult $chosenInlineResult;

	/**
	 * [optional] New incoming callback query
	 */
	public CallbackQuery $callbackQuery;

	/**
	 * [optional] New incoming shipping query. Only for invoices with flexible price
	 */
	public ShippingQuery $shippingQuery;

	/**
	 * [optional] New incoming pre-checkout query. Contains full information about checkout
	 */
	public PreCheckoutQuery $preCheckoutQuery;

	/**
	 * [optional] New poll state. Bots receive only updates about stopped polls and polls, which are sent by the bot
	 */
	public Poll $poll;

	/**
	 * [optional] A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
	 */
	public PollAnswer $pollAnswer;

	/**
	 * [optional] The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
	 */
	public ChatMemberUpdated $myChatMember;

	/**
	 * [optional] A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify “chat_member” in the list of *allowed_updates* to receive these updates.
	 */
	public ChatMemberUpdated $chatMember;

	/**
	 * [optional] A request to join the chat has been sent. The bot must have the *can_invite_users* administrator right in the chat to receive these updates.
	 */
	public ChatJoinRequest $chatJoinRequest;

}