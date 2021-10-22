<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Log;

use TelegramBotPHP\Config\Config;

/**
 * class Log
 */
class Log
{
    protected array $data = [
        'update' => [],
        'requests' => [],
        'errors' => [],
        'time' => [
            'start' => '',
            'end' => '',
        ],
    ];

    private Config $config;

    /**
     * __construct function
     *
     * @param Config $config
     * @return void
     */
    public function __construct(Config $config)
    {
        $this->config = $config;

        $this->data['time']['start'] = time();
    }

    /**
     * update function
     *
     * @param array $update
     * @return void
     */
    public function update(array $update)
    {
        if (is_callable($this->config->onLog)) {

            $this->data['update'] = $update;
        }

        $logUpdateFunction = $this->config->onLogUpdate;

        if (is_callable($logUpdateFunction)) {

            $logUpdateFunction($update);
        }
    }

    /**
     * requestAndResponse function
     *
     * @param array $request
     * @param array $response
     * @return void
     */
    public function requestAndResponse(array $request, array $response)
    {
        if (is_callable($this->config->onLog)) {

            $this->data['requests'][] = [
                'request' => $request,
                'response' => $response,
            ];
        }

        $logRequestAndResponseFunction = $this->config->onLogRequestAndResponse;

        if (is_callable($logRequestAndResponseFunction)) {

            $logRequestAndResponseFunction($request, $response);
        }
    }

    /**
     * error function
     *
     * @param array $error
     * @return void
     */
    public function error(array $error)
    {
        if (is_callable($this->config->onLog)) {

            $this->data['errors'][] = $error;
        }

        $logErrorFunction = $this->config->onLogError;

        if (is_callable($logErrorFunction)) {

            $logErrorFunction($error);
        }
    }

    /**
     * __destruct function
     *
     * @return mixed
     */
    public function __destruct()
    {
        $this->data['time']['end'] = time();

        $logFunction = $this->config->onLog;

        if (is_callable($logFunction)) {

            $logFunction($this->data);
        }
    }
}
