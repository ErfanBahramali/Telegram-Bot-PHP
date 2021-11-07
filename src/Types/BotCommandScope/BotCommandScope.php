<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\BotCommandScope;

use TelegramBotPHP\Constants\BotCommandScopeType;
use TelegramBotPHP\Type;

/**
 * BotCommandScope Class
 *
 * This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 *
    - [BotCommandScopeDefault](https://core.telegram.org/bots/api#botcommandscopedefault)
    - [BotCommandScopeAllPrivateChats](https://core.telegram.org/bots/api#botcommandscopeallprivatechats)
    - [BotCommandScopeAllGroupChats](https://core.telegram.org/bots/api#botcommandscopeallgroupchats)
    - [BotCommandScopeAllChatAdministrators](https://core.telegram.org/bots/api#botcommandscopeallchatadministrators)
    - [BotCommandScopeChat](https://core.telegram.org/bots/api#botcommandscopechat)
    - [BotCommandScopeChatAdministrators](https://core.telegram.org/bots/api#botcommandscopechatadministrators)
    - [BotCommandScopeChatMember](https://core.telegram.org/bots/api#botcommandscopechatmember)
 *
 * @link https://core.telegram.org/bots/api#botcommandscope
 */
class BotCommandScope extends Type
{
    /**
     * getCheckField function
     * name : field and Variable name to identify data type
     * datas : values: key(field data) =>  value(data class)
     *
     * @return array name and datas
     */
    private function getCheckField()
    {
        return [
            'name' => 'type',
            'datas' => [
                BotCommandScopeType::DEFAULT => BotCommandScopeDefault::class,
                BotCommandScopeType::ALL_PRIVATE_CHATS => BotCommandScopeAllPrivateChats::class,
                BotCommandScopeType::ALL_GROUP_CHATS => BotCommandScopeAllGroupChats::class,
                BotCommandScopeType::ALL_CHAT_ADMINISTRATORS => BotCommandScopeAllChatAdministrators::class,
                BotCommandScopeType::CHAT => BotCommandScopeChat::class,
                BotCommandScopeType::CHAT_ADMINISTRATORS => BotCommandScopeChatAdministrators::class,
                BotCommandScopeType::CHAT_MEMBER => BotCommandScopeChatMember::class,
            ],
        ];
    }
}
