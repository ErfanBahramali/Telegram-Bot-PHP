# Telegram Bot PHP
Telegram Bot PHP is a PHP Library for interaction with [Telegram Bot API](https://core.telegram.org/bots/api) 5.4 (November 5, 2021).

## Table
- [Requirements](#requirements)
- [Installation](#installation)
- [Usage](#usage)
- [Security](#security)
- [Config](#config)
    - [Configs](#configs)
    - [Logging](#logging)
        - [onLog](#onlog)
        - [onLogUpdate](#onlogupdate)
        - [onLogRequestAndResponse](#onlogrequestandresponse)
        - [onLogError](#onlogerror)
    - [Main Config](#main-config)
    - [Use Config](#use-config)
    - [Set Config](#set-config)
- [Update](#update)
    - [Webhook](#webhook)
    - [Get Updates](#get-updates)
- [Methods](#methods)
    - [Keyboards](#keyboards)
- [Response](#response)
    - [Get Response](#get-response)
    - [Result](#result)
    - [Example](#example)
    - [Error](#error)
    - [Request](#request)
- [Download File](#download-file)
- [Helper](#helper)
- [Format](#format)
- [Exceptions](#exceptions)
- [Update Type](#update-type)
- [Chat Action](#chat-action)
- [Examples](#examples)
- [Troubleshooting](#troubleshooting)
- [About Us](#about-us)
- [License](#license)


## Requirements

**Please read the [Telegram API document](https://core.telegram.org/bots/api) at least once**

* Read [Telegram API document](https://core.telegram.org/bots/api)
* php >=7.4
* ext-curl: *
* ext-json: *
* ext-mbstring: *
* ext-openssl: *
## Installation
Use composer to require it,
```
composer require bahramali/telegram-bot-php
```
**or**

```
php composer.phar require bahramali/telegram-bot-php
```
**or**

Create `composer.json` file and add
```
{
    "name": "<vendor>/<name>",
    "require": {
        "bahramali/telegram-bot-php": "*"
    }
}
```
and run
```
composer update
```

**Note:** If you don't have [Composer](https://getcomposer.org/) you can download it [HERE](https://getcomposer.org/download/).

## Usage

To use this library, you need to require the Composer Autoloader And create a new object from the bot class

**Please read the [Telegram API document](https://core.telegram.org/bots/api) at least once**

```php

use TelegramBotPHP\Bot;

require_once __DIR__ . '/vendor/autoload.php';

/**
 * @link https://core.telegram.org/bots/api#authorizing-your-bot
 */
$bot = new Bot('__BOT_API_TOKEN__');
```
## Security

**You can add a specific parameter to your webhook url so that only you know about that link.**

#### Example:
```
https://example.com/bot?example=1a79a4d60de6718e8e5b326e338ae533
```

**Then check in your code the parameter that must be present**

```php
if ($_GET['example'] == '1a79a4d60de6718e8e5b326e338ae533') {
    // code
} else {
    // 404 not found
}
```

**Be sure to check that the IP is the sender of the Telegram IP.**

**You can use the 'isTelegramIp' function of 'bot' class to check Telegram IP**

#### Example:
```php

$ip = $_SERVER['REMOTE_ADDR'];

if (Bot::isTelegramIp($ip)) {
    // code
} else {
    // 404 not found
}
```
## Config
### Configs

**You can adjust the configuration and change it in each section**

if you are using a local bot api server, Set up your server url

```php
/**
 * bot api server url
 * @link https://core.telegram.org/bots/api#using-a-local-bot-api-server
 */
public string $botApiServerUrl = 'https://api.telegram.org/bot'; // https://example.com/bot{__BOT_API_TOKEN__}/MethodName?parameters=values
```

if you are using a local bot api server, Set up your server file url, for download file

```php
/**
 * bot api server file url
 * @link https://core.telegram.org/bots/api#file
 */
public string $botApiServerFileUrl = 'https://api.telegram.org/file/bot'; // https://example.com/example/file/bot{__BOT_API_TOKEN__}/{__FILE_PATH__}
```

Convert updates and response to objects for easier access

Also you can set the variable to false and receive updates and response as an array

```php
/**
 * auto convert update and response to class For easier access
 */
public bool $convertToObject = true;
```

If you don't want to use Webhook automatically, set this variable to false

```php
/**
 * Use webhook by default
 * if use getUpdates Set this variable to false
 */
public bool $autoUseWebhook = true;
```
If you don't want some methods to have some of their parameters automatically, set this variable to false

**Its accuracy is not always guaranteed**

```php
/**
 * In certain methods, some parameters are filled in automatically
 *
 * For example, in `sendMessage` method,

 * You can, not set "chat_id",

 * And the "chat_id" of the sender is considered automatic.
 */
public bool $autofillParameters = true;
```

If you want the program to continue after the error, set this variable to false

**This is only for when the response code of the submitted request is not equal to 200**

```php
/**
 * Stop the program when it encounters an error
 */
public bool $throwOnError = true;
```
### Logging

This library can log all their update , requests , responses and errors

Just set the function for the desired log

**You can change any of the functions anywhere in the app**

Get the information and you can use any method you want to record it

#### onLog

For updates , requests , responses and errors

At the end, the program is called and sends update and a list of all requests and responses and errors as input
##### Example
```php
$config->onLog = function (array $log) {

    $log = json_encode($log);
    file_put_contents(__DIR__ . '/Bot.log', "{$log}\n", FILE_APPEND);
};

```
#### onLogUpdate

For update only

When the update is received, the function is called

##### Example
```php
$config->onLogUpdate = function (array $update) {

    $logUpdate = json_encode($update);
    file_put_contents(__DIR__ . '/Bot_update.log', "{$logUpdate}\n", FILE_APPEND);
};

```

#### onLogRequestAndResponse

For requests and responses only

When a request is sent and the response code is 200

##### Example
```php
$config->onLogRequestAndResponse = function (array $request, array $response) {

    $logRequestAndResponse = [$request, $response];
    $logRequestAndResponse = json_encode($logRequestAndResponse);
    file_put_contents(__DIR__ . '/Bot_request_response.log', "{$logRequestAndResponse}\n", FILE_APPEND);
};

```

#### onLogError

For errors only

When a request is sent and the response code is not 200
##### Example
```php
$config->onLogError = function (array $error) {

    $logError = json_encode($error);
    file_put_contents(__DIR__ . '/Bot_error.log', "{$logError}\n", FILE_APPEND);
};

```
### Main Config

The main configuration is constant everywhere in the program And when a new configuration is created, the default value is the value set for the main configuration.

You can adjust the main configuration and change it in each section

**Note: You can see the default values [above](#configs)**

#### Use

It should only be used statically

```php

MainConfig::$onLog = function (array $log) {

    $log = json_encode($log);
    file_put_contents(__DIR__ . '/Bot.log', "{$log}\n", FILE_APPEND);
};

// MainConfig::.... = ... ;
```
### Use Config

Just create an object of config class and change the values

**Note: The default configuration values are the [Main configuration](#main-config) values**

```php
$config = new Config();

$config->onLog = function (array $log) {

    $log = json_encode($log);
    file_put_contents(__DIR__ . '/Bot.log', "{$log}\n", FILE_APPEND);
};

$config->onLogUpdate = function ($update) {

    $logUpdate = json_encode($update);
    file_put_contents(__DIR__ . '/Bot_update.log', "{$logUpdate}\n", FILE_APPEND);
};

// $config-> ... = ... ;
```
### Set

To use the created configuration, it can be set to the second parameter of the bot class

```php
$bot = new Bot('__BOT_API_TOKEN__' , $config);
```

It can also be changed later if needed

```php
$config->throwOnError = true;
// or
$bot->config->throwOnError = true;

$config->onLog = function (array $log) {

    $log = json_encode($log);
    file_put_contents(__DIR__ . '/Bot.log', "{$log}\n", FILE_APPEND);
};

// $bot->config->... = ...;
```
## Update

There are two ways to receive the update

**There is no difference between camelCase and under_score to get the parameters**

### Webhook

If you are using a webhook you can get updates using the 'getUpdate' and 'getInput' functions

https://core.telegram.org/bots/api#setwebhook

```php
// Do not confuse this function with the 'getUpdates' method of Telegram, it is 'getupdate'
$update = $bot->getUpdate(); // TelegramBotPHP\Types\Update Object ([updateId] => 585985242 [message] => TelegramBotPHP\Types\Message Object ( ... ))

$update = $bot->getInput(); // Array ([update_id] => 585985243 [message] => Array ( ... ))
```

#### Example

```php
$update = $bot->getUpdate(); // TelegramBotPHP\Types\Update Object ([updateId] => 585985242 [message] => TelegramBotPHP\Types\Message Object ( ... ))

$messageId = $update->message->message_id; // 28236
// or
$messageId = $update->message->messageId; // 28236

$text = $update->message->text; // Example Text

// or
$update = $bot->getInput(); // Array ([update_id] => 585985243 [message] => Array ( ... ))

$messageId = $update['message']['message_id']; // 28236

$text = $update['message']['text']; // Example Text

```
### Get Updates

Returns an array of update object

https://core.telegram.org/bots/api#getupdates

```php

$updates = $bot->getUpdates()->getResult();// Array ([0] => TelegramBotPHP\Types\Update Object ( ... ) [1] => TelegramBotPHP\Types\Update Object ( ... ) [2] => TelegramBotPHP\Types\Update Object ( ... ))

```

#### Example:

```php
$updates = $bot->getUpdates()->getResult();// Array ([0] => TelegramBotPHP\Types\Update Object ( ... ) [1] => TelegramBotPHP\Types\Update Object ( ... ) [2] => TelegramBotPHP\Types\Update Object ( ... ))
foreach ($updates as $key => $update) {

    $chatId = $update->chat->id; // 184171927
    // or you can create helper
}
```

## Methods

To use the methods, all you have to do is type in the name of the method and pass an array of parameters listed in the [Telegram api document](https://core.telegram.org/bots/api#available-methods).

```php

// now you can use all of telegram methods

$bot->methodName([
    // parameters
    'example' => 'test',
]);
```
#### Example:
```php

// https://core.telegram.org/bots/api#available-methods

// chat_id is Unique identifier for the target chat or username of the target channel (in the format @channelusername)

// send message
$bot->sendMessage([
    'chat_id' => 184171927,
    'text' => 'Example Text',
]);

// send photo
$bot->sendPhoto([
    'chat_id' => 184171927,
    'photo' => new CURLFile('example.png'),
    'caption' => 'Example caption',
]);

// send document
$bot->sendDocument([
    'chat_id' => 184171927,
    'document' => new CURLFile('example.zip'),
    'caption' => 'Example caption',
]);

// ...
// $bot->...([
//   ...
// ]);

```

You can also use static

#### Example:

```php
// send message
Bot::sendMessage([
    'chat_id' => 184171927,
    'text' => 'Example Text',
]);

// send photo
Bot::sendPhoto([
    'chat_id' => 184171927,
    'photo' => new CURLFile('example.png'),
    'caption' => 'Example caption',
]);

// send document
Bot::sendDocument([
    'chat_id' => 184171927,
    'document' => new CURLFile('example.zip'),
    'caption' => 'Example caption',
]);

```

Also to use different **BOT_API_TOKEN**

You can in the second parameter of each method, Enter a new **BOT_API_TOKEN**

#### Example:

```php
// send message
Bot::sendMessage([
    'chat_id' => 184171927,
    'text' => 'Example Text',
], '__BOT_API_TOKEN__');
```

### Keyboards

#### InlineKeyboardMarkup

```php
// send message
$bot->sendMessage([
    'chat_id' => 184171927,
    'text' => 'Example Text',
    'reply_markup' => [
        'inline_keyboard' =>
        [
            [['text' => 'one', 'callback_data' => 'one'], ['text' => 'two', 'callback_data' => 'two']],

            [['text' => 'three', 'callback_data' => 'three'], ['text' => 'four', 'callback_data' => 'four']],

            [['text' => 'url', 'url' => 'https://github.com/ErfanBahramali/Telegram-Bot-PHP']],
        ]
    ]
]);
```

#### ReplyKeyboardMarkup

```php
// send message
$bot->sendMessage([
    'chat_id' => 184171927,
    'text' => 'Example Text',
    'reply_markup' => [
        'keyboard' =>
        [
            [['text' => 'one'], ['text' => 'two']],

            [['text' => 'three'], ['text' => 'four']],

            [['text' => 'request contact', 'request_contact' => true]],

            [['text' => 'request location', 'request_location' => true]],
        ],
        'resize_keyboard' => true,
    ]
]);
```

#### ReplyKeyboardRemove

```php
// send message
$bot->sendMessage([
    'chat_id' => 184171927,
    'text' => 'Example Text',
    'reply_markup' => [
        'remove_keyboard' => true
    ]
]);
```

#### ForceReply

```php
// send message
$bot->sendMessage([
    'chat_id' => 184171927,
    'text' => 'Example Text',
    'reply_markup' => [
        'force_reply' => true,
        'input_field_placeholder' => 'test',
    ]
]);
```

## Response

**There is no difference between camelCase and under_score to get the parameters**
### Get Response

```php
$response = $bot->methodName([
    // parameters
    'example' => 'test',
]); // (TelegramBotPHP\Response\Response Object( .... ))

```

### Result

```php
// {
//   "ok": true,
//   "result": {
//     "message_id": 28236,
//     "from": {
//       "id": 93372553,
//       "is_bot": true,
//       "first_name": "BotFather",
//       "username": "BotFather"
//     },
//     "chat": {
//       "id": 184171927,
//       "first_name": "Erfan",
//       "type": "private"
//     },
//     "date": 1627277790,
//     "text": "Example Text"
//   }
// }

$response->isOk(); // check response ok is true (true)

$response->getResult(); // get response Result. The result is not always an object and may be an array and a bool (TelegramBotPHP\Types\Message Object([messageId] => 28236 [from] => TelegramBotPHP\Types\User Object( ... ) [date] => 1627277790[chat] => TelegramBotPHP\Types\Chat Object( ... )[text] => Example Text))

$response->getResponseData(); // get all of response as an array (Array ([ok] => 1 [result] => Array ( [message_id] => 28236 [from] => Array  ( ... ) [chat] => Array ( ... ) [date] => 1627277790 [text] => Example Text )))
```
### Example:

```php

$result = $response->getResult();// TelegramBotPHP\Types\Message Object( ... )

$messageId = $result->message_id; // 28236
$chatId = $result->chat->id; // 184171927
$text = $result->text; // Example Text

// or in array
$result = $response->getResponseData(); // Array ( ... )
$result = $result['result']; // Array ( ... )

$messageId = $result['message_id']; // 28236
$chatId = $result['chat']['id']; // 184171927
$text = $result['text']; // Example Text
```

### Error:

```php

// {
//   "ok": false,
//   "error_code": 400,
//   "description": "Bad Request: chat not found"
// }

$response->getErrorCode(); // check response error_code (400)
$response->getDescription(); // check response description ("Bad Request: chat not found")
```
### Request:
```php
$response->getRequestMethod(); // get request method name (sendMessage)
$response->getRequestParameters(); // get request parameters as an array (['chat_id' => '184171927', 'text' => 'Example Text'])

```

# Download File

```php

// downloadFile($filePath, $localFilePath)

// $fileSource = self::$config->botApiServerFileUrl . self::$token . '/' . $filePath;

$bot->downloadFile('documents/example.txt', __DIR__ . '/documents/example.txt');

// $fileSource = self::$config->botApiServerFileUrl . self::$token . '/' . 'documents/example.txt';

// or

Bot::downloadFile('documents/example.txt', __DIR__ . '/documents/example.txt');

```

### download file by file_id

```php

// downloadFileByFileId($fileId, $localFilePath)

$bot->downloadFileByFileId('BQACAgQAAxkBAAJ0T2EJUDHTeXGcSBUrqFMgzZCQ0OJGAAIhCQACg2tJUEqm6016cXE9IAQ', __DIR__ . '/documents/example.txt');

// or

Bot::downloadFileByFileId('BQACAgQAAxkBAAJ0T2EJUDHTeXGcSBUrqFMgzZCQ0OJGAAIhCQACg2tJUEqm6016cXE9IAQ', __DIR__ . '/documents/example.txt');

```

## Helper

Helpers are auxiliary functions for receiving certain values or checking some items or doing certain tasks

**Note: You can see the full list of functions in the [`Helpers Folder`](https://github.com/ErfanBahramali/Telegram-Bot-PHP/tree/main/src/Helpers)**


**There is no difference between camelCase and under_score to get the parameters**

#### Example:

```php

$chatId = $bot->getHelper()->getChatId();
// or
$chatId = Helper::getChatId();
// or
$chatId = $bot->getUpdate()->message->chat->id;

```

You can also create a new helper with the input update array

```php
$helper = new Helper({__Input_Update_Array__});

// Example:
$helper = new Helper($bot->getInput());
```

Of course, the bot builds the helper itself and there is no need to build a helper with its value,
You can get the bot helper with 'getHelper'

#### Example:

```php
$helper = $bot->getHelper();
```
## Format

The Format class is a class to help create different text formats

https://core.telegram.org/bots/api#formatting-options

#### Mention

You can easily mention users

```php
$text = Format::mention('184171927','Erfan'); // [Erfan](tg://user?id=184171927)
```

#### Styles

```php
// escape markdownV2 style
$text = Format::markdownV2('');

// escape HTML style
$text = Format::html('');

// escape markdown style
$text = Format::markdown('');
```

#### Example:

```php
// escape markdownV2 style
$text = Format::markdownV2('*bold \*text*'); // \*bold \\\*text\*

// escape HTML style
$text = Format::html('<b>bold</b>, <strong>bold</strong>'); // &amp;lt;b&amp;gt;bold&amp;lt;/b&amp;gt;, &amp;lt;strong&amp;gt;bold&amp;lt;/strong&amp;gt;

// escape markdown style
$text = Format::markdown('*bold text*'); // \*bold text\*
```

#### Example:

```php

$text = Format::markdownV2('*bold \*text*');

Bot::sendMessage([
    'chat_id' => '184171927',
    'text' => "*{$text}*",
    'parse_mode' => ParseMode::MARKDOWNV2,
]);
```

## Exceptions

You can manage errors with [try catch](https://www.php.net/manual/en/language.exceptions.php)

**BotException:** Main exception class used for exception handling

**BotLogException:** exception class used for log

**BotNotSupportException:** exception class Thrown when Feature not support

## Update Type

If you want to check the type of updates

You can use helpers

**You can see the full list of 'updateTypeIs...' functions in the [`helper type class`](https://github.com/ErfanBahramali/Telegram-Bot-PHP/blob/main/src/Helpers/Helper.php)**

#### Example:

```php
if (Helper::updateTypeIsMessage()) {
    # code...
} elseif (Helper::updateTypeIsCallbackQuery()) {
    # code...
} elseif (Helper::updateTypeIsMyChatMember()) {
    # code...
}

// or ...
// Helper::updateTypeIs...()

```

**Or**

You can use the 'getUpdateType' helper to get the type of update and then check it using different types of updates

**You can see the full list of update types in the [`update type class`](https://github.com/ErfanBahramali/Telegram-Bot-PHP/blob/main/src/Constants/UpdateType.php)**

#### Example:

```php
$updateType = Helper::getUpdateType();

if ($updateType === UpdateType::MESSAGE) {

} elseif ($updateType === UpdateType::EDITED_MESSAGE) {

} elseif ($updateType === UpdateType::CALLBACK_QUERY) {

}

```

## Chat Action

You can use existing chat actions to send chat action

**You can see the full list of chat actions in the chat [`action class`](https://github.com/ErfanBahramali/Telegram-Bot-PHP/blob/main/src/Constants/ChatAction.php)**

#### Example:

```php
Bot::sendChatAction([
    'chat_id' => 184171927,
    'action' => ChatAction::TYPING,
]);

Bot::sendChatAction([
    'chat_id' => 184171927,
    'action' => ChatAction::RECORD_VOICE,
]);

Bot::sendChatAction([
    'chat_id' => 184171927,
    'action' => ChatAction::FIND_LOCATION,
]);

```

## Examples

* [`parrot`](https://github.com/ErfanBahramali/Telegram-Bot-PHP/blob/main/examples/Parrot/index.php)

## Troubleshooting

please report any bugs you find on the [issues](https://github.com/ErfanBahramali/Telegram-Bot-PHP/issues) page.

## About Us

This library can be used for easy interaction with [Telegram Bot API](https://core.telegram.org/bots/api)

## License

Telegram-Bot-PHP is licensed under the MIT License - see the [LICENSE](LICENSE) file for details
