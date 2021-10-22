<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\InlineMode\InlineQueryResult;

use TelegramBotPHP\Exceptions\BotException;
use TelegramBotPHP\Type;

/**
 * InlineQueryResult Class
 *
 * This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:
 *
    - [InlineQueryResultCachedAudio](https://core.telegram.org/bots/api#inlinequeryresultcachedaudio)
    - [InlineQueryResultCachedDocument](https://core.telegram.org/bots/api#inlinequeryresultcacheddocument)
    - [InlineQueryResultCachedGif](https://core.telegram.org/bots/api#inlinequeryresultcachedgif)
    - [InlineQueryResultCachedMpeg4Gif](https://core.telegram.org/bots/api#inlinequeryresultcachedmpeg4gif)
    - [InlineQueryResultCachedPhoto](https://core.telegram.org/bots/api#inlinequeryresultcachedphoto)
    - [InlineQueryResultCachedSticker](https://core.telegram.org/bots/api#inlinequeryresultcachedsticker)
    - [InlineQueryResultCachedVideo](https://core.telegram.org/bots/api#inlinequeryresultcachedvideo)
    - [InlineQueryResultCachedVoice](https://core.telegram.org/bots/api#inlinequeryresultcachedvoice)
    - [InlineQueryResultArticle](https://core.telegram.org/bots/api#inlinequeryresultarticle)
    - [InlineQueryResultAudio](https://core.telegram.org/bots/api#inlinequeryresultaudio)
    - [InlineQueryResultContact](https://core.telegram.org/bots/api#inlinequeryresultcontact)
    - [InlineQueryResultGame](https://core.telegram.org/bots/api#inlinequeryresultgame)
    - [InlineQueryResultDocument](https://core.telegram.org/bots/api#inlinequeryresultdocument)
    - [InlineQueryResultGif](https://core.telegram.org/bots/api#inlinequeryresultgif)
    - [InlineQueryResultLocation](https://core.telegram.org/bots/api#inlinequeryresultlocation)
    - [InlineQueryResultMpeg4Gif](https://core.telegram.org/bots/api#inlinequeryresultmpeg4gif)
    - [InlineQueryResultPhoto](https://core.telegram.org/bots/api#inlinequeryresultphoto)
    - [InlineQueryResultVenue](https://core.telegram.org/bots/api#inlinequeryresultvenue)
    - [InlineQueryResultVideo](https://core.telegram.org/bots/api#inlinequeryresultvideo)
    - [InlineQueryResultVoice](https://core.telegram.org/bots/api#inlinequeryresultvoice)
 *
 * Note: All URLs passed in inline query results will be available to end users and therefore must be assumed to be public.
 *
 * @link https://core.telegram.org/bots/api#inlinequeryresult
 */
class InlineQueryResult extends Type
{
    /**
     * checkClassType function
     *
     * @param array $data
     * @return object
     */
    private function checkClassType(array $data)
    {
        /**
         * for cached
         */
        $checkCachedFieldDatas = [
            'photo_file_id' => InlineQueryResultCachedPhoto::class,
            'gif_file_id' => InlineQueryResultCachedGif::class,
            'mpeg4_file_id' => InlineQueryResultCachedMpeg4Gif::class,
            'sticker_file_id' => InlineQueryResultCachedSticker::class,
            'document_file_id' => InlineQueryResultCachedDocument::class,
            'video_file_id' => InlineQueryResultCachedVideo::class,
            'voice_file_id' => InlineQueryResultCachedVoice::class,
            'audio_file_id' => InlineQueryResultCachedAudio::class,
        ];

        foreach ($checkCachedFieldDatas as $key => $value) {

            if (array_key_exists($key, $data)) {

                return $value;
            }
        }

        /**
         * field and Variable name to identify data type
         */
        $checkField = 'type';

        /**
         * values:
         *          key(field data) =>  value(data class)
         */
        $checkFieldDatas = [
            'article' => InlineQueryResultArticle::class,
            'photo' => InlineQueryResultPhoto::class,
            'gif' => InlineQueryResultGif::class,
            'mpeg4_gif' => InlineQueryResultMpeg4Gif::class,
            'video' => InlineQueryResultVideo::class,
            'audio' => InlineQueryResultAudio::class,
            'voice' => InlineQueryResultVoice::class,
            'document' => InlineQueryResultDocument::class,
            'location' => InlineQueryResultLocation::class,
            'venue' => InlineQueryResultVenue::class,
            'contact' => InlineQueryResultContact::class,
            'game' => InlineQueryResultGame::class,
        ];

        $fieldData = $data[$checkField];

        if (array_key_exists($fieldData, $checkFieldDatas)) {

            $class = $checkFieldDatas[$fieldData];
            return $class;
        }

        throw new BotException('InlineQueryResult Class Type Not Found.');
    }
}
