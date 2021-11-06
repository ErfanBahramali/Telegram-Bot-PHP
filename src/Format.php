<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP;

use TelegramBotPHP\Constants\ParseMode;
use TelegramBotPHP\Helpers\Helper;

class Format
{
    /**
     * mention function
     *
     * mention user by user id
     *
     * @link https://core.telegram.org/bots/api#formatting-options
     * @param int $userId [optional] by default is Message sender ID (update->message->from_id->id)
     * @param string $text [optional] by default is Message sender first name + last name (update->message->from_id->first_name + update->message->from_id->last_name)
     * @param string $parseMode [optional] by default is markdown
     * @return string
     */
    public static function mention(int $userId = null, string $text = null, string $parseMode = ParseMode::MARKDOWN): string
    {
        if (is_null($userId)) {

            $userId = Helper::getUserId();
        }

        if (empty($text)) {

            $text = Helper::getMessageText();
        }

        $parseMode = strtoupper($parseMode);

        if ($parseMode == ParseMode::MARKDOWNV2) {

            $text = self::markdownV2($text);
            $url = "[{$text}](tg://user?id={$userId})";
        } elseif ($parseMode == ParseMode::HTML) {

            $text = self::html($text);
            $url = "<a href=\"tg://user?id={$userId}\">{$text}</a>";
        } else {

            $text = self::markdown($text);
            $url = "[{$text}](tg://user?id={$userId})";
        }

        return $url;
    }

    /**
     * markdownV2 function
     *
     * escape MarkdownV2 style
     *
     * @link https://core.telegram.org/bots/api#markdownv2-style
     * @param string $string
     * @return string
     */
    public static function markdownV2(string $string): string
    {
        return self::replaceKeyToValue($string, [
            '\\' => '\\\\',
            '_' => '\_',
            '*' => '\*',
            '[' => '\[',
            ']' => '\]',
            '(' => '\(',
            ')' => '\)',
            '~' => '\~',
            '`' => '\`',
            '>' => '\>',
            '#' => '\#',
            '+' => '\+',
            '-' => '\-',
            '=' => '\=',
            '|' => '\|',
            '{' => '\{',
            '}' => '\}',
            '.' => '\.',
            '!' => '\!',

        ]);
    }

    /**
     * html function
     *
     * escape HTML style
     * don't use `htmlentities` or `htmlspecialchars` function.
     *
     * @link https://core.telegram.org/bots/api#html-style
     * @param string $string
     * @return string
     */
    public static function html(string $string): string
    {
        return self::replaceKeyToValue($string, [
            '<' => '&lt;',
            '>' => '&gt;',
            '&' => '&amp;',
        ]);
    }

    /**
     * markdown function
     *
     * escape Markdown style
     *
     * @link https://core.telegram.org/bots/api#markdown-style
     * @param string $string
     * @return string
     */
    public static function markdown(string $string): string
    {
        return self::replaceKeyToValue($string, [
            '\\' => '\\\\',
            '_' => '\_',
            '*' => '\*',
            '`' => '\`',
            '[' => '\[',
        ]);
    }

    /**
     * replaceKeyToValue function
     *
     * replace array keys to array values
     *
     * @param string $string
     * @param array $string
     * @return string
     */
    public static function replaceKeyToValue(string $string, array $array): string
    {
        return str_replace(
            array_keys($array),
            array_values($array),
            $string
        );
    }

    /**
     * toCamelCase function
     *
     * convert text to camelCase (test_text => testText)
     *
     * @param string $text
     * @return string
     */
    public static function toCamelCase(string $string, bool $capitalizeFirstCharacter = true): string
    {
        $string = str_replace('_', '', ucwords($string, '_'));

        if ($capitalizeFirstCharacter) {

            $string = lcfirst($string);
        }

        return $string;
    }
}
