Vimeo video API
===============

Simple API wrapper for Vimeo. [Czech documentation](https://php.baraja.cz/zpracovani-nahledovych-obrazku-z-vimea)

Download video name, description, thumbnail, duration and more.

📦 Installation
---------------

It's best to use [Composer](https://getcomposer.org) for installation, and you can also find the package on
[Packagist](https://packagist.org/packages/baraja-core/vimeo-video-api) and
[GitHub](https://github.com/baraja-core/vimeo-video-api).

To install, simply use the command:

```
$ composer require baraja-core/vimeo-video-api
```

You can use the package manually by creating an instance of the internal classes, or register a DIC extension to link the services directly to the Nette Framework.

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

📄 License
-----------

`baraja-core/vimeo-video-api` is licensed under the MIT license. See the [LICENSE](https://github.com/baraja-core/variable-generator/blob/master/LICENSE) file for more details.
