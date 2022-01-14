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