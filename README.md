# dcplibrary/test

Laravel package for test

## Requirements

- PHP >= 8.2
- Laravel 10.x | 11.x | 12.x

## Installation

```bash
composer require dcplibrary/test
```

The package is auto-discovered by Laravel. No publishing is required — routes,
views, migrations, config, and translations all load automatically from the package.

Publishing is available if you want to **customise** any of these assets:

```bash
# Publish everything at once
php artisan vendor:publish --tag="test"

# Or publish individually
php artisan vendor:publish --tag="test-config"
php artisan vendor:publish --tag="test-views"
php artisan vendor:publish --tag="test-migrations"
```

## Configuration

After publishing, edit `config/test.php`:

```php
return [
    'enabled' => env('TEST_ENABLED', true),
    'debug'   => env('TEST_DEBUG', false),
];
```

## Usage

```php
use dcplibrary\test\Facades\test;

// Example
$result = test::example();
```

## Testing

```bash
composer test
```

## Code Style

This package follows PSR-12. Run the linter with:

```bash
composer lint        # check
composer lint-fix    # auto-fix
```

## Changelog

All notable changes are documented in [CHANGELOG.md](CHANGELOG.md),
generated automatically by [Semantic Release](https://semantic-release.gitbook.io).

## Contributing

Contributions are welcome. Please open an issue first to discuss what you'd like
to change, then submit a pull request against `main` using
[Conventional Commits](https://www.conventionalcommits.org).

## License

MIT — see [LICENSE](LICENSE) for details.

## Author

**Brian Lashbrook** <blashbrook@dcplibrary.org>
Daviess County Public Library — <https://www.dcplibrary.org>
