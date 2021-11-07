<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InputMedia;

use TelegramBotPHP\Constants\InputMediaType;
use TelegramBotPHP\Type;
use TelegramBotPHP\Types\MessageEntity;

/**
 * InputMedia Class
 *
 * This object represents the content of a media message to be sent. It should be one of
 *
    - [InputMediaAnimation](https://core.telegram.org/bots/api#inputmediaanimation)
    - [InputMediaDocument](https://core.telegram.org/bots/api#inputmediadocument)
    - [InputMediaAudio](https://core.telegram.org/bots/api#inputmediaaudio)
    - [InputMediaPhoto](https://core.telegram.org/bots/api#inputmediaphoto)
    - [InputMediaVideo](https://core.telegram.org/bots/api#inputmediavideo)
 *
 * @link https://core.telegram.org/bots/api#inputmedia
 */
class InputMedia extends Type
{
    /**
     * getTypeArrayVariables function
     * To specify the type of value of arrays Variables
     *
     * @return array
     */
    protected function getTypeArrayVariables()
    {
        return [
            'captionEntities' => MessageEntity::class,
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
            'name' => 'type',
            'datas' => [
                InputMediaType::PHOTO => InputMediaPhoto::class,
                InputMediaType::VIDEO => InputMediaVideo::class,
                InputMediaType::ANIMATION => InputMediaAnimation::class,
                InputMediaType::AUDIO => InputMediaAudio::class,
                InputMediaType::DOCUMENT => InputMediaDocument::class,
            ],
        ];
    }
}
