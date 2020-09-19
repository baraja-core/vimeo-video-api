Vimeo video API
===============

Simple API wrapper for Vimeo. [Czech documentation](https://php.baraja.cz/zpracovani-nahledovych-obrazku-z-vimea)

Download video name, description, thumbnail, duration and more.

Install
-------

By Composer:

```shell
$ composer require baraja-core/vimeo-video-api
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
$api = new \Baraja\VimeoAPI\VimeoVideoAPI;

$token = 0; // Some token as integer
$info = $api->getInfo($token);

echo var_dump($info);

// or specific information

echo 'Duration is: ' . $info->getDuration();
```

Referer
-------

In new Vimeo API you must use `http referer`, it's domain name of your server where your API is hosted.

If the referrer is not listed, the `baraja.cz` is assumed.
