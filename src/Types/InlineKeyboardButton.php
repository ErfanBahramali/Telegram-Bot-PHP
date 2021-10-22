<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;
use TelegramBotPHP\Types\Games\CallbackGame;

/**
 * InlineKeyboardButton Class
 *
 * This object represents one button of an inline keyboard. You **must** use exactly one of the optional fields.
 *
 * @link https://core.telegram.org/bots/api#inlinekeyboardbutton
 */
class InlineKeyboardButton extends Type
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
            'loginUrl' => LoginUrl::class,
            'callbackGame' => CallbackGame::class,
        ];
    }

	/**
	 * Label text on the button
	 */
	public string $text;

	/**
	 * [optional] HTTP or tg:// url to be opened when button is pressed
	 */
	public string $url;

	/**
	 * [optional] An HTTP URL used to automatically authorize the user. Can be used as a replacement for the [Telegram Login Widget](https://core.telegram.org/widgets/login).
	 */
	public LoginUrl $loginUrl;

	/**
	 * [optional] Data to be sent in a [callback query](https://core.telegram.org/bots/api#callbackquery) to the bot when button is pressed, 1-64 bytes
	 */
	public string $callbackData;

	/**
	 * [optional] If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. Can be empty, in which case just the bot's username will be inserted. **Note:** This offers an easy way for users to start using your bot in [inline mode](https://core.telegram.org/bots/api/bots/inline) when they are currently in a private chat with it. Especially useful when combined with [*switch_pm…*](https://core.telegram.org/bots/api#answerinlinequery) actions – in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
	 */
	public string $switchInlineQuery;

	/**
	 * [optional] If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. Can be empty, in which case only the bot's username will be inserted. This offers a quick way for the user to open your bot in inline mode in the same chat – good for selecting something from multiple options.
	 */
	public string $switchInlineQueryCurrentChat;

	/**
	 * [optional] Description of the game that will be launched when the user presses the button. **NOTE:** This type of button **must** always be the first button in the first row.
	 */
	public CallbackGame $callbackGame;

	/**
	 * [optional] Specify True, to send a [Pay button](https://core.telegram.org/bots/api#payments). **NOTE:** This type of button **must** always be the first button in the first row.
	 */
	public bool $pay;

}