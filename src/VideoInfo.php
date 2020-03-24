<?php

declare(strict_types=1);

namespace Baraja\VimeoAPI;


final class VideoInfo
{

	/**
	 * All original data from API as array.
	 *
	 * @var mixed[]
	 */
	private $haystack;

	/**
	 * @sample "video"
	 * @var string|null
	 */
	private $type;

	/**
	 * @sample "1.0"
	 * @var string|null
	 */
	private $version;

	/**
	 * @sample "Vimeo"
	 * @var string|null
	 */
	private $providerName;

	/**
	 * @sample "https://vimeo.com/"
	 * @var string|null
	 */
	private $providerUrl;

	/**
	 * Name of video.
	 *
	 * @var string|null
	 */
	private $title;

	/** @var string|null */
	private $authorName;

	/** @var string|null */
	private $authorUrl;

	/** @var bool|null */
	private $isPlus;

	/**
	 * @sample "pro"
	 * @var string|null
	 */
	private $accountType;

	/**
	 * Full valid HTML code (iframe) with player.
	 *
	 * @var string|null
	 */
	private $html;

	/**
	 * @sample 640
	 * @var int|null
	 */
	private $width;

	/**
	 * @sample 360
	 * @var int|null
	 */
	private $height;

	/**
	 * Duration of video in seconds.
	 *
	 * @sample 903
	 * @var int|null
	 */
	private $duration;

	/** @var string|null */
	private $description;

	/**
	 * Absolute URL to Vimeo server.
	 * Thumbnail do not contain token, so you can use this URL safely in your application and token will keep secret.
	 *
	 * @var string|null
	 */
	private $thumbnailUrl;

	/**
	 * @sample 640
	 * @var int|null
	 */
	private $thumbnailWidth;

	/**
	 * @sample 360
	 * @var int|null
	 */
	private $thumbnailHeight;

	/**
	 * URL to image.
	 *
	 * @var string|null
	 */
	private $thumbnailUrlWithPlayButton;

	/**
	 * Date in format: "Y-m-d H:i:s"
	 *
	 * @sample "2017-09-15 20:47:13"
	 * @var string|null
	 */
	private $uploadDate;

	/**
	 * @sample 200
	 * @var int|null
	 */
	private $domainStatusCode;

	/**
	 * Video ID is token.
	 *
	 * @var int|null
	 */
	private $videoId;

	/** @var string|null */
	private $uri;


	/**
	 * @param mixed[] $data
	 */
	public function __construct(array $data)
	{
		$this->haystack = $data;
		$this->type = $data['type'] ?? null;
		$this->version = $data['version'] ?? null;
		$this->providerName = $data['provider_name'] ?? null;
		$this->providerUrl = $data['provider_url'] ?? null;
		$this->title = $data['title'] ?? null;
		$this->authorName = $data['author_name'] ?? null;
		$this->authorUrl = $data['author_url'] ?? null;
		$this->isPlus = isset($data['is_plus']) ? (bool) $data['is_plus'] : null;
		$this->accountType = $data['account_type'] ?? null;
		$this->html = $data['html'] ?? null;
		$this->width = $data['width'] ?? null;
		$this->height = $data['height'] ?? null;
		$this->duration = $data['duration'] ?? null;
		$this->description = $data['description'] ?? null;
		$this->thumbnailUrl = $data['thumbnail_url'] ?? null;
		$this->thumbnailWidth = $data['thumbnail_width'] ?? null;
		$this->thumbnailHeight = $data['thumbnail_height'] ?? null;
		$this->thumbnailUrlWithPlayButton = $data['thumbnail_url_with_play_button'] ?? null;
		$this->uploadDate = $data['upload_date'] ?? null;
		$this->domainStatusCode = $data['domain_status_code'] ?? null;
		$this->videoId = $data['video_id'] ?? null;
		$this->uri = $data['uri'] ?? null;
	}


	/**
	 * @return mixed[]
	 */
	public function getHaystack(): array
	{
		return $this->haystack ?? [];
	}


	/**
	 * @return string|null
	 */
	public function getType(): ?string
	{
		return $this->type;
	}


	/**
	 * @return string|null
	 */
	public function getVersion(): ?string
	{
		return $this->version;
	}


	/**
	 * @return string|null
	 */
	public function getProviderName(): ?string
	{
		return $this->providerName;
	}


	/**
	 * @return string|null
	 */
	public function getProviderUrl(): ?string
	{
		return $this->providerUrl;
	}


	/**
	 * @return string|null
	 */
	public function getTitle(): ?string
	{
		return $this->title;
	}


	/**
	 * @return string|null
	 */
	public function getAuthorName(): ?string
	{
		return $this->authorName;
	}


	/**
	 * @return string|null
	 */
	public function getAuthorUrl(): ?string
	{
		return $this->authorUrl;
	}


	/**
	 * @return bool|null
	 */
	public function getisPlus(): ?bool
	{
		return $this->isPlus;
	}


	/**
	 * @return string|null
	 */
	public function getAccountType(): ?string
	{
		return $this->accountType;
	}


	/**
	 * @return string|null
	 */
	public function getHtml(): ?string
	{
		return $this->html;
	}


	/**
	 * @return int|null
	 */
	public function getWidth(): ?int
	{
		return $this->width;
	}


	/**
	 * @return int|null
	 */
	public function getHeight(): ?int
	{
		return $this->height;
	}


	/**
	 * @return int|null
	 */
	public function getDuration(): ?int
	{
		return $this->duration;
	}


	/**
	 * @return string|null
	 */
	public function getDescription(): ?string
	{
		return $this->description;
	}


	/**
	 * @return string|null
	 */
	public function getThumbnailUrl(): ?string
	{
		return $this->thumbnailUrl;
	}


	/**
	 * @return int|null
	 */
	public function getThumbnailWidth(): ?int
	{
		return $this->thumbnailWidth;
	}


	/**
	 * @return int|null
	 */
	public function getThumbnailHeight(): ?int
	{
		return $this->thumbnailHeight;
	}


	/**
	 * @return string|null
	 */
	public function getThumbnailUrlWithPlayButton(): ?string
	{
		return $this->thumbnailUrlWithPlayButton;
	}


	/**
	 * @return string|null
	 */
	public function getUploadDate(): ?string
	{
		return $this->uploadDate;
	}


	/**
	 * @return int|null
	 */
	public function getDomainStatusCode(): ?int
	{
		return $this->domainStatusCode;
	}


	/**
	 * @return int|null
	 */
	public function getVideoId(): ?int
	{
		return $this->videoId;
	}


	/**
	 * @return string|null
	 */
	public function getUri(): ?string
	{
		return $this->uri;
	}
}