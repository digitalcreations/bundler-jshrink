# JShrink wrapper for dc/bundler

Enables you to minify Javascript files using dc/bundler.

## Installation

```
composer require dc/bundler-jshrink
```

or in `composer.json`

```json
"require": {
    "dc/bundler-jshrink": "dev-master"
}
```

## Setup

This package depends on `dc/router`, but strongly suggests `dc/ioc`. This is how you register the transformer with
the IoC container so it is picked up automatically:

```php
\DC\Bundler\JShrink\JShrinkTransformer::registerWithContainer($container);
```
