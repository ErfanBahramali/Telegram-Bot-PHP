<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Response;

/**
 * Response Class
 */
class Response
{
    protected string $method;
    protected array $parameters;
    protected array $data;

    protected $result; // (mixed: Because the results can be different => true , string , int , array , ...)

    /**
     * __construct function
     *
     * @param array $data
     * @param string $method
     * @param array $parameters
     * @return mixed
     */
    public function __construct(array $data, string $method, array $parameters)
    {
        $this->method = $method;
        $this->parameters = $parameters;
        $this->data = $data;

        if (isset($this->data['ok']) && $this->data['ok'] === true) {

            $this->result = $this->convertToResponseType($data['result']);
        }
    }

    /**
     * convertToResponseType function
     *
     * @param mixed $result (mixed: Because the results can be different => true , string , int , array , ...)
     * @return mixed
     */
    private function convertToResponseType($result)
    {
        $resultType = Type::getOnSuccess($this->method);

        /*
        $nonObjectTypes = [
            true,
            'string',
            'int',
            'empty_list',
        ];
         */

        if (is_array($result) && !empty($result)) {

            if (is_array($resultType)) {

                $class = $resultType[0];

                $resultArray = [];

                foreach ($result as $value) {

                    $resultArray[] = new $class($value);
                }

                return $resultArray;
            }

            return new $resultType($result);
        }

        return $result;
        // throw new BotException("Response Type {$this->method} method Not Found.");
    }

    /**
     * getRequestMethod function
     *
     * @return string
     */
    public function getRequestMethod(): string
    {
        return $this->method;
    }

    /**
     * getRequestParameters function
     *
     * @return array
     */
    public function getRequestParameters(): array
    {
        return $this->parameters;
    }

    /**
     * getResponseData function
     *
     * @return array
     */
    public function getResponseData(): array
    {
        return $this->data;
    }

    /**
     * getResult function
     *
     * @return array|object|true
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * isOk function
     *
     * @return bool
     */
    public function isOk()
    {
        return (bool) $this->data['ok'];
    }

    /**
     * getDescription function
     *
     * @return string|null
     */
    public function getDescription()
    {
        return (isset($this->data['description']) ?  (string) $this->data['description'] : null);
    }

    /**
     * getErrorCode function
     *
     * @return int|null
     */
    public function getErrorCode()
    {
        return (isset($this->data['error_code']) ? (int) $this->data['error_code'] : null);
    }
}
