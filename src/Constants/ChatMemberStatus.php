<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Constants;

/**
 * @link https://core.telegram.org/bots/api#chatmember
 */
class ChatMemberStatus
{
    /**
     * Creator Chat Member Status ( ChatMemberOwner )
     * @link https://core.telegram.org/bots/api#chatmemberowner
     */
    public const CREATOR = 'creator';

    /**
     * Administrator Chat Member Status ( ChatMemberAdministrator )
     * @link https://core.telegram.org/bots/api#chatmemberadministrator
     */
    public const ADMINISTRATOR = 'administrator';

    /**
     * Member Chat Member Status ( ChatMemberMember )
     * @link https://core.telegram.org/bots/api#chatmembermember
     */
    public const MEMBER = 'member';

    /**
     * Restricted Chat Member Status ( ChatMemberRestricted )
     * @link https://core.telegram.org/bots/api#chatmemberrestricted
     */
    public const RESTRICTED = 'restricted';

    /**
     * Left Chat Member Status ( ChatMemberLeft )
     * @link https://core.telegram.org/bots/api#chatmemberleft
     */
    public const LEFT = 'left';

    /**
     * Kicked Chat Member Status ( ChatMemberBanned )
     * @link https://core.telegram.org/bots/api#chatmemberbanned
     */
    public const KICKED = 'kicked';
}
