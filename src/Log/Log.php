<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Log;

/** 
 * class BotLog
 */
class Log
{
    protected array $data = [
        'update' => [],
        'requests' => [],
        'errors' => [],
        'time' => '',
    ];

    /**
     * @var \PDO|string
     */
    private $connect;
    private string $tableName;
    private string $columnName;
    private string $fileName;

    private bool $log;

    /**
     * __construct function
     * 
     * @param \PDO|string $connect
     * @param string $tableName
     * @param string $columnName
     * @param string $fileName
     * @param string $log
     * 
     * @requires void
     */
    public function __construct($connect, string $tableName, string $columnName, string $fileName, bool $log)
    {
        $this->connect = $connect;
        $this->tableName = $tableName;
        $this->columnName = $columnName;
        $this->fileName = $fileName;
        $this->log = $log;
    }

    /** 
     * update function
     * 
     * @param array $update
     * @return void
     */
    public function update(array $update)
    {
        $this->data['update'] = $update;
    }

    /** 
     * requestAndResponse function
     * 
     * @param array $request
     * @return void
     */
    public function requestAndResponse(array $request, array $response)
    {
        $this->data['requests'][] = [
            'request' => $request,
            'response' => $response,
        ];
    }

    /** 
     * request function
     * 
     * @param array $request
     * @return void
     */
    public function request(array $request)
    {
        $this->data['requests'][] = ['request' => $request];
    }

    /** 
     * response function
     * 
     * @param array $response
     * @return void
     */
    public function response(array $response)
    {
        $this->data['requests'][] = ['response' => $response];
    }

    /** 
     * error function
     * 
     * @param array $error
     * @return void
     */
    public function error(array $error)
    {
        $this->data['errors'][] = $error;
    }

    /** 
     * __destruct function
     * set log to file or Database
     * 
     * @return mixed
     */
    public function __destruct()
    {
        if ($this->log === false) {
            return;
        }
        
        $connect = $this->connect;
        $this->data['time'] = time();
        $data = json_encode($this->data);

        if ($connect instanceof \PDO) {
            /**
             * @var \PDO $connect
             */
            $pdo = $connect->prepare("INSERT INTO `{$this->tableName}` (`{$this->columnName}`) VALUES (?)");
            return $pdo->execute([$data]);
        }

        $connect = (empty($connect) || mb_substr($connect, -1) === '/') ? $connect : "{$connect}/";
        print_r($connect);
        return file_put_contents("{$connect}{$this->fileName}", "{$data}\n", FILE_APPEND);
    }
}
