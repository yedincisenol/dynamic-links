
[![Travis](https://img.shields.io/travis/yedincisenol/dynamic-links.svg?style=for-the-badge)]()
[![Packagist](https://img.shields.io/packagist/dt/yedincisenol/dynamic-links.svg?style=for-the-badge)]()
[![Packagist](https://img.shields.io/packagist/v/yedincisenol/dynamic-links.svg?style=for-the-badge)]()
[![Packagist](https://img.shields.io/packagist/l/yedincisenol/dynamic-links.svg?style=for-the-badge)]()

Create Firebase Dynamic Links from Php and Laravel

* <a href="#php-install">Php Installation</a>
* <a href="#php-config">Configuration</a>
* <a href="#laravel-install"> Laravel Installation</a>
* <a href="#usage">Usage examples</a>

### <a name="php-instal"></a> Php Install

```php
composer require "yedincisenol/dynamic-links"
```

### <a name="php-config"></a> Php Config
```$xslt
$dynamicLink = new yedincisenol\DynamicLinks\DynamicLinks([
    'api_key'               =>  'apiKeyFromFirebaseProject',
    'dynamic_link_domain'   =>  'dynami-domain-from-dynamic-links.goo.gl
]);
```

### <a name="laravel-install"></a> Laravel Install

- Add composer
```php
composer require "yedincisenol/dynamic-links"
```

- Add service provider (For Laravel 5.6 before) 
`config/app.php`

```php
'providers' => [
    yedincisenol\DynamicLinks\LaravelServiceProvider::class
],
```

- Fill Environments
> copy theese parameters to your project .env and fill
```
FIREBASE_API_KEY=
FIREBASE_DYNAMIC_LINKS_DOMAIN=
```

- Laravel Usage
```
$link = new yedincisenol\DynamicLinks\DynamicLink('http://yeni.co/');
$shortLink = $dynamicLink->create($link, 'UNGUESSABLE');
```

- Publish Config file
Publish Config for Laravel
```$xslt
php artisan vendor:publish --tag=dynamic-links
```

### <a name="usage"></a> Usage
```php
$dynamicLink = new yedincisenol\DynamicLinks\DynamicLinks([
    'api_key'               =>  $apiKey,
    'dynamic_link_domain'   =>  $dynamicLinkDomain
]);

$link = new yedincisenol\DynamicLinks\DynamicLink('http://yeni.co/');
$shortLink = $dynamicLink->create($link, 'UNGUESSABLE');
```

> Advanced usage: example.php

### <a name="test"></a> Test
Run
```$xslt
phpunit
```
