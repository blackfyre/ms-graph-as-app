# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/blackfyre/ms-graph-as-app.svg?style=flat-square)](https://packagist.org/packages/blackfyre/ms-graph-as-app)
[![Build Status](https://img.shields.io/travis/blackfyre/ms-graph-as-app/master.svg?style=flat-square)](https://travis-ci.org/blackfyre/ms-graph-as-app)
[![Quality Score](https://img.shields.io/scrutinizer/g/blackfyre/ms-graph-as-app.svg?style=flat-square)](https://scrutinizer-ci.com/g/blackfyre/ms-graph-as-app)
[![Total Downloads](https://img.shields.io/packagist/dt/blackfyre/ms-graph-as-app.svg?style=flat-square)](https://packagist.org/packages/blackfyre/ms-graph-as-app)

This is a very basic way to query the MS Graph API as an application. Oauth2 isn't intended to be supported... ever. There are Socialite packages for that.

## Installation

You can install the package via composer:

```bash
composer require blackfyre/ms-graph-as-app
```
### Lumen

You'll need to register the service provider in your `bootstrap/app.php`

``` php
$app->register(\Blackfyre\MsGraphAsApp\MsGraphAsAppServiceProvider::class);
```

## Usage

### Lumen

To use this package, anywhere in you app, just call:

``` php 
$graphInstance = app('ms-graph-as-app')->getGraph();
```
This will land you with a preconfigured MS Graph instance, read more at https://github.com/microsoftgraph/msgraph-sdk-php


### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email gnick666@gmail.com instead of using the issue tracker.

## Credits

- [Meki](https://github.com/blackfyre)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
