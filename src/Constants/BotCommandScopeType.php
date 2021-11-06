<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Constants;

/**
 * @link https://core.telegram.org/bots/api#botcommandscope
 */
class BotCommandScopeType
{
    /**
     * Default Bot CommandScope Type
     * @link https://core.telegram.org/bots/api#botcommandscopedefault
     */
    public const DEFAULT = 'default';

    /**
     * All Private Chats Bot CommandScope Type
     * @link https://core.telegram.org/bots/api#botcommandscopeallprivatechats
     */
    public const ALL_PRIVATE_CHATS = 'all_private_chats';

    /**
     * All Group Chats Bot CommandScope Type
     * @link https://core.telegram.org/bots/api#botcommandscopeallgroupchats
     */
    public const ALL_GROUP_CHATS = 'all_group_chats';

    /**
     * All Chat Administrators Bot CommandScope Type
     * @link https://core.telegram.org/bots/api#botcommandscopeallchatadministrators
     */
    public const ALL_CHAT_ADMINISTRATORS = 'all_chat_administrators';

    /**
     * Chat Bot CommandScope Type
     * @link https://core.telegram.org/bots/api#botcommandscopechat
     */
    public const CHAT = 'chat';

    /**
     * Chat Administrators Bot CommandScope Type
     * @link https://core.telegram.org/bots/api#botcommandscopechatadministrators
     */
    public const CHAT_ADMINISTRATORS = 'chat_administrators';

    /**
     * Chat Member Bot CommandScope Type
     * @link https://core.telegram.org/bots/api#botcommandscopechatmember
     */
    public const CHAT_MEMBER = 'chat_member';
}
