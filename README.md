# Validate Disposable Email Domain

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bekwoh/laravel-blacklist.svg?style=flat-square)](https://packagist.org/packages/bekwoh/laravel-blacklist)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bekwoh/laravel-blacklist/run-tests?label=tests)](https://github.com/bekwoh/laravel-blacklist/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bekwoh/laravel-blacklist/Fix%20PHP%20code%20style%20issues?label=code%20style)](https://github.com/bekwoh/laravel-blacklist/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bekwoh/laravel-blacklist.svg?style=flat-square)](https://packagist.org/packages/bekwoh/laravel-blacklist)

Validate the email provided either in the list of blacklisted domain.

## Installation

You can install the package via composer:

```bash
composer require bekwoh/laravel-blacklist
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-blacklist-config"
```

## Usage

```php
use Bekwoh\LaravelBlacklist\Rules\Blacklist;

$request->validate([
    'email' => [new Blacklist]
]);

// OR

Validator::validate([
    'email' => 'malinator.com',
], [
    'email' => [new Blacklist],
]);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Nasrul Hazim Bin Mohamad](https://github.com/nasrulhazim)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
