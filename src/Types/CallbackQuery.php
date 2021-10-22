<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * CallbackQuery Class
 *
 * This object represents an incoming callback query from a callback button in an [inline keyboard](https://core.telegram.org/bots/api/bots#inline-keyboards-and-on-the-fly-updating). If the button that originated the query was attached to a message sent by the bot, the field *message* will be present. If the button was attached to a message sent via the bot (in [inline mode](https://core.telegram.org/bots/api#inline-mode)), the field *inline_message_id* will be present. Exactly one of the fields *data* or *game_short_name* will be present. **NOTE:** After the user presses a callback button, Telegram clients will display a progress bar until you call [answerCallbackQuery](https://core.telegram.org/bots/api#answercallbackquery). It is, therefore, necessary to react by calling [answerCallbackQuery](https://core.telegram.org/bots/api#answercallbackquery) even if no notification to the user is needed (e.g., without specifying any of the optional parameters).
 *
 * @link https://core.telegram.org/bots/api#callbackquery
 */
class CallbackQuery extends Type
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
            'message' => Message::class,
        ];
    }

	/**
	 * Unique identifier for this query
	 */
	public string $id;

	/**
	 * Sender
	 */
	public User $from;

	/**
	 * [optional] Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
	 */
	public Message $message;

	/**
	 * [optional] Identifier of the message sent via the bot in inline mode, that originated the query.
	 */
	public string $inlineMessageId;

	/**
	 * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in [games](https://core.telegram.org/bots/api#games).
	 */
	public string $chatInstance;

	/**
	 * [optional] Data associated with the callback button. Be aware that a bad client can send arbitrary data in this field.
	 */
	public string $data;

	/**
	 * [optional] Short name of a [Game](https://core.telegram.org/bots/api#games) to be returned, serves as the unique identifier for the game
	 */
	public string $gameShortName;

}