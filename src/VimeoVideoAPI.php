<?php

declare(strict_types=1);

namespace Baraja\VimeoAPI;


final class VimeoVideoAPI
{

	/** @var string|null */
	private $referer;


	public function __construct(?string $referer = null)
	{
		if ($referer !== null) {
			$this->setReferer($referer);
		}
	}


	public function getInfo(int $token): VideoInfo
	{
		static $cache = [];

		if ($token < 10) {
			throw new \InvalidArgumentException('Vimeo video #' . $token . ' does not exist.');
		}
		if (isset($cache[$token]) === false) {
			$url = 'https://vimeo.com/api/oembed.json?url=https:%2F%2Fvimeo.com%2F' . $token;
			curl_setopt($ch = curl_init(), CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_REFERER, $this->getReferer());
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			if (($exec = curl_exec($ch)) === false) {
				throw new \RuntimeException('Vimeo API response is empty.' . "\n" . 'URL: "' . $url . '".');
			}
			$cache[$token] = new VideoInfo(json_decode($exec, true) ?? []);
			curl_close($ch);
		}

		return $cache[$token];
	}


	public function getReferer(): string
	{
		return $this->referer ?? 'https://baraja.cz';
	}


	public function setReferer(string $referer): self
	{
		if (preg_match('/^https?:\/\/[a-z0-9-]+\.(?:[a-z0-9-]+\.?){1,}/', $referer) === 0) {
			throw new \LogicException('Referer must be valid domain, but string "' . $referer . '" given.');
		}
		$this->referer = $referer;

		return $this;
	}
}
