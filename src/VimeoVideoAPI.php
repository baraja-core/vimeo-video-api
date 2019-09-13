<?php

declare(strict_types=1);

namespace Baraja\VimeoAPI;


class VimeoVideoAPI
{

	/**
	 * @var string
	 */
	private $referer;

	/**
	 * @param string $referer
	 */
	public function __construct(string $referer)
	{
		if (!preg_match('/^https?:\/\/[a-z0-9-]+\.(?:[a-z0-9-]+\.?){1,}/', $referer)) {
			trigger_error('Referer should be valid domain.');
		}

		$this->referer = $referer;
	}

	/**
	 * @param int $token
	 * @return VideoInfo
	 */
	public function getInfo(int $token): VideoInfo
	{
		static $cache = [];

		if (isset($cache[$token]) === false) {
			curl_setopt($ch = curl_init(), CURLOPT_URL, 'https://vimeo.com/api/oembed.json?url=https:%2F%2Fvimeo.com%2F' . $token);
			curl_setopt($ch, CURLOPT_REFERER, $this->referer);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$cache[$token] = new VideoInfo(json_decode(curl_exec($ch), true) ?? []);
			curl_close($ch);
		}

		return $cache[$token];
	}

}
