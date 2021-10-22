<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP;

use TelegramBotPHP\Exceptions\BotException;
use TelegramBotPHP\Format;

/**
 * User Class
 *
 * All types used in the Bot API responses are represented as JSON-objects.
 * It is safe to use 32-bit signed integers for storing all Integer fields unless otherwise noted.
 * [Optional]. fields may be not returned when irrelevant.
 *
 * @link https://core.telegram.org/bots/api#available-types
 */
class Type
{
    // /**
    //  * checkClassType function
    //  *
    //  * @param array $data
    //  * @return object
    //  */
    // private function checkClassType(array $data)
    // {
    //     return;
    // }

    // /**
    //  * getCheckField function
    //  * name : field and Variable name to identify data type
    //  * datas : values: key(field data) =>  value(data class)
    //  *
    //  * @return array name and datas
    //  */
    // private function getCheckField()
    // {
    //     return [
    //         'name' => 'source',
    //         'datas' => [],
    //     ];
    // }

    // /**
    //  * getTypeVariables function
    //  * To specify the type of value of Variables
    //  *
    //  * @return array
    //  */
    // protected function getTypeVariables()
    // {
    //     return [];
    // }

    // /**
    //  * getTypeArrayVariables function
    //  * To specify the type of value of arrays Variables
    //  *
    //  * @return array
    //  */
    // protected function getTypeArrayVariables()
    // {
    //     return [];
    // }

    /**
     * __construct function
     *
     * @param array $data
     * @return mixed
     */
    public function __construct(array $data)
    {

        if (is_callable([$this, 'checkClassType'])) {

            $class = $this->checkClassType($data);

            return (new $class($data));
        }


        if (is_callable([$this, 'getCheckField'])) {

            $checkField = $this->getCheckField();
            $checkFieldName = $checkField['name'];
            $checkFieldDatas = $checkField['datas'];

            $fieldData = $data[$checkFieldName];

            if (array_key_exists($fieldData, $checkFieldDatas)) {

                $class = $checkFieldDatas[$fieldData];

                return (new $class($data));
            }

            $className = get_class($this);

            throw new BotException("{$className} {$checkFieldName} Not Found.");
        }


        foreach ($data as $key => $value) {

            $key = Format::toCamelCase($key);

            if (is_array($value)) {

                if (is_callable([$this, 'getTypeVariables']) && isset($this->getTypeVariables()[$key])) {

                    $class = $this->getTypeVariables()[$key];

                    $value = new $class($value);
                } elseif (is_callable([$this, 'getTypeArrayVariables']) && isset($this->getTypeArrayVariables()[$key])) {

                    $class = $this->getTypeArrayVariables()[$key];

                    if (is_array($class)) {

                        $class = $class[0];

                        foreach ($value as &$valueData) {

                            foreach ($valueData as &$grandchild) {

                                $grandchild = new $class($grandchild);
                            }
                        }
                    } else {

                        foreach ($value as &$valueData) {

                            $valueData = new $class($valueData);
                        }
                    }
                }
            }

            $this->$key = $value;
        }
    }

    /**
     * keysExistsInData function
     *
     * @param array $keys required keys
     * @param array $data
     * @return bool
     */
    protected function keysExistsInData(array $keys, array $data)
    {
        foreach ($keys as $value) {

            if (array_key_exists($value, $data) === false) {

                return false;
            }
        }

        return true;
    }

    /**
     * __get function
     *
     * @param string $name
     * @return mixed
     */
    public function __get(string $name)
    {
        $name = Format::toCamelCase($name);
        return $this->$name;
    }
}
