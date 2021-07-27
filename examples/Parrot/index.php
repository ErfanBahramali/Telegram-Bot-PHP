<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

use TelegramBotPHP\Bot;
use TelegramBotPHP\Helpers\Helper;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * @link https://core.telegram.org/bots/api#authorizing-your-bot
 */
$bot = new Bot('__BOT_API_TOKEN__');

$chatId = Helper::getChatId();

$bot->copyMessage([
    'chat_id' => $chatId,
    'from_chat_id' => $chatId,
    'message_id' => Helper::getMessageId(),
]);