<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * LoginUrl Class
 *
 * This object represents a parameter of the inline keyboard button used to automatically authorize a user. Serves as a great replacement for the [Telegram Login Widget](https://core.telegram.org/widgets/login) when the user is coming from Telegram. All the user needs to do is tap/click a button and confirm that they want to log in:[![TITLE](https://core.telegram.org/file/811140909/1631/20k1Z53eiyY.23995/c541e89b74253623d9)](https://core.telegram.org/file/811140015/1734/8VZFkwWXalM.97872/6127fa62d8a0bf2b3c) Telegram apps support these buttons as of [version 5.7](https://telegram.org/blog/privacy-discussions-web-bots#meet-seamless-web-bots).Sample bot: [@discussbot](https://t.me/discussbot)Sample bot: [@discussbot](https://t.me/discussbot)
 *
 * @link https://core.telegram.org/bots/api#loginurl
 */
class LoginUrl extends Type
{

	/**
	 * An HTTP URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in [Receiving authorization data](https://core.telegram.org/widgets/login#receiving-authorization-data). **NOTE:** You **must** always check the hash of the received data to verify the authentication and the integrity of the data as described in [Checking authorization](https://core.telegram.org/widgets/login#checking-authorization).
	 */
	public string $url;

	/**
	 * [optional] New text of the button in forwarded messages.
	 */
	public string $forwardText;

	/**
	 * [optional] Username of a bot, which will be used for user authorization. See [Setting up a bot](https://core.telegram.org/widgets/login#setting-up-a-bot) for more details. If not specified, the current bot's username will be assumed. The *url*'s domain must be the same as the domain linked with the bot. See [Linking your domain to the bot](https://core.telegram.org/widgets/login#linking-your-domain-to-the-bot) for more details.
	 */
	public string $botUsername;

	/**
	 * [optional] Pass True to request the permission for your bot to send messages to the user.
	 */
	public bool $requestWriteAccess;

}