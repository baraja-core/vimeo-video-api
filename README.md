Vimeo video API
===============

Simple API wrapper for Vimeo.

Download video name, description, thumbnail, duration and more.

Install
-------

By Composer:

```shell
composer require baraja-core/vimeo-video-api
```

And simple create instance or create service:

```yaml
service:
    - \Baraja\VimeoAPI\VimeoVideoAPI(%vimeo.referer%)

parameters:
    vimeo:
        referer: https://baraja.cz
```

Or manually:

```php
$api = new \Baraja\VimeoAPI\VimeoVideoAPI('https://baraja.cz');

$token = 0; // Some token as integer

echo var_dump($api->getInfo($token));
```

Referer
-------

In new Vimeo API you must use `http referer`, it's domain name of your server where your API is hosted.
