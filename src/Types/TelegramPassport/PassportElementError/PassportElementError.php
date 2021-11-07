<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types\TelegramPassport\PassportElementError;

use TelegramBotPHP\Constants\PassportElementErrorSource;
use TelegramBotPHP\Type;

/**
 * PassportElementError Class
 *
 * This object represents an error in the Telegram Passport element which was submitted that should be resolved by the user. It should be one of:
 *
    - [PassportElementErrorDataField](https://core.telegram.org/bots/api#passportelementerrordatafield)
    - [PassportElementErrorFrontSide](https://core.telegram.org/bots/api#passportelementerrorfrontside)
    - [PassportElementErrorReverseSide](https://core.telegram.org/bots/api#passportelementerrorreverseside)
    - [PassportElementErrorSelfie](https://core.telegram.org/bots/api#passportelementerrorselfie)
    - [PassportElementErrorFile](https://core.telegram.org/bots/api#passportelementerrorfile)
    - [PassportElementErrorFiles](https://core.telegram.org/bots/api#passportelementerrorfiles)
    - [PassportElementErrorTranslationFile](https://core.telegram.org/bots/api#passportelementerrortranslationfile)
    - [PassportElementErrorTranslationFiles](https://core.telegram.org/bots/api#passportelementerrortranslationfiles)
    - [PassportElementErrorUnspecified](https://core.telegram.org/bots/api#passportelementerrorunspecified)
 *
 * @link https://core.telegram.org/bots/api#passportelementerror
 */
class PassportElementError extends Type
{
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
            'name' => 'source',
            'datas' => [
                PassportElementErrorSource::DATA => PassportElementErrorDataField::class,
                PassportElementErrorSource::FRONT_SIDE => PassportElementErrorFrontSide::class,
                PassportElementErrorSource::REVERSE_SIDE => PassportElementErrorReverseSide::class,
                PassportElementErrorSource::SELFIE => PassportElementErrorSelfie::class,
                PassportElementErrorSource::FILE => PassportElementErrorFile::class,
                PassportElementErrorSource::FILES => PassportElementErrorFiles::class,
                PassportElementErrorSource::TRANSLATION_FILE => PassportElementErrorTranslationFile::class,
                PassportElementErrorSource::TRANSLATION_FILES => PassportElementErrorTranslationFiles::class,
                PassportElementErrorSource::UNSPECIFIED => PassportElementErrorUnspecified::class,
            ],
        ];
    }
}
