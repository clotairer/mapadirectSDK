MapadirectSDK, PHP client for Mapadirect Marketplace API
=======================

[![Latest Version](https://img.shields.io/github/release/202-ecommerce/mapadirectSDK/all.svg?style=flat-square)](https://github.com/guzzle/guzzle/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/mapadirectsdk/mapadirectsdk.svg?style=flat-square)](https://packagist.org/packages/guzzlehttp/guzzle)
![Requirements](https://img.shields.io/packagist/php-v/mapadirectsdk/mapadirectsdk.svg?style=flat-square)


MapadirectSDK est une librairie PHP permettant de connecter vote site marchand à la
marketplace Mapadirect.

La librairie permert de synchroniser sont catalogue et recevoir des commandes de la market place

## Documentation

Vous trouverez ici la [documentation de mapadirectsdk](https://docs.202-ecommerce.com/mapadirectsdk/)


## Installer mapadirectsdk

Nous recommandons d'installer mapadirectsdk avec composer
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Ensuite, lancer la commande Composer command pour installer la dernière version de mapadirectSDK:

```bash
php composer.phar require mapadirectsdk/mapadirectsdk
```

Après installation vous devez appeler l'autoload de Composer :

```php
require 'vendor/autoload.php';
```

Vous pourrez ensuite mettre à jour mapadirectsdk en utilisant composer:

 ```bash
composer.phar update
 ```


## Guide des versions

| Version | Status     | Packagist           | Namespace    | Repo                | Doc                | PSR-7 | PHP Version |
|---------|------------|---------------------|--------------|---------------------|---------------------|-------|-------------|
| 1.x     | EOL        | `mapadirectsdk/mapadirectsdk`     | `MapaDirectSDK`     | [v1][mapadirectsdk-1-repo] | [v1][mapadirectsdk-1-doc] | No    | >= 5.6    |

[mapadirectsdk-1-repo]: https://github.com/202-ecommerce/mapadirectSDK
[mapadirectsdk-1-doc]: https://docs.202-ecommerce.com/mapadirectsdk/1.0.0/
