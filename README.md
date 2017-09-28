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

- Add service provider
`config/app.php`

```php
'providers' => [
    yedincisenol\DynamicLinks\LaravelServiceProvider::class
],
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