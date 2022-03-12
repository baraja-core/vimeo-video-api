<?php

declare(strict_types=1);

namespace Baraja\VimeoAPI;


final class VimeoVideoAPI
{
	private ?string $referer = null;


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
			throw new \InvalidArgumentException(sprintf('Vimeo video #%s does not exist.', $token));
		}
		if (isset($cache[$token]) === false) {
			$url = 'https://vimeo.com/api/oembed.json?url=https:%2F%2Fvimeo.com%2F' . $token;
			curl_setopt($ch = curl_init(), CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_REFERER, $this->getReferer());
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			if (($exec = curl_exec($ch)) === false) {
				throw new \RuntimeException('Vimeo API response is empty.' . "\n" . sprintf('URL: "%s".', $url));
			}
			$cache[$token] = new VideoInfo(json_decode((string) $exec, true, 512, JSON_THROW_ON_ERROR) ?? []);
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
			throw new \LogicException(sprintf('Referer must be valid domain, but string "%s" given.', $referer));
		}
		$this->referer = $referer;

		return $this;
	}
}
