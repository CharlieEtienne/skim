# Skim

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ijpatricio/skim.svg?style=flat-square)](https://packagist.org/packages/ijpatricio/skim)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/ijpatricio/skim/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/ijpatricio/skim/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/ijpatricio/skim/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/ijpatricio/skim/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ijpatricio/skim.svg?style=flat-square)](https://packagist.org/packages/ijpatricio/skim)

Light, fast, minimal not-a-CMS CMS

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require ijpatricio/skim
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="skim-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="skim-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="skim-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$skim = new Ijpatricio\Skim();
echo $skim->echoPhrase('Hello, Ijpatricio!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Joao Patricio](https://github.com/ijpatricio)
- [Saade](https://github.com/saade/filament-extra) Ported Parent Resource
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
