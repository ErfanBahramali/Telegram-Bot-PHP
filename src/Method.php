<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP;

use TelegramBotPHP\Bot;
use TelegramBotPHP\Format;
use TelegramBotPHP\Helpers\Helper;
use TelegramBotPHP\Response\Response;

/** 
 * Available methods
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods.
 * Use either URL query string or application/json or application/x-www-form-urlencoded or multipart/form-data for passing parameters in Bot API requests.
 * On successful call, a JSON-object containing the result will be returned.
 * @link https://core.telegram.org/bots/api#available-methods
 * 
 * 
 * 
 * @method static Response|array getUpdates(array $parameters, string $token = null) Use this method to receive incoming updates using long polling ([wiki](https://en.wikipedia.org/wiki/Push_technology#Long_polling)). An Array of [Update](https://core.telegram.org/bots/api#update) objects is returned.
 * @method static Response|array setWebhook(array $parameters, string $token = null) Use this method to specify a url and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified url, containing a JSON-serialized [Update](https://core.telegram.org/bots/api#update). In case of an unsuccessful request, we will give up after a reasonable amount of attempts. Returns *True* on success. If you'd like to make sure that the Webhook request comes from Telegram, we recommend using a secret path in the URL, e.g. `https://www.example.com/<token>`. Since nobody else knows your bot's token, you can be pretty sure it's us.
 * @method static Response|array deleteWebhook(array $parameters, string $token = null) Use this method to remove webhook integration if you decide to switch back to [getUpdates](https://core.telegram.org/bots/api#getupdates). Returns *True* on success.
 * @method static Response|array getWebhookInfo(string $token = null) Use this method to get current webhook status. Requires no parameters. On success, returns a [WebhookInfo](https://core.telegram.org/bots/api#webhookinfo) object. If the bot is using [getUpdates](https://core.telegram.org/bots/api#getupdates), will return an object with the *url* field empty.
 * 
 * @method static Response|array getMe(string $token = null) A simple method for testing your bot's auth token. Requires no parameters. Returns basic information about the bot in form of a [User](https://core.telegram.org/bots/api#user) object.
 * @method static Response|array logOut(string $token = null) Use this method to log out from the cloud Bot API server before launching the bot locally. You **must** log out the bot before running it locally, otherwise there is no guarantee that the bot will receive updates. After a successful call, you can immediately log in on a local server, but will not be able to log in back to the cloud Bot API server for 10 minutes. Returns *True* on success. Requires no parameters.
 * @method static Response|array close(string $token = null) Use this method to close the bot instance before moving it from one local server to another. You need to delete the webhook before calling this method to ensure that the bot isn't launched again after server restart. The method will return error 429 in the first 10 minutes after the bot is launched. Returns *True* on success. Requires no parameters.
 * 
//  * @method static Response|array sendMessage(array $parameters, string $token = null)  Use this method to send text messages. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. 
//  * @method static Response|array forwardMessage(array $parameters, string $token = null)  Use this method to forward messages of any kind. Service messages can't be forwarded. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. 
//  * @method static Response|array copyMessage(array $parameters, string $token = null)  Use this method to copy messages of any kind. Service messages and invoice messages can't be copied. The method is analogous to the method [forwardMessage](https://core.telegram.org/bots/api#forwardmessage), but the copied message doesn't have a link to the original message. Returns the [MessageId](https://core.telegram.org/bots/api#messageid) of the sent message on success. 
//  * @method static Response|array sendPhoto(array $parameters, string $token = null)  Use this method to send photos. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. 
//  * @method static Response|array sendAudio(array $parameters, string $token = null)  Use this method to send audio files, if you want Telegram clients to display them in the music player. Your audio must be in the .MP3 or .M4A format. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future. For sending voice messages, use the [sendVoice](https://core.telegram.org/bots/api#sendvoice) method instead. 
//  * @method static Response|array sendDocument(array $parameters, string $token = null)  Use this method to send general files. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. Bots can currently send files of any type of up to 50 MB in size, this limit may be changed in the future. 
//  * @method static Response|array sendVideo(array $parameters, string $token = null)  Use this method to send video files, Telegram clients support mp4 videos (other formats may be sent as [Document](https://core.telegram.org/bots/api#document)). On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future. 
 * @method static Response|array sendAnimation(array $parameters, string $token = null)  Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future. 
 * @method static Response|array sendVoice(array $parameters, string $token = null)  Use this method to send audio files, if you want Telegram clients to display the file as a playable voice message. For this to work, your audio must be in an .OGG file encoded with OPUS (other formats may be sent as [Audio](https://core.telegram.org/bots/api#audio) or [Document](https://core.telegram.org/bots/api#document)). On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. Bots can currently send voice messages of up to 50 MB in size, this limit may be changed in the future. 
 * @method static Response|array sendVideoNote(array $parameters, string $token = null)  As of [v.4.0](https://telegram.org/blog/video-messages-and-telescope), Telegram clients support rounded square mp4 videos of up to 1 minute long. Use this method to send video messages. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. 
 * @method static Response|array sendMediaGroup(array $parameters, string $token = null)  Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of [Messages](https://core.telegram.org/bots/api#message) that were sent is returned. 
 * @method static Response|array sendLocation(array $parameters, string $token = null)  Use this method to send point on the map. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. 
 * @method static Response|array editMessageLiveLocation(array $parameters, string $token = null)  Use this method to edit live location messages. A location can be edited until its *live_period* expires or editing is explicitly disabled by a call to [stopMessageLiveLocation](https://core.telegram.org/bots/api#stopmessagelivelocation). On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api#message) is returned, otherwise *True* is returned. 
 * @method static Response|array stopMessageLiveLocation(array $parameters, string $token = null)  Use this method to stop updating a live location message before *live_period* expires. On success, if the message was sent by the bot, the sent [Message](https://core.telegram.org/bots/api#message) is returned, otherwise *True* is returned. 
 * @method static Response|array sendVenue(array $parameters, string $token = null)  Use this method to send information about a venue. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. 
 * @method static Response|array sendContact(array $parameters, string $token = null)  Use this method to send phone contacts. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. 
 * @method static Response|array sendPoll(array $parameters, string $token = null)  Use this method to send a native poll. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. 
 * @method static Response|array sendDice(array $parameters, string $token = null)  Use this method to send an animated emoji that will display a random value. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. 
 * @method static Response|array sendChatAction(array $parameters, string $token = null)  Use this method when you need to tell the user that something is happening on the bot's side. The status is set for 5 seconds or less (when a message arrives from your bot, Telegram clients clear its typing status). Returns *True* on success. <blockquote> Example: The [ImageBot](https://t.me/imagebot) needs some time to process a request and upload the image. Instead of sending a text message along the lines of “Retrieving image, please wait…”, the bot may use [sendChatAction](https://core.telegram.org/bots/api#sendchataction) with *action* = *upload_photo*. The user will see a “sending photo” status for the bot. </blockquote> We only recommend using this method when a response|array from the bot will take a **noticeable** amount of time to arrive. 
 * @method static Response|array getUserProfilePhotos(array $parameters, string $token = null)  Use this method to get a list of profile pictures for a user. Returns a [UserProfilePhotos](https://core.telegram.org/bots/api#userprofilephotos) object. 
 * @method static Response|array getFile(array $parameters, string $token = null)  Use this method to get basic info about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a [File](https://core.telegram.org/bots/api#file) object is returned. The file can then be downloaded via the link `https://api.telegram.org/file/bot<token>/<file_path>`, where `<file_path>` is taken from the response|array. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling [getFile](https://core.telegram.org/bots/api#getfile) again. 
 * @method static Response|array banChatMember(array $parameters, string $token = null)  Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless [unbanned](https://core.telegram.org/bots/api#unbanchatmember) first. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns *True* on success. 
 * @method static Response|array unbanChatMember(array $parameters, string $token = null)  Use this method to unban a previously banned user in a supergroup or channel. The user will **not** return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be **removed** from the chat. If you don't want this, use the parameter *only_if_banned*. Returns *True* on success. 
 * @method static Response|array restrictChatMember(array $parameters, string $token = null)  Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate admin rights. Pass *True* for all permissions to lift restrictions from a user. Returns *True* on success. 
 * @method static Response|array promoteChatMember(array $parameters, string $token = null)  Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Pass *False* for all boolean parameters to demote a user. Returns *True* on success. 
 * @method static Response|array setChatAdministratorCustomTitle(array $parameters, string $token = null)  Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns *True* on success. 
 * @method static Response|array setChatPermissions(array $parameters, string $token = null)  Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the *can_restrict_members* admin rights. Returns *True* on success. 
 * @method static Response|array exportChatInviteLink(array $parameters, string $token = null)  Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns the new invite link as *String* on success. 
 * @method static Response|array createChatInviteLink(array $parameters, string $token = null)  Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. The link can be revoked using the method [revokeChatInviteLink](https://core.telegram.org/bots/api#revokechatinvitelink). Returns the new invite link as [ChatInviteLink](https://core.telegram.org/bots/api#chatinvitelink) object. 
 * @method static Response|array editChatInviteLink(array $parameters, string $token = null)  Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns the edited invite link as a [ChatInviteLink](https://core.telegram.org/bots/api#chatinvitelink) object. 
 * @method static Response|array revokeChatInviteLink(array $parameters, string $token = null)  Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns the revoked invite link as [ChatInviteLink](https://core.telegram.org/bots/api#chatinvitelink) object. 
 * @method static Response|array setChatPhoto(array $parameters, string $token = null)  Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns *True* on success. 
 * @method static Response|array deleteChatPhoto(array $parameters, string $token = null)  Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns *True* on success. 
 * @method static Response|array setChatTitle(array $parameters, string $token = null)  Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns *True* on success. 
 * @method static Response|array setChatDescription(array $parameters, string $token = null)  Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Returns *True* on success. 
 * @method static Response|array pinChatMessage(array $parameters, string $token = null)  Use this method to add a message to the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' admin right in a supergroup or 'can_edit_messages' admin right in a channel. Returns *True* on success. 
 * @method static Response|array unpinChatMessage(array $parameters, string $token = null)  Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' admin right in a supergroup or 'can_edit_messages' admin right in a channel. Returns *True* on success. 
 * @method static Response|array unpinAllChatMessages(array $parameters, string $token = null)  Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can_pin_messages' admin right in a supergroup or 'can_edit_messages' admin right in a channel. Returns *True* on success. 
 * @method static Response|array leaveChat(array $parameters, string $token = null)  Use this method for your bot to leave a group, supergroup or channel. Returns *True* on success. 
 * @method static Response|array getChat(array $parameters, string $token = null)  Use this method to get up to date information about the chat (current name of the user for one-on-one conversations, current username of a user, group or channel, etc.). Returns a [Chat](https://core.telegram.org/bots/api#chat) object on success. 
 * @method static Response|array getChatAdministrators(array $parameters, string $token = null)  Use this method to get a list of administrators in a chat. On success, returns an Array of [ChatMember](https://core.telegram.org/bots/api#chatmember) objects that contains information about all chat administrators except other bots. If the chat is a group or a supergroup and no administrators were appointed, only the creator will be returned. 
 * @method static Response|array getChatMemberCount(array $parameters, string $token = null)  Use this method to get the number of members in a chat. Returns *Int* on success. 
 * @method static Response|array getChatMember(array $parameters, string $token = null)  Use this method to get information about a member of a chat. Returns a [ChatMember](https://core.telegram.org/bots/api#chatmember) object on success. 
 * @method static Response|array setChatStickerSet(array $parameters, string $token = null)  Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Use the field *can_set_sticker_set* optionally returned in [getChat](https://core.telegram.org/bots/api#getchat) requests to check if the bot can use this method. Returns *True* on success. 
 * @method static Response|array deleteChatStickerSet(array $parameters, string $token = null)  Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate admin rights. Use the field *can_set_sticker_set* optionally returned in [getChat](https://core.telegram.org/bots/api#getchat) requests to check if the bot can use this method. Returns *True* on success. 
 * @method static Response|array answerCallbackQuery(array $parameters, string $token = null)  Use this method to send answers to callback queries sent from [inline keyboards](https://core.telegram.org/bots/api/bots#inline-keyboards-and-on-the-fly-updating). The answer will be displayed to the user as a notification at the top of the chat screen or as an alert. On success, *True* is returned. <blockquote> Alternatively, the user can be redirected to the specified Game URL. For this option to work, you must first create a game for your bot via [@Botfather](https://t.me/botfather) and accept the terms. Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter. </blockquote> 
 * @method static Response|array setMyCommands(array $parameters, string $token = null)  Use this method to change the list of the bot's commands. See [<a href="https://core.telegram.org/bots#commands">https://core.telegram.org/bots#commands](https://core.telegram.org/bots#commands)</a> for more details about bot commands. Returns *True* on success. 
 * @method static Response|array deleteMyCommands(array $parameters, string $token = null)  Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, [higher level commands](https://core.telegram.org/bots/api#determining-list-of-commands) will be shown to affected users. Returns *True* on success. 
 * @method static Response|array getMyCommands(array $parameters, string $token = null)  Use this method to get the current list of the bot's commands for the given scope and user language. Returns Array of [BotCommand](https://core.telegram.org/bots/api#botcommand) on success. If commands aren't set, an empty list is returned. 
 * 
//  * @method static Response|array editMessageText(array $parameters, string $token = null) Use this method to edit text and [game](https://core.telegram.org/bots/api#games) messages. On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api#message) is returned, otherwise *True* is returned.
//  * @method static Response|array editMessageCaption(array $parameters, string $token = null) Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api#message) is returned, otherwise *True* is returned.
//  * @method static Response|array editMessageMedia(array $parameters, string $token = null) Use this method to edit animation, audio, document, photo, or video messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded. Use a previously uploaded file via its file_id or specify a URL. On success, if the edited message was sent by the bot, the edited [Message](https://core.telegram.org/bots/api#message) is returned, otherwise *True* is returned.
//  * @method static Response|array editMessageReplyMarkup(array $parameters, string $token = null) Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api#message) is returned, otherwise *True* is returned.
//  * @method static Response|array stopPoll(array $parameters, string $token = null) Use this method to stop a poll which was sent by the bot. On success, the stopped [Poll](https://core.telegram.org/bots/api#poll) with the final results is returned.
//  * @method static Response|array deleteMessage(array $parameters, string $token = null) Use this method to delete a message, including service messages, with the following limitations:
//     - A message can only be deleted if it was sent less than 48 hours ago.
//     - A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.
//     - Bots can delete outgoing messages in private chats, groups, and supergroups.
//     - Bots can delete incoming messages in private chats.
//     - Bots granted *can_post_messages* permissions can delete outgoing messages in channels.
//     - If the bot is an administrator of a group, it can delete any message there.
//     - If the bot has *can_delete_messages* permission in a supergroup or a channel, it can delete any message there.

//     Returns *True* on success.
 * 
 * @method static Response|array sendSticker(array $parameters, string $token = null) Use this method to send static .WEBP or [animated](https://telegram.org/blog/animated-stickers) .TGS stickers. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned.
 * @method static Response|array getStickerSet(array $parameters, string $token = null) Use this method to get a sticker set. On success, a [StickerSet](https://core.telegram.org/bots/api#stickerset) object is returned.
 * @method static Response|array uploadStickerFile(array $parameters, string $token = null) Use this method to upload a .PNG file with a sticker for later use in *createNewStickerSet* and *addStickerToSet* methods (can be used multiple times). Returns the uploaded [File](https://core.telegram.org/bots/api#file) on success.
 * @method static Response|array createNewStickerSet(array $parameters, string $token = null) Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. You **must** use exactly one of the fields *png_sticker* or *tgs_sticker*. Returns *True* on success.
 * @method static Response|array addStickerToSet(array $parameters, string $token = null) Use this method to add a new sticker to a set created by the bot. You **must** use exactly one of the fields *png_sticker* or *tgs_sticker*. Animated stickers can be added to animated sticker sets and only to them. Animated sticker sets can have up to 50 stickers. Static sticker sets can have up to 120 stickers. Returns *True* on success.
 * @method static Response|array setStickerPositionInSet(array $parameters, string $token = null) Use this method to move a sticker in a set created by the bot to a specific position. Returns *True* on success.
 * @method static Response|array deleteStickerFromSet(array $parameters, string $token = null) Use this method to delete a sticker from a set created by the bot. Returns *True* on success.
 * @method static Response|array setStickerSetThumb(array $parameters, string $token = null) Use this method to set the thumbnail of a sticker set. Animated thumbnails can be set for animated sticker sets only. Returns *True* on success.
 * 
 * @method static Response|array answerInlineQuery(array $parameters, string $token = null) Use this method to send answers to an inline query. On success, *True* is returned.No more than **50** results per query are allowed.
 * 
 * @method static Response|array sendInvoice(array $parameters, string $token = null) Use this method to send invoices. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned.
 * @method static Response|array answerShippingQuery(array $parameters, string $token = null) If you sent an invoice requesting a shipping address and the parameter *is_flexible* was specified, the Bot API will send an [Update](https://core.telegram.org/bots/api#update) with a *shipping_query* field to the bot. Use this method to reply to shipping queries. On success, True is returned.
 * @method static Response|array answerPreCheckoutQuery(array $parameters, string $token = null) Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an [Update](https://core.telegram.org/bots/api#update) with the field *pre_checkout_query*. Use this method to respond to such pre-checkout queries. On success, True is returned. **Note:** The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.
 * 
 * @method static Response|array setPassportDataErrors(array $parameters, string $token = null) Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the error must change). Returns *True* on success. Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.
 * 
 * @method static Response|array sendGame(array $parameters, string $token = null) Use this method to send a game. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned.
 * @method static Response|array setGameScore(array $parameters, string $token = null) Use this method to set the score of the specified user in a game. On success, if the message was sent by the bot, returns the edited [Message](https://core.telegram.org/bots/api#message), otherwise returns *True*. Returns an error, if the new score is not greater than the user's current score in the chat and *force* is *False*.
 * @method static Response|array getGameHighScores(array $parameters, string $token = null) Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. On success, returns an *Array* of [GameHighScore](https://core.telegram.org/bots/api#gamehighscore) objects.This method will currently return scores for the target user, plus two of their closest neighbors on each side. Will also return the top three users if the user and his neighbors are not among them. Please note that this behavior is subject to change.
 * 
 */
