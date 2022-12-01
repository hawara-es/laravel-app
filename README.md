# Skeleton for Laravel Applications

This is the skeleton for a basic Laravel application with authentication, API, queues, broadcasting and development tools that speed up the implementation of new entities.

It is in early development and it's still not ready for usage. Please check the [1.x milestone](https://github.com/hawara-es/laravel-app/milestone/1) for information about the road map.

## How to Install

### Download

To get started, clone the `hawara/laravel-app` repository.

```bash
# Using SSH
git clone git@github.com:hawara-es/laravel-app.git

# ... or HTTPS
git clone https://github.com/hawara-es/laravel-app.git
```

### Install

Then, update the Composer dependencies.

```bash
composer install
```

## Framework and Dependencies

This application uses:

| Dependency | Version | Documentation | Repository |
| --- | --- | --- | --- |
| Laravel Framework | **^9.19** | [laravel.com/docs/9.x](https://laravel.com/docs/9.x) | [github.com/laravel/laravel](https://github.com/laravel/laravel) |
| Laravel Fortify | **^1.14** | [laravel.com/docs/9.x/fortify](https://laravel.com/docs/9.x/fortify) | [github.com/laravel/fortify](https://github.com/laravel/fortify) |
| Laravel Horizon | **^5.10** | [laravel.com/docs/9.x/horizon](https://laravel.com/docs/9.x/horizon) | [github.com/laravel/horizon](https://github.com/laravel/horizon) |
| Laravel Backup | **^8.1** | [spatie.be/docs/laravel-backup/v8/](https://spatie.be/docs/laravel-backup/v8/) | [github.com/spatie/laravel-backup](https://github.com/spatie/laravel-backup) |

## Code Contributing Guide

For the development, this packages are used:

| Dependency | Version | Documentation | Repository |
| --- | --- | --- | --- |
| Laravel Code Style | **^1.1** | [laravel-code-style/README.md](https://github.com/Jubeki/laravel-code-style/blob/main/README.md) | [jubeki/laravel-code-style](https://github.com/Jubeki/laravel-code-style) |
| DOM Crawler | **^6.2** | [symfony.com/doc](https://symfony.com/doc/current/components/dom_crawler.html) | [symfony/dom-crawler](https://github.com/symfony/dom-crawler) |

#### Code Style

To run a check of Laravel's code style, use:

```bash
composer check
```

To apply the code style changes and fix the file, use:

```bash
composer fix
```
