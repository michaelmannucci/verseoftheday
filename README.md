![verseoftheday](https://laravel-og.beyondco.de/Verse%20of%20the%20Day.png?theme=light&packageManager=composer+require&packageName=michaelmannucci%2Fverseoftheday&pattern=architect&style=style_1&description=Start+your+day+with+the+Word+of+life&md=1&showWatermark=0&fontSize=100px&images=book-open)

## Installation

Install via composer or the Control Panel

```bash
composer require michaelmannucci/verseoftheday
```

## Usage

To add the widget to the dashboard, add the following entry to the widgets array in `config/statamic/cp.php`:

```php
[
	'type' => 'verse_of_the_day',
	'width' => 100,
],
```