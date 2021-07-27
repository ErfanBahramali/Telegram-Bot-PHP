<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\BotCommandScope;

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
     * name : filed and Variable name to identify data type
     * datas : values: key(filed data) =>  value(data class)
     * 
     * @return array name and datas
     */
    protected function getCheckField()
    {
        return [
            'name' => 'type',
            'datas' => [
                'default' => BotCommandScopeDefault::class,
                'all_private_chats' => BotCommandScopeAllPrivateChats::class,
                'all_group_chats' => BotCommandScopeAllGroupChats::class,
                'all_chat_administrators' => BotCommandScopeAllChatAdministrators::class,
                'chat' => BotCommandScopeChat::class,
                'chat_administrators' => BotCommandScopeChatAdministrators::class,
                'chat_member' => BotCommandScopeChatMember::class,
            ],
        ];
    }
}
