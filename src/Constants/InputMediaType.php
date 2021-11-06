<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Constants;

/**
 * @link https://core.telegram.org/bots/api#inputmedia
 */
class InputMediaType
{
    /**
     * Animation Input Media Type
     * @link https://core.telegram.org/bots/api#inputmediaanimation
     */
    public const ANIMATION = 'animation';

    /**
     * Document Input Media Type
     * @link https://core.telegram.org/bots/api#inputmediadocument
     */
    public const DOCUMENT = 'document';

    /**
     * Audio Input Media Type
     * @link https://core.telegram.org/bots/api#inputmediaaudio
     */
    public const AUDIO = 'audio';

    /**
     * Photo Input Media Type
     * @link https://core.telegram.org/bots/api#inputmediaphoto
     */
    public const PHOTO = 'photo';

    /**
     * Video Input Media Type
     * @link https://core.telegram.org/bots/api#inputmediavideo
     */
    public const VIDEO = 'video';
}
