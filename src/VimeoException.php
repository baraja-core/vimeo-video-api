<?php

declare(strict_types=1);

namespace Baraja\VimeoAPI;


class VimeoException extends \RuntimeException
{

	/**
	 * @param int $token
	 */
	public static function videoDoesNotExist(int $token): void
	{
		throw new self('Vimeo video #' . $token . ' does not exist.');
	}

	/**
	 * @param string $url
	 */
	public static function emptyResponse(string $url): void
	{
		throw new self('Vimeo API response is empty.' . "\n" . 'Url: "' . $url . '".');
	}

	/**
	 * @param string $referer
	 */
	public static function invalidReferer(string $referer): void
	{
		throw new self('Referer should be valid domain. Referer "' . $referer . '" given.');
	}

}