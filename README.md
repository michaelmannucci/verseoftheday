![verseoftheday](https://laravel-og.beyondco.de/Verse%20of%20the%20Day.png?theme=light&packageManager=composer+require&packageName=michaelmannucci%2Fverseoftheday&pattern=architect&style=style_1&description=Start+your+day+with+the+Word+of+life&md=1&showWatermark=0&fontSize=100px&images=book-open)

# Statamic Widget: Verse of the Day

## What is it

A widget that displays a Bible verse every day in the Statamic dashboard.

## How to install it

Install via composer or the Control Panel

```bash
composer require michaelmannucci/verseoftheday
```

## How to use it

To add the widget to the dashboard, add the following entry to the widgets array in `config/statamic/cp.php`:

```php
[
	'type' => 'verse_of_the_day',
	'width' => 100,
],
```

## How to customize it

By default, the widget uses the NIV. You may optionally select the version/language by setting a `version` parameter.

```php
[
	'type' => 'verse_of_the_day',
	'width' => 100,
	'version' => 'NASB1995'
],
```

**Note**: Don't forget to run `php artisan config:cache` after making changes to `config/statamic/cp.php`.

[Click here](https://www.biblegateway.com/versions/) to see a full list of all available versions/languages and their codes.