<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\ChatMember;

use TelegramBotPHP\Constants\ChatMemberStatus;
use TelegramBotPHP\Type;
use TelegramBotPHP\Types\User;

/**
 * ChatMember Class
 *
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:
 *
    - [ChatMemberOwner](https://core.telegram.org/bots/api#chatmemberowner)
    - [ChatMemberAdministrator](https://core.telegram.org/bots/api#chatmemberadministrator)
    - [ChatMemberMember](https://core.telegram.org/bots/api#chatmembermember)
    - [ChatMemberRestricted](https://core.telegram.org/bots/api#chatmemberrestricted)
    - [ChatMemberLeft](https://core.telegram.org/bots/api#chatmemberleft)
    - [ChatMemberBanned](https://core.telegram.org/bots/api#chatmemberbanned)
 *
 * @link https://core.telegram.org/bots/api#chatmember
 */
class ChatMember extends Type
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
            'user' => User::class,
        ];
    }

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
            'name' => 'status',
            'datas' => [
                ChatMemberStatus::CREATOR => ChatMemberOwner::class,
                ChatMemberStatus::ADMINISTRATOR => ChatMemberAdministrator::class,
                ChatMemberStatus::MEMBER => ChatMemberMember::class,
                ChatMemberStatus::RESTRICTED => ChatMemberRestricted::class,
                ChatMemberStatus::LEFT => ChatMemberLeft::class,
                ChatMemberStatus::KICKED => ChatMemberBanned::class,
            ],
        ];
    }
}
