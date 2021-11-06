<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Constants;

/**
 * @link https://core.telegram.org/bots/api#sendchataction
 */
class ChatAction
{
    /**
     * Typing chat action
     * typing for text messages
     * @link https://core.telegram.org/bots/api#sendmessage
     */
    public const TYPING = 'typing';

    /**
     * Upload Photo chat action
     * upload_photo for photos
     * @link https://core.telegram.org/bots/api#sendphoto
     */
    public const UPLOAD_PHOTO = 'upload_photo';

    /**
     * Record Video chat action
     * record_video or upload_video for videos
     * @link https://core.telegram.org/bots/api#sendvideo
     */
    public const RECORD_VIDEO = 'record_video';

    /**
     * Upload Video chat action
     * record_video or upload_video for videos
     * @link https://core.telegram.org/bots/api#sendvideo
     */
    public const UPLOAD_VIDEO = 'upload_video';

    /**
     * Record Voice chat action
     * record_voice or upload_voice for voice notes
     * @link https://core.telegram.org/bots/api#sendvoice
     */
    public const RECORD_VOICE = 'record_voice';

    /**
     * Upload Voice chat action
     * record_voice or upload_voice for voice notes
     * @link https://core.telegram.org/bots/api#sendvoice
     */
    public const UPLOAD_VOICE = 'upload_voice';

    /**
     * Upload Document chat action
     * upload_document for general files
     * @link https://core.telegram.org/bots/api#senddocument
     */
    public const UPLOAD_DOCUMENT = 'upload_document';

    /**
     * Choose Sticker chat action
     * choose_sticker for stickers
     * @link https://core.telegram.org/bots/api#sendsticker
     */
    public const CHOOSE_STICKER = 'choose_sticker';

    /**
     * Find Location chat action
     * find_location for location data
     * @link https://core.telegram.org/bots/api#sendlocation
     */
    public const FIND_LOCATION = 'find_location';

    /**
     * Record Video Note chat action
     * record_video_note or upload_video_note for video notes
     * @link https://core.telegram.org/bots/api#sendvideonote
     */
    public const RECORD_VIDEO_NOTE = 'record_video_note';

    /**
     * Upload Video note chat action
     * record_video_note or upload_video_note for video notes
     * @link https://core.telegram.org/bots/api#sendvideonote
     */
    public const UPLOAD_VIDEO_NOTE = 'upload_video_note';
}
