<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Constants;

/**
 * Mode for parsing entities in the message text. See formatting options for more details.
 * The Bot API supports basic formatting for messages. You can use bold, italic, underlined and strikethrough text, as well as inline links and pre-formatted code in your bots' messages. Telegram clients will render them accordingly. You can use either markdown-style or HTML-style formatting.

Note that Telegram clients will display an **alert** to the user before opening an inline link ('Open this link?' together with the full URL).
 * @link https://core.telegram.org/bots/api#formatting-options
 */
class ParseMode
{
   /**
    *  MARKDOWNV2 Parse mode
     * To use this mode, pass MarkdownV2 in the parse_mode field.
     * @link https://core.telegram.org/bots/api#markdownv2-style
     */
    public const MARKDOWNV2 = 'MARKDOWNV2';

    /**
     * HTML Parse mode
     * To use this mode, pass HTML in the parse_mode field.
     * @link https://core.telegram.org/bots/api#sendphoto
     */
    public const HTML = 'HTML';

    /**
     * MARKDOWN Parse mode
     * This is a legacy mode, retained for backward compatibility. To use this mode, pass Markdown in the parse_mode field.
     * @link https://core.telegram.org/bots/api#markdown-style
     */
    public const MARKDOWN = 'MARKDOWN';
}
