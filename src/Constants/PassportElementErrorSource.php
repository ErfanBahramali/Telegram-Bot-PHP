<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Constants;

/**
 * @link https://core.telegram.org/bots/api#passportelementerror
 */
class PassportElementErrorSource
{
    /**
     * Data Passport Element Error Source ( PassportElementErrorDataField )
     * @link https://core.telegram.org/bots/api#passportelementerrordatafield
     */
    public const DATA = 'data';

    /**
     * Front Side Passport Element Error Source ( PassportElementErrorFrontSide )
     * @link https://core.telegram.org/bots/api#passportelementerrorfrontside
     */
    public const FRONT_SIDE = 'front_side';

    /**
     * Reverse Side Passport Element Error Source ( PassportElementErrorReverseSide )
     * @link https://core.telegram.org/bots/api#passportelementerrorreverseside
     */
    public const REVERSE_SIDE = 'reverse_side';

    /**
     * Selfie Passport Element Error Source ( PassportElementErrorSelfie )
     * @link https://core.telegram.org/bots/api#passportelementerrorselfie
     */
    public const SELFIE = 'selfie';

    /**
     * File Passport Element Error Source ( PassportElementErrorFile )
     * @link https://core.telegram.org/bots/api#passportelementerrorfile
     */
    public const FILE = 'file';

    /**
     * Files Passport Element Error Source ( PassportElementErrorFiles )
     * @link https://core.telegram.org/bots/api#passportelementerrorfiles
     */
    public const FILES = 'files';

    /**
     * Translation File Passport Element Error Source ( PassportElementErrorTranslationFile )
     * @link https://core.telegram.org/bots/api#passportelementerrortranslationfile
     */
    public const TRANSLATION_FILE = 'translation_file';

    /**
     * Translation Files Passport Element Error Source ( PassportElementErrorTranslationFiles )
     * @link https://core.telegram.org/bots/api#passportelementerrortranslationfiles
     */
    public const TRANSLATION_FILES = 'translation_files';

    /**
     * Unspecified Passport Element Error Source ( PassportElementErrorUnspecified )
     * @link https://core.telegram.org/bots/api#passportelementerrorunspecified
     */
    public const UNSPECIFIED = 'unspecified';
}
