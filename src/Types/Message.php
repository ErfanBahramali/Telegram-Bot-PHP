<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;
use TelegramBotPHP\Types\Games\Game;
use TelegramBotPHP\Types\Payments\Invoice;
use TelegramBotPHP\Types\Payments\SuccessfulPayment;
use TelegramBotPHP\Types\Stickers\Sticker;
use TelegramBotPHP\Types\TelegramPassport\PassportData;

/**
 * Message Class
 *
 * This object represents a message.
 *
 * @link https://core.telegram.org/bots/api#message
 */
class Message extends Type
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
            'from' => User::class,
            'senderChat' => Chat::class,
            'chat' => Chat::class,
            'forwardFrom' => User::class,
            'forwardFromChat' => Chat::class,
            'replyToMessage' => Message::class,
            'viaBot' => User::class,
            'animation' => Animation::class,
            'audio' => Audio::class,
            'document' => Document::class,
            'sticker' => Sticker::class,
            'video' => Video::class,
            'videoNote' => VideoNote::class,
            'voice' => Voice::class,
            'contact' => Contact::class,
            'dice' => Dice::class,
            'game' => Game::class,
            'poll' => Poll::class,
            'venue' => Venue::class,
            'location' => Location::class,
            'leftChatMember' => User::class,
            'messageAutoDeleteTimerChanged' => MessageAutoDeleteTimerChanged::class,
            'pinnedMessage' => Message::class,
            'invoice' => Invoice::class,
            'successfulPayment' => SuccessfulPayment::class,
            'passportData' => PassportData::class,
            'proximityAlertTriggered' => ProximityAlertTriggered::class,
            'voiceChatScheduled' => VoiceChatScheduled::class,
            'voiceChatStarted' => VoiceChatStarted::class,
            'voiceChatEnded' => VoiceChatEnded::class,
            'voiceChatParticipantsInvited' => VoiceChatParticipantsInvited::class,
            'replyMarkup' => InlineKeyboardMarkup::class,
        ];
    }

    /**
     * getTypeArrayVariables function
     * To specify the type of value of arrays Variables
     *
     * @return array
     */
    protected function getTypeArrayVariables()
    {
        return [
            'entities' => MessageEntity::class,
            'photo' => PhotoSize::class,
            'captionEntities' => MessageEntity::class,
            'newChatMembers' => User::class,
            'newChatPhoto' => PhotoSize::class,
        ];
    }

	/**
	 * Unique message identifier inside this chat
	 */
	public int $messageId;

	/**
	 * [optional] Sender, empty for messages sent to channels
	 */
	public User $from;

	/**
	 * [optional] Sender of the message, sent on behalf of a chat. The channel itself for channel messages. The supergroup itself for messages from anonymous group administrators. The linked channel for messages automatically forwarded to the discussion group
	 */
	public Chat $senderChat;

	/**
	 * Date the message was sent in Unix time
	 */
	public int $date;

	/**
	 * Conversation the message belongs to
	 */
	public Chat $chat;

	/**
	 * [optional] For forwarded messages, sender of the original message
	 */
	public User $forwardFrom;

	/**
	 * [optional] For messages forwarded from channels or from anonymous administrators, information about the original sender chat
	 */
	public Chat $forwardFromChat;

	/**
	 * [optional] For messages forwarded from channels, identifier of the original message in the channel
	 */
	public int $forwardFromMessageId;

	/**
	 * [optional] For messages forwarded from channels, signature of the post author if present
	 */
	public string $forwardSignature;

	/**
	 * [optional] Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
	 */
	public string $forwardSenderName;

	/**
	 * [optional] For forwarded messages, date the original message was sent in Unix time
	 */
	public int $forwardDate;

	/**
	 * [optional] For replies, the original message. Note that the Message object in this field will not contain further *reply_to_message* fields even if it itself is a reply.
	 */
	public Message $replyToMessage;

	/**
	 * [optional] Bot through which the message was sent
	 */
	public User $viaBot;

	/**
	 * [optional] Date the message was last edited in Unix time
	 */
	public int $editDate;

	/**
	 * [optional] The unique identifier of a media message group this message belongs to
	 */
	public string $mediaGroupId;

	/**
	 * [optional] Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
	 */
	public string $authorSignature;

	/**
	 * [optional] For text messages, the actual UTF-8 text of the message, 0-4096 characters
	 */
	public string $text;

	/**
	 * [optional] For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
	 */
	public array $entities;

	/**
	 * [optional] Message is an animation, information about the animation. For backward compatibility, when this field is set, the *document* field will also be set
	 */
	public Animation $animation;

	/**
	 * [optional] Message is an audio file, information about the file
	 */
	public Audio $audio;

	/**
	 * [optional] Message is a general file, information about the file
	 */
	public Document $document;

	/**
	 * [optional] Message is a photo, available sizes of the photo
	 */
	public array $photo;

	/**
	 * [optional] Message is a sticker, information about the sticker
	 */
	public Sticker $sticker;

	/**
	 * [optional] Message is a video, information about the video
	 */
	public Video $video;

	/**
	 * [optional] Message is a [video note](https://telegram.org/blog/video-messages-and-telescope), information about the video message
	 */
	public VideoNote $videoNote;

	/**
	 * [optional] Message is a voice message, information about the file
	 */
	public Voice $voice;

	/**
	 * [optional] Caption for the animation, audio, document, photo, video or voice, 0-1024 characters
	 */
	public string $caption;

	/**
	 * [optional] For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
	 */
	public array $captionEntities;

	/**
	 * [optional] Message is a shared contact, information about the contact
	 */
	public Contact $contact;

	/**
	 * [optional] Message is a dice with random value
	 */
	public Dice $dice;

	/**
	 * [optional] Message is a game, information about the game. [More about games »](https://core.telegram.org/bots/api#games)
	 */
	public Game $game;

	/**
	 * [optional] Message is a native poll, information about the poll
	 */
	public Poll $poll;

	/**
	 * [optional] Message is a venue, information about the venue. For backward compatibility, when this field is set, the *location* field will also be set
	 */
	public Venue $venue;

	/**
	 * [optional] Message is a shared location, information about the location
	 */
	public Location $location;

	/**
	 * [optional] New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
	 */
	public array $newChatMembers;

	/**
	 * [optional] A member was removed from the group, information about them (this member may be the bot itself)
	 */
	public User $leftChatMember;

	/**
	 * [optional] A chat title was changed to this value
	 */
	public string $newChatTitle;

	/**
	 * [optional] A chat photo was change to this value
	 */
	public array $newChatPhoto;

	/**
	 * [optional] Service message: the chat photo was deleted
	 */
	public bool $deleteChatPhoto;

	/**
	 * [optional] Service message: the group has been created
	 */
	public bool $groupChatCreated;

	/**
	 * [optional] Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
	 */
	public bool $supergroupChatCreated;

	/**
	 * [optional] Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
	 */
	public bool $channelChatCreated;

	/**
	 * [optional] Service message: auto-delete timer settings changed in the chat
	 */
	public MessageAutoDeleteTimerChanged $messageAutoDeleteTimerChanged;

	/**
	 * [optional] The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
	 */
	public int $migrateToChatId;

	/**
	 * [optional] The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
	 */
	public int $migrateFromChatId;

	/**
	 * [optional] Specified message was pinned. Note that the Message object in this field will not contain further *reply_to_message* fields even if it is itself a reply.
	 */
	public Message $pinnedMessage;

	/**
	 * [optional] Message is an invoice for a [payment](https://core.telegram.org/bots/api#payments), information about the invoice. [More about payments »](https://core.telegram.org/bots/api#payments)
	 */
	public Invoice $invoice;

	/**
	 * [optional] Message is a service message about a successful payment, information about the payment. [More about payments »](https://core.telegram.org/bots/api#payments)
	 */
	public SuccessfulPayment $successfulPayment;

	/**
	 * [optional] The domain name of the website on which the user has logged in. [More about Telegram Login »](https://core.telegram.org/bots/api/widgets/login)
	 */
	public string $connectedWebsite;

	/**
	 * [optional] Telegram Passport data
	 */
	public PassportData $passportData;

	/**
	 * [optional] Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
	 */
	public ProximityAlertTriggered $proximityAlertTriggered;

	/**
	 * [optional] Service message: voice chat scheduled
	 */
	public VoiceChatScheduled $voiceChatScheduled;

	/**
	 * [optional] Service message: voice chat started
	 */
	public VoiceChatStarted $voiceChatStarted;

	/**
	 * [optional] Service message: voice chat ended
	 */
	public VoiceChatEnded $voiceChatEnded;

	/**
	 * [optional] Service message: new participants invited to a voice chat
	 */
	public VoiceChatParticipantsInvited $voiceChatParticipantsInvited;

	/**
	 * [optional] Inline keyboard attached to the message. `login_url` buttons are represented as ordinary `url` buttons.
	 */
	public InlineKeyboardMarkup $replyMarkup;

}