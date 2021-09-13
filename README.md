Symfony Aware
=============
[![PHP from Packagist](https://img.shields.io/packagist/php-v/symfony/symfony.svg)](https://packagist.org/packages/bacart/symfony-aware)
[![Latest Stable Version](https://poser.pugx.org/bacart/symfony-aware/v/stable.png)](https://packagist.org/packages/bacart/symfony-aware)
[![Total Downloads](https://poser.pugx.org/bacart/symfony-aware/downloads.svg)](https://packagist.org/packages/bacart/symfony-aware)
[![License](https://poser.pugx.org/bacart/symfony-aware/license.svg)](LICENSE)

Symfony service awareness library.

Installation
------------
##### Using command line:
Run the following command, and you will get the latest version by [Packagist][1].

```bash
composer require bacart/symfony-aware
```

##### Using composer.json
To use the newest (maybe unstable) version add following into your composer.json:

```json
{
    "require": {
        "bacart/symfony-aware": "dev-master"
    }
}
```

Usage Example
-------------
```php
use Bacart\SymfonyAware\Interfaces\LoggerAwareInterface;
use Bacart\SymfonyAware\Traits\LoggerAwareTrait;

class SomeService implements LoggerAwareInterface
{
    use LoggerAwareTrait;
    
    public function someMethod(): void
    {
        $this->logger->info('Some information message');
    }
}
```
Example assumes that you are using an [autowiring][2].

License
-------
This project is released under the [MIT license](LICENSE).

About
-----
Project development is led by the [Alex Bacart][3].

[1]: https://packagist.org/packages/bacart/symfony-aware
[2]: https://symfony.com/doc/current/service_container/autowiring.html
[3]: https://github.com/alex-bacart
