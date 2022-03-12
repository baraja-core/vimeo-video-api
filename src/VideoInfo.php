<?php

declare(strict_types=1);

namespace Baraja\VimeoAPI;


use DateTimeImmutable;

final class VideoInfo
{
	/**
	 * All original data from API as array.
	 *
	 * @var array<string, mixed>
	 */
	private array $haystack;

	/** @var string|null (sample: "video") */
	private ?string $type;

	/** @var string|null (sample: "1.0") */
	private ?string $version;

	/** @var string|null (sample: "Vimeo") */
	private ?string $providerName;

	/** @var string|null (sample: "https://vimeo.com/") */
	private ?string $providerUrl;

	/** @var string|null (name of video) */
	private ?string $title;

	private ?string $authorName;

	private ?string $authorUrl;

	private ?bool $plus;

	/** @var string|null (sample: "pro") */
	private ?string $accountType;

	/** Full valid HTML code (iframe) with player. */
	private ?string $html;

	/** @var int|null (sample: 640) */
	private ?int $width;

	/** @var int|null (sample: 360) */
	private ?int $height;

	/** @var int|null (duration of video in seconds) */
	private ?int $duration;

	private ?string $description;

	/**
	 * Absolute URL to Vimeo server.
	 * Thumbnail do not contain token, so you can use this URL safely in your application and token will keep secret.
	 */
	private ?string $thumbnailUrl;

	/** @var int|null (sample: 640) */
	private ?int $thumbnailWidth;

	/** @var int|null (sample: 300) */
	private ?int $thumbnailHeight;

	/** @var string|null (absolute URL to image) */
	private ?string $thumbnailUrlWithPlayButton;

	private ?DateTimeImmutable $uploadDate;

	/** @var int|null (sample: 200) */
	private ?int $domainStatusCode;

	private ?int $videoId;

	private ?string $uri;


	/**
	 * @param array<string, mixed> $data
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
		$this->plus = isset($data['is_plus']) ? (bool) $data['is_plus'] : null;
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
		$this->domainStatusCode = $data['domain_status_code'] ?? null;
		$this->videoId = $data['video_id'] ?? null;
		$this->uri = $data['uri'] ?? null;
		$this->uploadDate = isset($data['upload_date']) ? new DateTimeImmutable($data['upload_date']) : null;
	}


	/**
	 * @return array<string, mixed>
	 */
	public function getHaystack(): array
	{
		return $this->haystack ?? [];
	}


	public function getType(): ?string
	{
		return $this->type;
	}


	public function getVersion(): ?string
	{
		return $this->version;
	}


	public function getProviderName(): ?string
	{
		return $this->providerName;
	}


	public function getProviderUrl(): ?string
	{
		return $this->providerUrl;
	}


	public function getTitle(): ?string
	{
		return $this->title;
	}


	public function getAuthorName(): ?string
	{
		return $this->authorName;
	}


	public function getAuthorUrl(): ?string
	{
		return $this->authorUrl;
	}


	public function isPlus(): ?bool
	{
		return $this->plus;
	}


	public function getAccountType(): ?string
	{
		return $this->accountType;
	}


	public function getHtml(): ?string
	{
		return $this->html;
	}


	public function getWidth(): ?int
	{
		return $this->width;
	}


	public function getHeight(): ?int
	{
		return $this->height;
	}


	public function getDuration(): ?int
	{
		return $this->duration;
	}


	public function getDescription(): ?string
	{
		return $this->description;
	}


	public function getThumbnailUrl(): ?string
	{
		return $this->thumbnailUrl;
	}


	public function getThumbnailWidth(): ?int
	{
		return $this->thumbnailWidth;
	}


	public function getThumbnailHeight(): ?int
	{
		return $this->thumbnailHeight;
	}


	public function getThumbnailUrlWithPlayButton(): ?string
	{
		return $this->thumbnailUrlWithPlayButton;
	}


	public function getUploadDate(): ?DateTimeImmutable
	{
		return $this->uploadDate;
	}


	public function getDomainStatusCode(): ?int
	{
		return $this->domainStatusCode;
	}


	public function getVideoId(): ?int
	{
		return $this->videoId;
	}


	public function getUri(): ?string
	{
		return $this->uri;
	}
}
