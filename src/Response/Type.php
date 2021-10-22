<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Response;

use TelegramBotPHP\Types\BotCommand;
use TelegramBotPHP\Types\Chat;
use TelegramBotPHP\Types\ChatInviteLink;
use TelegramBotPHP\Types\ChatMember\ChatMember;
use TelegramBotPHP\Types\File;
use TelegramBotPHP\Types\Games\GameHighScore;
use TelegramBotPHP\Types\Message;
use TelegramBotPHP\Types\MessageId;
use TelegramBotPHP\Types\Poll;
use TelegramBotPHP\Types\Stickers\StickerSet;
use TelegramBotPHP\Types\Update;
use TelegramBotPHP\Types\User;
use TelegramBotPHP\Types\UserProfilePhotos;
use TelegramBotPHP\Types\WebhookInfo;

/**
 * Type Class
 */
class Type
{
    /**
     * keys = methods
     * values = response types on success
     * On success, the (value) is returned.
     *
     * If the value is an array and has only one value That is, the result is an array of object in the array
     */
    private static array $onSuccess = [
        'getUpdates' => [Update::class],
        'setWebhook' => true,
        'deleteWebhook' => true,
        'getWebhookInfo' => WebhookInfo::class,

        'getMe' => User::class,
        'logOut' => true,
        'close' => true,
        'sendMessage' => Message::class,
        'forwardMessage' => Message::class,
        'copyMessage' => MessageId::class,
        'sendPhoto' => Message::class,
        'sendAudio' => Message::class,
        'sendDocument' => Message::class,
        'sendVideo' => Message::class,
        'sendAnimation' => Message::class,
        'sendVoice' => Message::class,
        'sendVideoNote' => Message::class,
        'sendMediaGroup' => [Message::class],
        'sendLocation' => Message::class,
        'editMessageLiveLocation' => Message::class, // or true
        'stopMessageLiveLocation' => Message::class, // or true
        'sendVenue' => Message::class,
        'sendContact' => Message::class,
        'sendPoll' => Message::class,
        'sendDice' => Message::class,
        'sendChatAction' => true,
        'getUserProfilePhotos' => UserProfilePhotos::class,
        'getFile' => File::class,
        'banChatMember' => true,
        'unbanChatMember' => true,
        'restrictChatMember' => true,
        'promoteChatMember' => true,
        'setChatAdministratorCustomTitle' => true,
        'setChatPermissions' => true,
        'exportChatInviteLink' => 'string',
        'createChatInviteLink' => ChatInviteLink::class,
        'editChatInviteLink' => ChatInviteLink::class,
        'revokeChatInviteLink' => ChatInviteLink::class,
        'setChatPhoto' => true,
        'deleteChatPhoto' => true,
        'setChatTitle' => true,
        'setChatDescription' => true,
        'pinChatMessage' => true,
        'unpinChatMessage' => true,
        'unpinAllChatMessages' => true,
        'leaveChat' => true,
        'getChat' => Chat::class,
        'getChatAdministrators' => [ChatMember::class],
        'getChatMemberCount' => 'int',
        'getChatMember' => ChatMember::class,
        'setChatStickerSet' => true,
        'deleteChatStickerSet' => true,
        'answerCallbackQuery' => true,
        'setMyCommands' => true,
        'deleteMyCommands' => true,
        'getMyCommands' => BotCommand::class, // or empty_list

        'editMessageText' => Message::class, // or true
        'editMessageCaption' => Message::class, // or true
        'editMessageMedia' => Message::class, // or true
        'editMessageReplyMarkup' => Message::class, // or true
        'stopPoll' => Poll::class,
        'deleteMessage' => true,

        'sendSticker' => Message::class,
        'getStickerSet' => StickerSet::class,
        'uploadStickerFile' => File::class,
        'createNewStickerSet' => true,
        'addStickerToSet' => true,
        'setStickerPositionInSet' => true,
        'deleteStickerFromSet' => true,
        'setStickerSetThumb' => true,

        'answerInlineQuery' => true,

        'sendInvoice' => Message::class,
        'answerShippingQuery' => true,
        'answerPreCheckoutQuery' => true,

        'setPassportDataErrors' => true,

        'sendGame' => Message::class,
        'setGameScore' => Message::class, // or true
        'getGameHighScores' => [GameHighScore::class],
    ];

    /**
     * getOnSuccess function
     *
     * @param string $method
     * @return void
     */
    public static function getOnSuccess(string $method)
    {
        return self::$onSuccess[$method];
    }
}
