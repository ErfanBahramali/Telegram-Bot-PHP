<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP;

use TelegramBotPHP\Config\Config;
use TelegramBotPHP\Exceptions\BotException;
use TelegramBotPHP\Helpers\Helper;
use TelegramBotPHP\Log\Log;
use TelegramBotPHP\Response\Response;
use TelegramBotPHP\Types\Update;

class Bot
{
    use Method;

    private static Log $log;

    private static string $token;

    public static Config $config;

    private static array $input;

    private static Update $update;

    private static Helper $helper;

    /** 
     * __construct function
     * 
     * set token and update
     * 
     * @param string $token bot api key
     * @return object|void Update
     */
    public function __construct(string $token, Config $config = null)
    {
        self::$token = $token;
        if (is_null($config)) {
            $config = new Config();
        }

        self::$config = $config;
        self::$log = new Log(
            $config->logDatabase,
            $config->logDatabaseTableName,
            $config->logDatabaseColumnName,
            $config->logDatabaseDefaultFileName,
            ($config->logUpdate || $config->logRequest || $config->logResponse || $config->logError),
        );

        if (self::$config->autoUseWebhook) {
            return $this->setUpdate();
        }
    }

    /** 
     * setUpdate function
     * 
     * set update
     * 
     * @param string $input
     * @return object|void $update
     */
    public function setUpdate(?string $input = null)
    {
        $input = is_null($input) ? file_get_contents('php://input') : $input;
        $input = json_decode($input, true);

        if (!is_null($input)) {

            self::$input = $input;

            if (self::$config->convertToObject) {
                self::$update = new Update($input);
                self::$helper = new Helper($input);
            }

            if (self::$config->logUpdate) {
                self::$log->update($input);
            }

            return self::$update;
        }
    }

    /** 
     * getInput function
     * 
     * @return array|null
     */
    public static function getInput()
    {
        return self::$input ?? null;
    }

    /** 
     * getUpdate function
     * 
     * @return Update|null
     */
    public static function getUpdate()
    {
        return self::$update ?? null;
    }

    /** 
     * getHelper function
     * 
     * @return Helper|null
     */
    public static function getHelper()
    {
        return self::$helper ?? null;
    }

    /** 
     * sendRequest function
     * 
     * @param string $method
     * @param array $data
     * @return Response|array telegram response
     */
    public static function sendRequest(string $method, array $parameters = [], ?string $token = null)
    {
        $token = is_null($token) ? self::$token : $token;
        $botApiServerUrl = self::$config->botApiServerUrl;
        $url = "{$botApiServerUrl}{$token}/{$method}";
        $ch = curl_init($url);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $parameters,
        ]);

        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response, true);
        $responseHttpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if ($responseHttpCode !== 200) {

            if (self::$config->logError === true) {

                $error = [
                    'request' => [
                        'method' => $method,
                        'parameters' => $parameters,
                    ],
                    'response' => $response,
                    'http_code' => $responseHttpCode,
                ];

                self::$log->error($error);
            }

            if (self::$config->throwOnError === true) {

                $error = json_encode($error);
                throw new BotException("something went wrong. Request failed Error: {$error}");
            }
        } else {
            if (self::$config->logRequest === true && self::$config->logResponse === false) {
                self::$log->request([
                    'method' => $method,
                    'parameters' => $parameters,
                ]);
            }

            if (self::$config->logRequest === false && self::$config->logResponse === true) {
                self::$log->response($response);
            }

            if (self::$config->logRequest === true && self::$config->logResponse === true) {
                self::$log->requestAndResponse([
                    'method' => $method,
                    'parameters' => $parameters,
                ], $response);
            }
        }

        if (self::$config->convertToObject) {
            return new Response($response, $method, $parameters);
        }

        return $response;
    }

    /**
     * isTelegramIp function
     * Check if a given ip is in a telegram ip range 
     * 
     * @param  string $ip IP to check in IPV4 format eg. 127.0.0.1
     * @return boolean true if the ip is in telegram ip range / false if not.
     */
    public static function isTelegramIp(string $ip)
    {
        $ranges = [
            [
                'address' => '149.154.160.0',
                'netmask' => '20',
                'netmask_decimal' => -4096,
                'integer_id' => '2509938688',
            ],
            [
                'address' => '91.108.4.0',
                'netmask' => '22',
                'netmask_decimal' => -1024,
                'integer_id' => '1533805568',
            ],
        ];
    
        $ip = trim($ip);
        $ipDecimal = ip2long($ip);
    
        if (($ipDecimal & $ranges[0]['netmask_decimal']) == $ranges[0]['integer_id']) {
            return true;
        }
    
        if (($ipDecimal & $ranges[1]['netmask_decimal']) == $ranges[1]['integer_id']) {
            return true;
        }
    
        return false;
    }
}