trait Method
{
    private static $parameterlessMethods = [
        'getWebhookInfo',
        'getMe',
        'logOut',
        'close'
    ];

    /** 
     * sendMessage function
     * 
     * Use this method to send text messages. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. 
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function sendMessage(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters && !isset($parameters['chat_id'])) {

            $parameters['chat_id'] = Helper::getChatId();
        }

        return self::__callStatic('sendMessage', [$parameters, $token]);
    }

    /** 
     * forwardMessage function
     * 
     * Use this method to forward messages of any kind. Service messages can't be forwarded. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned.
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function forwardMessage(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters) {

            if (!isset($parameters['chat_id'])) {

                $parameters['chat_id'] = Helper::getChatId();
            }

            if (!isset($parameters['from_chat_id'])) {

                $parameters['from_chat_id'] = Helper::getChatId();
            }

            if (!isset($parameters['message_id'])) {

                $parameters['message_id'] = Helper::getMessageId();
            }
        }

        return self::__callStatic('forwardMessage', [$parameters, $token]);
    }

    /** 
     * copyMessage function
     * 
     * Use this method to copy messages of any kind. Service messages and invoice messages can't be copied. The method is analogous to the method [forwardMessage](https://core.telegram.org/bots/api#forwardmessage), but the copied message doesn't have a link to the original message. Returns the [MessageId](https://core.telegram.org/bots/api#messageid) of the sent message on success.
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function copyMessage(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters) {

            if (!isset($parameters['chat_id'])) {

                $parameters['chat_id'] = Helper::getChatId();
            }

            if (!isset($parameters['from_chat_id'])) {

                $parameters['from_chat_id'] = Helper::getChatId();
            }

            if (!isset($parameters['message_id'])) {

                $parameters['message_id'] = Helper::getMessageId();
            }
        }

        return self::__callStatic('copyMessage', [$parameters, $token]);
    }

    /** 
     * sendPhoto function
     * 
     * Use this method to send photos. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned.
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function sendPhoto(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters && !isset($parameters['chat_id'])) {

            $parameters['chat_id'] = Helper::getChatId();
        }

        return self::__callStatic('sendPhoto', [$parameters, $token]);
    }

    /** 
     * sendAudio function
     * 
     * Use this method to send audio files, if you want Telegram clients to display them in the music player. Your audio must be in the .MP3 or .M4A format. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. Bots can currently send audio files of up to 50 MB in size, this limit may be changed in the future. For sending voice messages, use the [sendVoice](https://core.telegram.org/bots/api#sendvoice) method instead. 
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function sendAudio(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters && !isset($parameters['chat_id'])) {

            $parameters['chat_id'] = Helper::getChatId();
        }

        return self::__callStatic('sendAudio', [$parameters, $token]);
    }

    /** 
     * sendDocument function
     * 
     * Use this method to send general files. On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. Bots can currently send files of any type of up to 50 MB in size, this limit may be changed in the future. 
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function sendDocument(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters && !isset($parameters['chat_id'])) {

            $parameters['chat_id'] = Helper::getChatId();
        }

        return self::__callStatic('sendDocument', [$parameters, $token]);
    }

    /** 
     * sendVideo function
     * 
     * Use this method to send video files, Telegram clients support mp4 videos (other formats may be sent as [Document](https://core.telegram.org/bots/api#document)). On success, the sent [Message](https://core.telegram.org/bots/api#message) is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future. 
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function sendVideo(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters && !isset($parameters['chat_id'])) {

            $parameters['chat_id'] = Helper::getChatId();
        }

        return self::__callStatic('sendVideo', [$parameters, $token]);
    }

    /** 
     * editMessageText function
     * 
     * Use this method to edit text and [game](https://core.telegram.org/bots/api#games) messages. On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api#message) is returned, otherwise *True* is returned.
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function editMessageText(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters && !isset($parameters['inline_message_id'])) {

            if (!isset($parameters['chat_id'])) {

                $parameters['chat_id'] = Helper::getChatId();
            }

            if (!isset($parameters['message_id'])) {

                $parameters['message_id'] = Helper::getMessageId();
            }
        }

        return self::__callStatic('editMessageText', [$parameters, $token]);
    }

    /** 
     * editMessageCaption function
     * 
     * Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api#message) is returned, otherwise *True* is returned.
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function editMessageCaption(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters && !isset($parameters['inline_message_id'])) {

            if (!isset($parameters['chat_id'])) {

                $parameters['chat_id'] = Helper::getChatId();
            }

            if (!isset($parameters['message_id'])) {

                $parameters['message_id'] = Helper::getMessageId();
            }
        }

        return self::__callStatic('editMessageCaption', [$parameters, $token]);
    }

    /** 
     * editMessageMedia function
     * 
     * Use this method to edit animation, audio, document, photo, or video messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded. Use a previously uploaded file via its file_id or specify a URL. On success, if the edited message was sent by the bot, the edited [Message](https://core.telegram.org/bots/api#message) is returned, otherwise *True* is returned.
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function editMessageMedia(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters && !isset($parameters['inline_message_id'])) {

            if (!isset($parameters['chat_id'])) {

                $parameters['chat_id'] = Helper::getChatId();
            }

            if (!isset($parameters['message_id'])) {

                $parameters['message_id'] = Helper::getMessageId();
            }
        }

        return self::__callStatic('editMessageMedia', [$parameters, $token]);
    }

    /** 
     * editMessageReplyMarkup function
     * 
     * Use this method to edit only the reply markup of messages. On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api#message) is returned, otherwise *True* is returned.
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function editMessageReplyMarkup(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters && !isset($parameters['inline_message_id'])) {

            if (!isset($parameters['chat_id'])) {

                $parameters['chat_id'] = Helper::getChatId();
            }

            if (!isset($parameters['message_id'])) {

                $parameters['message_id'] = Helper::getMessageId();
            }
        }

        return self::__callStatic('editMessageReplyMarkup', [$parameters, $token]);
    }

    /** 
     * stopPoll function
     * 
     * Use this method to stop a poll which was sent by the bot. On success, the stopped [Poll](https://core.telegram.org/bots/api#poll) with the final results is returned.
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function stopPoll(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters) {

            if (!isset($parameters['chat_id'])) {

                $parameters['chat_id'] = Helper::getChatId();
            }

            if (!isset($parameters['message_id'])) {

                $parameters['message_id'] = Helper::getMessageId();
            }
        }

        return self::__callStatic('stopPoll', [$parameters, $token]);
    }

    /** 
     * deleteMessage function
     * 
     * Use this method to delete a message, including service messages, with the following limitations:
        - A message can only be deleted if it was sent less than 48 hours ago.
        - A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.
        - Bots can delete outgoing messages in private chats, groups, and supergroups.
        - Bots can delete incoming messages in private chats.
        - Bots granted *can_post_messages* permissions can delete outgoing messages in channels.
        - If the bot is an administrator of a group, it can delete any message there.
        - If the bot has *can_delete_messages* permission in a supergroup or a channel, it can delete any message there.

        Returns *True* on success.
     * 
     * @param array $parameters method Parameters
     * @param string $token
     * @return Response|array
     */
    public static function deleteMessage(array $parameters, string $token = null)
    {
        if (self::$config->autofillParameters) {

            if (!isset($parameters['chat_id'])) {

                $parameters['chat_id'] = Helper::getChatId();
            }

            if (!isset($parameters['message_id'])) {

                $parameters['message_id'] = Helper::getMessageId();
            }
        }

        return self::__callStatic('deleteMessage', [$parameters, $token]);
    }

    /** 
     * executeMethod function
     * 
     * @param string $name method name
     * @param array $parameters method Parameters
     * @return Response|array
     */
    public static function executeMethod(string $name, array $parameters = [])
    {
        $name = Format::toCamelCase($name);

        if (in_array($name, self::$parameterlessMethods)) {

            $parameters[1] = $parameters[0] ?? null;
            $parameters[0] = [];
        }

        if (isset($parameters[0]['reply_markup']) && is_array($parameters[0]['reply_markup'])) {

            $parameters[0]['reply_markup'] = json_encode($parameters[0]['reply_markup']);
        }

        return Bot::sendRequest($name, $parameters[0] ?? [], $parameters[1] ?? null);
    }

    /** 
     * __call function
     * 
     * @param string $name method name
     * @param array $parameters method Parameters
     * @return Response|array
     */
    public function __call(string $name, array $parameters = [])
    {
        return $this->executeMethod($name, $parameters);
    }

    /** 
     * __callStatic function
     * 
     * @param string $name method name
     * @param array $parameters method Parameters
     * @return Response|array
     */
    public static function __callStatic(string $name, array $parameters = [])
    {
        return self::executeMethod($name, $parameters);
    }
}
