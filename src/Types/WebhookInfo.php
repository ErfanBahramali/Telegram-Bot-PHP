<?php

/*
 * This file is part of the TelegramBotPHP package.
 * https://github.com/ErfanBahramali/Telegram-Bot-PHP
 */

namespace TelegramBotPHP\Types;

use TelegramBotPHP\Type;

/**
 * WebhookInfo Class
 *
 * Contains information about the current status of a webhook.
 *
 * @link https://core.telegram.org/bots/api#webhookinfo
 */
class WebhookInfo extends Type
{

	/**
	 * Webhook URL, may be empty if webhook is not set up
	 */
	public string $url;

	/**
	 * True, if a custom certificate was provided for webhook certificate checks
	 */
	public bool $hasCustomCertificate;

	/**
	 * Number of updates awaiting delivery
	 */
	public int $pendingUpdateCount;

	/**
	 * [optional] Currently used webhook IP address
	 */
	public string $ipAddress;

	/**
	 * [optional] Unix time for the most recent error that happened when trying to deliver an update via webhook
	 */
	public int $lastErrorDate;

	/**
	 * [optional] Error message in human-readable format for the most recent error that happened when trying to deliver an update via webhook
	 */
	public string $lastErrorMessage;

	/**
	 * [optional] Maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery
	 */
	public int $maxConnections;

	/**
	 * [optional] A list of update types the bot is subscribed to. Defaults to all update types except *chat_member*
	 */
	public array $allowedUpdates;

}